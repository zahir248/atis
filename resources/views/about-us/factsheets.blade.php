@extends('layouts.app') 

@section('title', 'Traffic Light Monitoring')

@section('content')
<div class="container-fluid p-0">
    <div class="container mb-4 mt-4">
        <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                <h2 class="text-white fw-bold text-center">Factsheets</h2>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row g-4">
            <!-- Left Column -->
            <div class="col-lg-5">
                <div class="bg-white rounded shadow p-3 h-100 d-flex flex-column align-items-center justify-content-center">
                    <!-- Single Image (Factsheet) -->
                    <img src="images/factsheet/factsheets.png" alt="Factsheet" class="img-fluid rounded" style="max-width: 100%;">
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-7">
            <div class="text-white rounded shadow p-4 h-100" style="min-height: 400px; background-color: #383B97;">
                    <p>
                        The right-hand of Traffic Management Centre (TMC) is Kuala Lumpur Command & Control Centre (KLCCC) which serves as traffic management hub to process and spread or distribute the latest updates of traffic data. KLCCC plays a role to manage, monitor, collect and disseminate the up-to-date traffic information from times to times to citizens via DBKL's strategic partner which are Jabatan Siasatan Penguatkuasaan Trafik Kuala Lumpur (JSPTKL), Malaysian Highway Authority (MHA), and radio station to share the information and logistic.
                    </p>
                    <p>
                        KLCCC also responsible to manage 642 computerized traffic light intersection that are dynamic and intelligent based on current situation by using two types of traffic light control system.
                    </p>
                    <p>
                        In order to increase the efficiency of traffic information distribution, KLCCC DBKL provides Variable Message Sign (VMS) that have been installed at the main road to distribute the latest and up-to-date traffic information to citizens. Through efficient of traffic management system in Kuala Lumpur, the quality of life for citizens can be increased directly and indirectly. This is in-line with DBKL's objective which are to ensure and to accelerate the outstanding implementation of world-class city status.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
