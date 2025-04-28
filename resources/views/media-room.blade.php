@extends('layouts.app') 

@section('title', 'ATIS | MEDIA ROOM')

@section('content')
<div class="container-fluid p-0">

    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/67559/kuala-lumpur-petronas-twin-towers-malaysia-klcc-67559.jpeg?cs=srgb&dl=pexels-pixabay-67559.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <!-- Overlay to ensure text is readable (optional) -->
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            
            <!-- Centered Text -->
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Media Room</h2>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5">
        <div>
            <a href="#" class="d-block text-center py-3 mb-2" style="background: #3b3b98; color: #fff; font-size: 1.5rem; text-decoration: none; border-radius: 15px">2024</a>
            <a href="#" class="d-block text-center py-3 mb-2" style="background: #5758bb; color: #fff; font-size: 1.5rem; text-decoration: none; border-radius: 15px">2023</a>
            <a href="#" class="d-block text-center py-3" style="background: #706fd3; color: #fff; font-size: 1.5rem; text-decoration: none; border-radius: 15px">2022</a>
        </div>
    </div>

</div>
@endsection
