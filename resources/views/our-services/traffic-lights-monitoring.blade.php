@extends('layouts.app') 

@section('title', 'Traffic Light Monitoring')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Traffic Light Monitoring
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
                        <img src="{{ asset('images/traffic-lights-monitoring/traffic1.png') }}" alt="Traffic Light" class="img-fluid w-100" style="height: 200px; object-fit: cover; border-radius: 15px">
                    </div>
                    
                    <!-- Control Room Image -->
                    <div class="rounded overflow-hidden">
                        <img src="{{ asset('images/traffic-lights-monitoring/traffic2.png') }}" alt="Control Room" class="img-fluid w-100" style="height: 200px; object-fit: cover; border-radius: 15px">
                    </div>
                    
                    <!-- Traffic Management Image -->
                    <div class="rounded overflow-hidden">
                        <img src="{{ asset('images/traffic-lights-monitoring/traffic3.png') }}" alt="Traffic Management" class="img-fluid w-100" style="height: 200px; object-fit: cover; border-radius: 15px">
                    </div>
                </div>
            </div>

            <!-- Right side with information -->
            <div class="col-lg-8">
                <div class="bg-primary text-white p-4 h-100" style="border-radius: 15px">
                    <h4 class="mb-4">Two types of control system:</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">• SCATS (Sydney Coordinated Adaptive Traffic System)</li>
                        <li class="mb-2">• Trafficsens</li>
                    </ul>

                    <h4 class="mb-3">Numbers of traffic light: 642</h4>
                    <ul class="list-unstyled ms-3">
                        <li class="mb-2">• Intersections: 542</li>
                        <li class="mb-2">• Pedestrian Crossings: 100</li>
                    </ul>

                    <h4 class="mb-3">Benefits of Computerized Traffic Light System:</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2">• The system is dynamic and fully controlled by computer.</li>
                        <li class="mb-2">• The system reacts to current traffic requirements for optimum flow.</li>
                        <li class="mb-2">• Coordination between intersections.</li>
                        <li class="mb-2">• 100% of intersections have been linked to TMC.</li>
                        <li class="mb-2">• Linking allows the monitoring of faults to be done through the system.</li>
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
