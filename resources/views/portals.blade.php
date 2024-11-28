@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
@push('styles')
<link rel="stylesheet" href="{{ asset('asset/css/tombol_portal.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
@endpush

<section class="image-portal">
    <div class="image">
        <img src="{{ asset('asset/image/foto pekerja pabrik.jpg') }}" alt="Foto Pekerja Pabrik">
    </div>
</section>
<section class="hero">
    <div class="welcome">
        <h1>Welcome to Wärtsilä's online portals</h1>
    </div>
</section>
<section class="conten">
        <div class="container">
            <div class="section">
                <h1>Energy</h1>
                
                <div class="link-item">
                    <a href="#">Wärtsilä Online</a>
                    <p class="description">Wärtsilä customer platform. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Fleet Operations Solution</a>
                    <p class="description">Voyage planning and fleet performance management. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Central management system</a>
                    <p class="description">Manage users and assign permissions</p>
                </div>
    
                <div class="link-item">
                    <a href="#">Expert Insight</a>
                    <p class="description">Actionable advice, insights and collaboration. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Wärtsilä Land & Sea Academy</a>
                    <p class="description">Training courses. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Navi-Port</a>
                    <p class="description">Connect ships and shipping companies to ports and enable just-in-time arrival. <span class="info-icon"></span></p>
                </div>
            </div>
    
            <div class="section">
                <h1>Marine</h1>
                
                <div class="link-item">
                    <a href="#">Wärtsilä Online</a>
                    <p class="description">Wärtsilä customer platform. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Expert Insight</a>
                    <p class="description">Actionable advice, insights and collaboration. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Wärtsilä Land & Sea Academy</a>
                    <p class="description">Training courses. <span class="info-icon"></span></p>
                </div>
    
                <div class="link-item">
                    <a href="#">Project Collaborate</a>
                    <p class="description">Project communication and data gateway</p>
                </div>
    
                <div class="link-item">
                    <a href="#">Document Control Module</a>
                    <p class="description">Project document sharing and collaboration</p>
                    <span class="project-login">(Project specific login)</span>
                </div>
            </div>
    
            <div class="section">
                <h1>Others</h1>
                
                <div class="link-item">
                    <a href="#">Supplier Portal</a>
                </div>
    
                <div class="link-item">
                    <a href="#">LogWis</a>
                    <p class="description">Order management, logistics, suppliers' technical documentations and site related information for projects by Energy Business and Project Services</p>
                </div>
            </div>
        </div>
</section>
@endsection
