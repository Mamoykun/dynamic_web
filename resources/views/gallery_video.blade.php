@extends('layouts.main')

@section('title', 'Home - Wärtsilä')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('asset/css/gallery_video.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('asset/css/footer.css') }}">
    @endpush

    <section>
        <div class="breadcrumb">
            <a href="#">Home</a> &gt; 
            <a href="#">Gallery</a> &gt; 
            Video
        </div>
    </section>

    <section>
        <div class="man_wrapper">
            <!-- First Video Section -->
            <div class="man_maintenance_container">
                <div class="man_text_section">
                    <h1 class="man_maintenance_title">Maintenance Kits:<br>Two-stroke engines</h1>
                    <p class="man_maintenance_description">All-in-one genuine-parts packages by MAN PrimeServ help you extend the time between overhauls, keep overhauls straightforward and effective.</p>
                    <a href="#" class="man_cta_button">Talk to our experts</a>
                </div>
                <div class="man_video_section">
                    <div class="man_video_container">
                        <video class="man_maintenance_video">
                            <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}" type="video/mp4">
                        </video>
                        <div class="man_video_controls">
                            <button class="man_play_button">▶</button>
                            <div class="man_progress_container">
                                <div class="man_progress_bar"></div>
                            </div>
                            <div class="man_time_display">0:00 / 0:00</div>
                            <div class="man_volume_container">
                                <button class="man_mute_button">🔊</button>
                                <div class="man_volume_slider">
                                    <div class="man_volume_progress"></div>
                                    <div class="man_volume_handle"></div>
                                </div>
                            </div>
                            <button class="man_fullscreen_button">⤢</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Second Video Section -->
            <div class="man_maintenance_container">
                <div class="man_text_section">
                    <h1 class="man_maintenance_title">Service Kits:<br>Four-stroke engines</h1>
                    <p class="man_maintenance_description">Complete maintenance solutions designed specifically for four-stroke marine engines. Our kits contain all necessary components for routine maintenance.</p>
                    <a href="#" class="man_cta_button">Contact service team</a>
                </div>
                <div class="man_video_section">
                    <div class="man_video_container">
                        <video class="man_maintenance_video">
                            <source src="{{ asset('asset/video/The Vamps - Somebody To You ft. Demi Lovato.mp4') }}" type="video/mp4">
                        </video>
                        <div class="man_video_controls">
                            <button class="man_play_button">▶</button>
                            <div class="man_progress_container">
                                <div class="man_progress_bar"></div>
                            </div>
                            <div class="man_time_display">0:00 / 0:00</div>
                            <div class="man_volume_container">
                                <button class="man_mute_button">🔊</button>
                                <div class="man_volume_slider">
                                    <div class="man_volume_progress"></div>
                                    <div class="man_volume_handle"></div>
                                </div>
                            </div>
                            <button class="man_fullscreen_button">⤢</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
    <script src="{{ asset('asset/js/gallery_video.js') }}"></script>
@endpush