@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-center align-items-center position-relative">
        <img src="{{ asset('storage/' . $senibudaya->gambar) }}" class="image-content-detail" alt="...">
        {{-- <h3 class="position-absolute text-danger">Detail Hotel</h3> --}}
    </div>
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <span class="text-primary font-weight-bold" style="font-size: 17px;">{{ $senibudaya->kategori }}</span>
                <svg class="fill-current" width="100" viewBox="0 0 187 12" version="1.1"
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
                <h3>{{ $senibudaya->nama }}</h3>
                <p class="indent">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui at commodi minus
                    aspernatur, obcaecati ipsa
                    necessitatibus dicta reiciendis modi quasi tenetur, totam, repellat deleniti nostrum tempora
                    quia saepe?
                    Doloremque aut est quasi cumque adipisci repudiandae, assumenda quas numquam ratione dicta,
                    labore
                    explicabo officia, deleniti ducimus. Dicta.</p>
                <p class="indent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus beatae inventore saepe
                    repudiandae? Quod
                    nobis.
                    possimus perferendis aspernatur porro hicla.</p>
            </div>
            <div class="col-12 col-lg-6 col-md-6 wrapper-detail">
                <img src="{{ asset('storage/' . $senibudaya->gambar) }}" class="image-detail" alt="">
            </div>
        </div>
    </div>
@endsection
