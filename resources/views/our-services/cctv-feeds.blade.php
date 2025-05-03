@extends('layouts.app') 

@section('title', 'CCTV FEEDS')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">CCTV Feeds</h2>
            </div>
        </div>
    </div>
    <!-- Header and Search Bar -->
    <div class="container mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h4 class="fw-bold mb-0">CCTV</h4>
            <div class="d-flex align-items-center">
                <span class="me-2 fw-semibold">Search CCTV:</span>
                <input type="text" class="form-control" placeholder="Search..." style="width: 200px; background: #eee; border-radius: 8px; border: none;" />
            </div>
        </div>
    </div>
    <!-- CCTV Grid -->
    <div class="container mb-4">
        <div class="row g-4">
            <!-- CCTV Card Example -->
            @php
                $cctvs = [
                    ['name' => 'Jalan Loke Yew', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Tunku Abdul Rahman', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Raja Muda Musa', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Chow Kit', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Dewan Sultan Ismail', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Tun Sambathan', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Istana', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Genting Klang', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Maharajalela', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Imbi', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Hang Tuah', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Pasar', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Kuching', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Dewan Bahasa', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Tuanku Abdul Halim', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Perkasa', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Tun Tan Cheng Lock', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Raja Laut', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Dang Wangi', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Kinabalu', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan Pinang', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                    ['name' => 'Jalan P. Ramlee', 'img' => 'https://pbs.twimg.com/media/Goxs0FgbwAABfBK.jpg:large'],
                ];
            @endphp
            @foreach($cctvs as $cctv)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card" style="border: none;">
                    <img src="{{ $cctv['img'] }}" class="card-img-top" alt="{{ $cctv['name'] }}" style="border-radius: 15px;">
                    <div class="card-body p-2">
                        <h6 class="card-text small mb-0">{{ $cctv['name'] }}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
