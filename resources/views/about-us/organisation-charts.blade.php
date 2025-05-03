@extends('layouts.app') 

@section('title', 'ATIS')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Organization Chart
                </h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="bg-white shadow p-3 h-100 d-flex flex-column align-items-center justify-content-center" style="border-radius: 15px">
                    <img src="images/factsheet/organisation-chart.png" alt="Factsheet" class="img-fluid rounded" style="max-width: 100%;">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
