@extends('layouts.app') 

@section('title', 'ATIS | TRAFFIC ANNOUNCEMENT')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Latest News
                </h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <!-- Dropdown aligned right -->
                <div class="d-flex justify-content-end mb-3">
                    <select class="form-select w-auto" style="min-width: 220px;">
                        <option selected>Traffic Announcement</option>
                        <option selected>Event Announcement</option>
                        <!-- Add more options here if needed -->
                    </select>
                </div>
                <!-- Light gray horizontal bar -->
                <div style="height: 28px; background: #f6f6f6; border-radius: 2px;"></div>
            </div>
        </div>
    </div>
</div>

@endsection
