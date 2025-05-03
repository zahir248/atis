@extends('layouts.app') 

@section('title', 'Emergency Response')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Emergency Response
                </h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row g-4">
            <!-- Left side with images -->
            <div class="col-lg-4">
                <div class="d-flex flex-column gap-4">
                    <!-- Traffic Light Image -->
                    <div class="rounded overflow-hidden">
                        <img src="{{ asset('images/emergency-response/response1.jpeg') }}" alt="Traffic Light" class="img-fluid w-100" style="height: 200px; object-fit: cover; border-radius: 15px">
                    </div>
                    
                    <!-- Control Room Image -->
                    <div class="rounded overflow-hidden">
                        <img src="{{ asset('images/emergency-response/response2.png') }}" alt="Control Room" class="img-fluid w-100" style="height: 200px; object-fit: cover; border-radius: 15px">
                    </div>
                    
                    <!-- Traffic Management Image -->
                    <div class="rounded overflow-hidden">
                        <img src="{{ asset('images/emergency-response/response3.png') }}" alt="Traffic Management" class="img-fluid w-100" style="height: 200px; object-fit: cover; border-radius: 15px">
                    </div>
                </div>
            </div>

            <!-- Right side with information -->
            <div class="col-lg-8">
                <div class="bg-primary text-white p-4 h-100" style="border-radius: 15px">
                    <h4 class="mb-4">Objectives</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">• Ensuring incidents that obstruct traffic flow do not cause prolonged traffic congestion (accidents, vehicle breakdowns, flash floods, fallen trees and others).</li>
                        <li class="mb-2">• Towing vehicles that breakdown in the middle of the road to the road shoulder/ emergency lane/ safe location.</li>
                        <li class="mb-2">• Avoid the occurrence of a subsequent accident due to incidents that obstruct traffic.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .list-unstyled li {
        margin-bottom: 0.75rem;
    }
    
    .bg-primary {
        background-color: #383B97 !important;
    }
</style>

@endsection
