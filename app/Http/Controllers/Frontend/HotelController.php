<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hotel;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $dropdown = Hotel::all();
        $selectedHotel = null;

        // Periksa apakah ada nilai yang dipilih pada dropdown select
        if ($request->has('hotel')) {
            if ($request->hotel != '') {
                $selectedHotel = $request->hotel;
                // Simpan nilai dropdown select ke dalam session flash data
                Session::flash('selectedHotel', $selectedHotel);
            } else {
                // Hapus session jika nilai dropdown kosong
                Session::forget('selectedHotel');
            }
        } else {
            $selectedHotel = Session::get('selectedHotel');
        }

        if ($selectedHotel) {
            $hotels = Hotel::where('id', $selectedHotel)->paginate(6);
        } else {
            $hotels = Hotel::paginate(5);
        }

        return view('frontend.hotel.index', [
            'hotels' => $hotels,
            'dropdown' => $dropdown,
            'title' => 'Hotel',
        ]);
    }

    public function detail(Hotel $hotel)
    {

        $comment = Comment::where('id_hotel', $hotel->id)->with('user')->latest()->get();
        return view('frontend.hotel.detail', [
            'title' => 'Hotel',
            'hotel' => $hotel,
            'komentar' => $comment
        ]);
    }
}
