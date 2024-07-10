<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Destinasi;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Feedback;
use Carbon\Carbon;

class DashboardAdminController extends Controller
{
    public function index()
    {

        $top5 = Destinasi::select(
            'destinasis.id',
            'destinasis.nama',
            'destinasis.id_kategori',
            'destinasis.gambar',
            DB::raw('COALESCE(AVG(reviews.rating), 0) as avg_rating')
        )
            ->leftJoin('reviews', 'destinasis.id', '=', 'reviews.id_wisata')
            ->groupBy('destinasis.id', 'destinasis.nama', 'destinasis.id_kategori', 'destinasis.gambar')
            ->orderByRaw('COALESCE(AVG(reviews.rating), 0) DESC')
            ->limit(5)
            ->get();

        // Ambil data kunjungan untuk ditampilkan dalam grafik
        $visits = DB::table('visits')
            ->select(DB::raw('DATE_FORMAT(date, "%Y-%m") as month'), DB::raw('SUM(hits) as total_hits'))
            ->groupBy('month')
            ->get();

        $visits = $visits->map(function ($item) {
            $item->month = Carbon::createFromFormat('Y-m', $item->month)->format('F Y');
            return $item;
        });

        return view('admin.index', [
            'title' => 'Dashboard',
            'top' => $top5,
            'destinasi' => Destinasi::all(),
            'blog' => Post::all(),
            'feedback' => Feedback::all(),
            'visits' => $visits
        ]);
    }
}
