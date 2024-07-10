@extends('layouts.main')

@section('content')
    {{-- Carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($carousels as $key => $carousel)
                <li data-target="#carouselExampleCaptions" data-slide-to="{{ $key }}"
                    {{ $key == 0 ? 'class=active' : '' }}></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($carousels as $key => $carousel)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ asset('img/' . $carousel['gambar']) }}" class="d-block w-100 vh-100"
                        style="object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{ $carousel['judul'] }}</h5>
                        <div class="card-body">
                            <p style="font-size: 14px">{{ $carousel['deskripsi'] }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" data-target="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" data-target="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{-- Profile --}}
    <div class="container-fluid py-4" style="background-color: rgb(245, 242, 245)">
        <h2 class="text-center font-weight-semibold">Video Kota Karawang</h2>
        <div class="d-flex justify-content-center mb-4">
            <svg class="fill-current" width="200" viewBox="0 0 187 12" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g id="10.1-Destination" transform="translate(-85.000000, -323.000000)" fill-rule="nonzero">
                        <g id="wave-short" transform="translate(85.000000, 323.000000)">
                            <path
                                d="M179.28625,3.9 C176.581429,2.1 173.876607,0 168.166429,0 C162.756786,0 159.751429,2.1 157.347143,3.9 C155.243393,5.4 153.440179,6.6 149.533214,6.6 C145.62625,6.6 144.123571,5.4 141.719286,3.9 C139.315,2.1 136.610179,0 130.9,0 C125.490357,0 122.485,2.1 120.080714,3.9 C117.976964,5.4 116.17375,6.6 112.266786,6.6 C108.359821,6.6 106.857143,5.4 104.452857,3.9 C102.048571,2.1 99.34375,0 93.6335714,0 C88.2239286,0 85.2185714,2.1 82.8142857,3.9 C80.7105357,5.4 78.9073214,6.6 75.0003571,6.6 C71.0933929,6.6 69.5907143,5.4 67.1864286,3.9 C64.7821429,2.1 61.7767857,0 56.3671429,0 C50.9575,0 47.9521429,2.1 45.5478571,3.9 C43.4441071,5.4 41.6408929,6.6 37.7339286,6.6 C33.8269643,6.6 32.3242857,5.4 29.92,3.9 C27.5157143,2.1 24.5103571,0 19.1007143,0 C13.6910714,0 10.6857143,2.1 8.28142857,3.9 C5.87714286,5.4 4.07392857,6.6 0.4675,6.6 L0.4675,12 C5.87714286,12 8.8825,9.9 11.2867857,8.1 C13.3905357,6.6 15.19375,5.4 19.1007143,5.4 C23.0076786,5.4 24.5103571,6.6 26.9146429,8.1 C29.3189286,9.9 32.3242857,12 37.7339286,12 C43.1435714,12 46.1489286,9.9 48.5532143,8.1 C50.6569643,6.6 52.4601786,5.4 56.3671429,5.4 C60.2741071,5.4 61.7767857,6.6 64.1810714,8.1 C66.5853571,9.9 69.5907143,12 75.0003571,12 C80.41,12 83.4153571,9.9 85.8196429,8.1 C87.9233929,6.6 89.7266071,5.4 93.6335714,5.4 C97.5405357,5.4 99.0432143,6.6 101.4475,8.1 C103.851786,9.9 106.857143,12 112.266786,12 C117.676429,12 120.681786,9.9 123.086071,8.1 C125.189821,6.6 126.993036,5.4 130.9,5.4 C134.806964,5.4 136.309643,6.6 138.713929,8.1 C141.118214,9.9 144.123571,12 149.533214,12 C154.942857,12 157.948214,9.9 160.3525,8.1 C162.45625,6.6 164.259464,5.4 168.166429,5.4 C172.073393,5.4 173.576071,6.6 175.980357,8.1 C178.685179,9.9 181.39,12 186.799643,12 L186.799643,6.6 C183.193214,6.6 181.39,5.4 179.28625,3.9 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center">
                <div class="mb-3">
                    <h2>Visit Karawang!</h2>
                    <p>Kota Karawang dikenal sebutan kota pangkal perjuangan. Dari tempat inilah naskah proklamasi
                        kemerdekaan republik indonesia dibuat. Bukan hanya itu! Kota Karawang juga memiliki keindahan
                        panorama dari sudut yang lainnya. Penasaran bukan? Tunggu apalagi. Hayuk urang ka Karawang!</p>
                    <a href="" class="btn btn-icon icon-left btn-info"><i class="fas fa-info-circle"></i>
                        Selengkapnya ...</a>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <iframe width="100%" height="315" class="rounded"
                    src="https://www.youtube.com/embed/sXAxJEUHH9g?si=6JR35lgYkFt74CCB&rel=0" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    {{-- Top 5 Wisata --}}
    <div class="container mx-auto pt-4 align-items-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <h2 class="text-center font-weight-semibold">Top 5 Wisata Populer</h2>
        <div class="d-flex justify-content-center mb-4">
            <svg class="fill-current" width="200" viewBox="0 0 187 12" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g id="10.1-Destination" transform="translate(-85.000000, -323.000000)" fill-rule="nonzero">
                        <g id="wave-short" transform="translate(85.000000, 323.000000)">
                            <path
                                d="M179.28625,3.9 C176.581429,2.1 173.876607,0 168.166429,0 C162.756786,0 159.751429,2.1 157.347143,3.9 C155.243393,5.4 153.440179,6.6 149.533214,6.6 C145.62625,6.6 144.123571,5.4 141.719286,3.9 C139.315,2.1 136.610179,0 130.9,0 C125.490357,0 122.485,2.1 120.080714,3.9 C117.976964,5.4 116.17375,6.6 112.266786,6.6 C108.359821,6.6 106.857143,5.4 104.452857,3.9 C102.048571,2.1 99.34375,0 93.6335714,0 C88.2239286,0 85.2185714,2.1 82.8142857,3.9 C80.7105357,5.4 78.9073214,6.6 75.0003571,6.6 C71.0933929,6.6 69.5907143,5.4 67.1864286,3.9 C64.7821429,2.1 61.7767857,0 56.3671429,0 C50.9575,0 47.9521429,2.1 45.5478571,3.9 C43.4441071,5.4 41.6408929,6.6 37.7339286,6.6 C33.8269643,6.6 32.3242857,5.4 29.92,3.9 C27.5157143,2.1 24.5103571,0 19.1007143,0 C13.6910714,0 10.6857143,2.1 8.28142857,3.9 C5.87714286,5.4 4.07392857,6.6 0.4675,6.6 L0.4675,12 C5.87714286,12 8.8825,9.9 11.2867857,8.1 C13.3905357,6.6 15.19375,5.4 19.1007143,5.4 C23.0076786,5.4 24.5103571,6.6 26.9146429,8.1 C29.3189286,9.9 32.3242857,12 37.7339286,12 C43.1435714,12 46.1489286,9.9 48.5532143,8.1 C50.6569643,6.6 52.4601786,5.4 56.3671429,5.4 C60.2741071,5.4 61.7767857,6.6 64.1810714,8.1 C66.5853571,9.9 69.5907143,12 75.0003571,12 C80.41,12 83.4153571,9.9 85.8196429,8.1 C87.9233929,6.6 89.7266071,5.4 93.6335714,5.4 C97.5405357,5.4 99.0432143,6.6 101.4475,8.1 C103.851786,9.9 106.857143,12 112.266786,12 C117.676429,12 120.681786,9.9 123.086071,8.1 C125.189821,6.6 126.993036,5.4 130.9,5.4 C134.806964,5.4 136.309643,6.6 138.713929,8.1 C141.118214,9.9 144.123571,12 149.533214,12 C154.942857,12 157.948214,9.9 160.3525,8.1 C162.45625,6.6 164.259464,5.4 168.166429,5.4 C172.073393,5.4 173.576071,6.6 175.980357,8.1 C178.685179,9.9 181.39,12 186.799643,12 L186.799643,6.6 C183.193214,6.6 181.39,5.4 179.28625,3.9 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="row justify-content-center">
            @foreach ($wisata as $item)
                <div class="col-12 col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="ui-card rounded card-primary h-100 shadow">
                        <div class="img-wrapper">
                            <a href="/wisata/{{ $item->slug }}">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top"
                                    style="object-fit: cover" height="200" alt="{{ $item->nama }}">
                                <div class="card-overlay">
                                    <h5 class="card-title">{{ $item->nama }}</h5>
                                    <h5>{{ number_format($item->avg_rating, 1) }} ⭐</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Kategori Wisata --}}
    <div class="container mx-auto pt-4 align-items-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <h2 class="text-center font-weight-semibold">Kategori Wisata</h2>
        <div class="d-flex justify-content-center mb-4">
            <svg class="fill-current" width="200" viewBox="0 0 187 12" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g id="10.1-Destination" transform="translate(-85.000000, -323.000000)" fill-rule="nonzero">
                        <g id="wave-short" transform="translate(85.000000, 323.000000)">
                            <path
                                d="M179.28625,3.9 C176.581429,2.1 173.876607,0 168.166429,0 C162.756786,0 159.751429,2.1 157.347143,3.9 C155.243393,5.4 153.440179,6.6 149.533214,6.6 C145.62625,6.6 144.123571,5.4 141.719286,3.9 C139.315,2.1 136.610179,0 130.9,0 C125.490357,0 122.485,2.1 120.080714,3.9 C117.976964,5.4 116.17375,6.6 112.266786,6.6 C108.359821,6.6 106.857143,5.4 104.452857,3.9 C102.048571,2.1 99.34375,0 93.6335714,0 C88.2239286,0 85.2185714,2.1 82.8142857,3.9 C80.7105357,5.4 78.9073214,6.6 75.0003571,6.6 C71.0933929,6.6 69.5907143,5.4 67.1864286,3.9 C64.7821429,2.1 61.7767857,0 56.3671429,0 C50.9575,0 47.9521429,2.1 45.5478571,3.9 C43.4441071,5.4 41.6408929,6.6 37.7339286,6.6 C33.8269643,6.6 32.3242857,5.4 29.92,3.9 C27.5157143,2.1 24.5103571,0 19.1007143,0 C13.6910714,0 10.6857143,2.1 8.28142857,3.9 C5.87714286,5.4 4.07392857,6.6 0.4675,6.6 L0.4675,12 C5.87714286,12 8.8825,9.9 11.2867857,8.1 C13.3905357,6.6 15.19375,5.4 19.1007143,5.4 C23.0076786,5.4 24.5103571,6.6 26.9146429,8.1 C29.3189286,9.9 32.3242857,12 37.7339286,12 C43.1435714,12 46.1489286,9.9 48.5532143,8.1 C50.6569643,6.6 52.4601786,5.4 56.3671429,5.4 C60.2741071,5.4 61.7767857,6.6 64.1810714,8.1 C66.5853571,9.9 69.5907143,12 75.0003571,12 C80.41,12 83.4153571,9.9 85.8196429,8.1 C87.9233929,6.6 89.7266071,5.4 93.6335714,5.4 C97.5405357,5.4 99.0432143,6.6 101.4475,8.1 C103.851786,9.9 106.857143,12 112.266786,12 C117.676429,12 120.681786,9.9 123.086071,8.1 C125.189821,6.6 126.993036,5.4 130.9,5.4 C134.806964,5.4 136.309643,6.6 138.713929,8.1 C141.118214,9.9 144.123571,12 149.533214,12 C154.942857,12 157.948214,9.9 160.3525,8.1 C162.45625,6.6 164.259464,5.4 168.166429,5.4 C172.073393,5.4 173.576071,6.6 175.980357,8.1 C178.685179,9.9 181.39,12 186.799643,12 L186.799643,6.6 C183.193214,6.6 181.39,5.4 179.28625,3.9 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <div class="row justify-content-center">
            @foreach ($kategori as $item)
                <div class="col-lg-3 mb-4">
                    <div class="ui-card rounded">
                        <a href="/wisata?kategori={{ $item->slug }}">
                            <div class="img-wrapper">
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="card-img-top">
                                <div class="card-overlay">
                                    <h3>{{ $item->nama }}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Navigasi Wisata --}}
    <div class="container mx-auto pt-4 align-items-center" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
        <h2 class="text-center font-weight-semibold">Navigasi</h2>
        <div class="d-flex justify-content-center mb-3">
            <svg class="fill-current" width="200" viewBox="0 0 187 12" version="1.1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                    <g id="10.1-Destination" transform="translate(-85.000000, -323.000000)" fill-rule="nonzero">
                        <g id="wave-short" transform="translate(85.000000, 323.000000)">
                            <path
                                d="M179.28625,3.9 C176.581429,2.1 173.876607,0 168.166429,0 C162.756786,0 159.751429,2.1 157.347143,3.9 C155.243393,5.4 153.440179,6.6 149.533214,6.6 C145.62625,6.6 144.123571,5.4 141.719286,3.9 C139.315,2.1 136.610179,0 130.9,0 C125.490357,0 122.485,2.1 120.080714,3.9 C117.976964,5.4 116.17375,6.6 112.266786,6.6 C108.359821,6.6 106.857143,5.4 104.452857,3.9 C102.048571,2.1 99.34375,0 93.6335714,0 C88.2239286,0 85.2185714,2.1 82.8142857,3.9 C80.7105357,5.4 78.9073214,6.6 75.0003571,6.6 C71.0933929,6.6 69.5907143,5.4 67.1864286,3.9 C64.7821429,2.1 61.7767857,0 56.3671429,0 C50.9575,0 47.9521429,2.1 45.5478571,3.9 C43.4441071,5.4 41.6408929,6.6 37.7339286,6.6 C33.8269643,6.6 32.3242857,5.4 29.92,3.9 C27.5157143,2.1 24.5103571,0 19.1007143,0 C13.6910714,0 10.6857143,2.1 8.28142857,3.9 C5.87714286,5.4 4.07392857,6.6 0.4675,6.6 L0.4675,12 C5.87714286,12 8.8825,9.9 11.2867857,8.1 C13.3905357,6.6 15.19375,5.4 19.1007143,5.4 C23.0076786,5.4 24.5103571,6.6 26.9146429,8.1 C29.3189286,9.9 32.3242857,12 37.7339286,12 C43.1435714,12 46.1489286,9.9 48.5532143,8.1 C50.6569643,6.6 52.4601786,5.4 56.3671429,5.4 C60.2741071,5.4 61.7767857,6.6 64.1810714,8.1 C66.5853571,9.9 69.5907143,12 75.0003571,12 C80.41,12 83.4153571,9.9 85.8196429,8.1 C87.9233929,6.6 89.7266071,5.4 93.6335714,5.4 C97.5405357,5.4 99.0432143,6.6 101.4475,8.1 C103.851786,9.9 106.857143,12 112.266786,12 C117.676429,12 120.681786,9.9 123.086071,8.1 C125.189821,6.6 126.993036,5.4 130.9,5.4 C134.806964,5.4 136.309643,6.6 138.713929,8.1 C141.118214,9.9 144.123571,12 149.533214,12 C154.942857,12 157.948214,9.9 160.3525,8.1 C162.45625,6.6 164.259464,5.4 168.166429,5.4 C172.073393,5.4 173.576071,6.6 175.980357,8.1 C178.685179,9.9 181.39,12 186.799643,12 L186.799643,6.6 C183.193214,6.6 181.39,5.4 179.28625,3.9 Z"
                                id="Path"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <p class="text-center mx-auto w-75 mb-4" style="font-size: 20px;">Berwisata di Kota Karawang tidak cukup jika
            hanya
            mengunjungi satu kawasan. Jelajahi berbagai tempat favorit mulai dari kawasan wisata kuliner, seni budaya,
            sejarah sampai hiburan dan rekreasi.</p>
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="ui-card rounded">
                    <a href="/wisata">
                        <div class="img-wrapper">
                            <img src="img/bahari.jpg" class="card-img-top">
                            <div class="card-overlay">
                                <h3>Destinasi Wisata</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="ui-card rounded">
                    <a href="/senibudaya">
                        <div class="img-wrapper">
                            <img src="img/gokar.jpg" class="card-img-top">
                            <div class="card-overlay">
                                <h3>Seni dan Budaya</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="ui-card rounded">
                    <a href="/kuliner">
                        <div class="img-wrapper">
                            <img src="img/kuliner.jpg" class="card-img-top">
                            <div class="card-overlay">
                                <h3>Kuliner</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="ui-card rounded">
                    <a href="/blog">
                        <div class="img-wrapper">
                            <img src="img/blog.jpg" class="card-img-top">
                            <div class="card-overlay">
                                <h3>Blog Wisata</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        AOS.init({
            once: false,
            duration: 1000
        });
    </script>
@endpush
