@extends('layouts.app') 

@section('title', 'ATIS | MEDIA ROOM')

@section('styles')
<style>
    /* Optional: Custom styles for the accordion */
    .accordion-button:not(.collapsed) {
        background-color: #3b3b98;
        color: #fff;
    }
    
    .accordion-button:focus {
        box-shadow: none;
        border-color: rgba(0,0,0,.125);
    }
</style>
@endsection

@php
$media = [
    '2024' => [
        [
            'title' => 'Lawatan dari Majlis Bandaraya Johor Bahru',
            'img' => 'https://www.mbjb.gov.my/sites/default/files/inline-images/dbkl14.png',
            'date' => '21.5.2024, Bilik Mesyuarat KLCCC'
        ],
        // ... more 2024 items
    ],
    '2023' => [
        [
            'title' => 'Lawatan dari Majlis Bandaraya Johor Bahru',
            'img' => 'https://www.mbjb.gov.my/sites/default/files/inline-images/dbkl14.png',
            'date' => '21.5.2024, Bilik Mesyuarat KLCCC'
        ],
        // ... 2023 items
    ],
    '2022' => [
        [
            'title' => 'Lawatan dari Majlis Bandaraya Johor Bahru',
            'img' => 'https://www.mbjb.gov.my/sites/default/files/inline-images/dbkl14.png',
            'date' => '21.5.2024, Bilik Mesyuarat KLCCC'
        ],
        // ... 2022 items
    ],
];
@endphp

@section('content')
<div class="container-fluid p-0">

    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <!-- Overlay to ensure text is readable -->
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            
            <!-- Centered Text -->
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Media Room</h2>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5">
        <div class="accordion" id="mediaAccordion">
            @foreach($media as $year => $items)
            <div class="accordion-item mb-3" style="border-radius: 15px; overflow: hidden;">
                <h2 class="accordion-header" id="heading{{ $year }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $year }}" aria-expanded="false" aria-controls="collapse{{ $year }}" style="background: #3b3b98; color: #fff; font-size: 1.5rem;">
                        {{ $year }}
                    </button>
                </h2>
                <div id="collapse{{ $year }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $year }}" data-bs-parent="#mediaAccordion">
                    <div class="accordion-body">
                        <div class="row g-4">
                            @foreach($items as $item)
                            <div class="col-12 col-md-6">
                                <div class="card h-100" style="border-radius: 15px;">
                                    <img src="{{ $item['img'] }}" class="card-img-top" alt="{{ $item['title'] }}" style="border-radius: 15px 15px 0 0;">
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $item['title'] }}</h6>
                                        <p class="card-text small">{{ $item['date'] }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Optional: You can add custom JavaScript for the accordion if needed
    document.addEventListener('DOMContentLoaded', function() {
        // Ensure accordion items can be closed by clicking on the active header
        const accordionButtons = document.querySelectorAll('.accordion-button');
        accordionButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Additional custom handling if needed
            });
        });
    });
</script>
@endsection