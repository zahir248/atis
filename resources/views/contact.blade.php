@extends('layouts.app') 

@section('title', 'Contact')

@section('content')
<div class="container-fluid p-0">

    <div class="container mb-4 mt-4">
            <div class="bg-light position-relative" style="background: url('https://images.pexels.com/photos/313032/pexels-photo-313032.jpeg?cs=srgb&dl=pexels-indragunawan-313032.jpg&fm=jpg') center/cover; min-height: 400px; border-radius: 15px; overflow: hidden;">
                <!-- Overlay to ensure text is readable (optional) -->
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
                
                <!-- Centered Text -->
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center">
                    <h2 class="text-white fw-bold text-center">Contact Us</h2>
                </div>
            </div>
    </div>

    <div class="container mb-5 mt-5">
        <div style="background: url('{{ asset('images/home/pattern-bg.png') }}') repeat; background-color: #383B97; border-radius: 15px; padding: 30px; color: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            <h2 style="margin-bottom: 20px;">Contact Form</h2>
            
            <div style="background-color: #383B97; border-radius: 10px; padding: 20px; margin-bottom: 20px;">
                <form>
                    <div style="margin-bottom: 15px;">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Value" style="width: 100%; padding: 8px; border-radius: 5px; border: none; margin-top: 5px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label>Surname</label>
                        <input type="text" name="surname" placeholder="Value" style="width: 100%; padding: 8px; border-radius: 5px; border: none; margin-top: 5px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Value" style="width: 100%; padding: 8px; border-radius: 5px; border: none; margin-top: 5px;">
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label>Message</label>
                        <textarea name="message" placeholder="Value" rows="3" style="width: 100%; padding: 8px; border-radius: 5px; border: none; margin-top: 5px;"></textarea>
                    </div>
                    <button type="submit" style="width: 100%; background: #222; color: #fff; padding: 10px; border: none; border-radius: 5px;">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
