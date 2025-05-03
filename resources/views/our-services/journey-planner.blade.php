@extends('layouts.app') 

@section('title', 'JOURNEY PLANNER')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Journey Planner</h2>
            </div>
        </div>
    </div>
    <!-- Legend Bar -->
    <div class="container mb-3">
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 py-2" style="background: #fff; border-radius: 8px;">
            <span class="d-flex align-items-center me-2"><span style="width: 22px; height: 22px; background: #d3d3d3; border-radius: 4px; display: inline-block; margin-right: 6px;"></span>Traffic Flow</span>
            <span class="d-flex align-items-center me-2"><span style="width: 22px; height: 22px; background: #bdbdbd; border-radius: 4px; display: inline-block; margin-right: 6px;"></span>LRT</span>
            <span class="d-flex align-items-center me-2"><span style="width: 22px; height: 22px; background: #e0e0e0; border-radius: 4px; display: inline-block; margin-right: 6px;"></span>MRT</span>
            <span class="d-flex align-items-center me-2"><span style="width: 22px; height: 22px; background: #f5f5f5; border-radius: 4px; display: inline-block; margin-right: 6px;"></span>Bas</span>
            <span class="d-flex align-items-center me-2"><span style="width: 22px; height: 22px; background: #888888; border-radius: 4px; display: inline-block; margin-right: 6px;"></span>Monorel</span>
            <span class="d-flex align-items-center"><span style="width: 22px; height: 22px; background: #444444; border-radius: 4px; display: inline-block; margin-right: 6px;"></span>KTM</span>
        </div>
    </div>
    <!-- Map Section -->
    <div class="container mb-4">
        <div style="border-radius: 15px; overflow: hidden;">
            <div id="map" style="width: 100%; height: 420px;"></div>
        </div>
    </div>
</div>
<!-- LeafletJS CSS/JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var map = L.map('map').setView([3.139, 101.6869], 12); // Kuala Lumpur center
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(map);
    });
</script>
@endsection
