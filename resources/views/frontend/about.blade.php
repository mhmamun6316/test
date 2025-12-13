@extends('layouts.frontend')

@section('title', 'About Us - Radiant Sourcing')

@section('content')
    <!-- About Hero Section -->
    <section class="about-hero-section">
        <div class="about-hero-image">
            <img src="{{ asset('frontend/assets/about-us/pexels-rachel-claire-5864245.jpg') }}" alt="About Us" class="hero-zoom-image">
        </div>
        <div class="about-hero-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="about-hero-title" data-aos="fade-up">About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @foreach($sections as $section)
    @switch($section->type)
        @case('intro')
            <!-- Welcome/Intro Section -->
            <section class="about-welcome-section text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12" data-aos="fade-up">
                            <h2 class="welcome-title">{{ $section->title }}</h2>
                            <h4 class="welcome-subtitle">{{ $section->subtitle }}</h4>
                            <div class="welcome-text">
                                {!! $section->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @break

        @case('full_width_image')
            <!-- Full Width Image Section -->
            <section class="about-fullwidth-image-section">
                <div class="container">
                    <img src="{{ asset($section->image) }}" alt="{{ $section->title ?? 'Image' }}" class="fullwidth-image" data-aos="fade-up">
                </div>
            </section>
            @break

        @case('quote')
            <!-- Quote Section -->
            <section class="about-quote-section">
                <div class="container">
                    <div class="quote-banner" data-aos="fade-up">
                        <p class="quote-text">{!! $section->content !!}</p>
                    </div>
                </div>
            </section>
            @break

        @case('content_image')
            <!-- Content + Image Section -->
            <section class="about-expertise-section">
                <div class="container">
                    <div class="row align-items-center">
                        @if($section->image_position == 'left')
                            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                                <img src="{{ asset($section->image) }}" alt="{{ $section->title }}" class="expertise-image">
                            </div>
                            <div class="col-lg-6" data-aos="fade-left">
                                @if($section->title)
                                    <h3 class="expertise-title">{{ $section->title }}</h3>
                                @endif
                                @if($section->subtitle)
                                    <h5 class="studio-location-title">{{ $section->subtitle }}</h5>
                                @endif
                                <div class="expertise-list">
                                    {!! $section->content !!}
                                </div>
                            </div>
                        @else
                            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                                <img src="{{ asset($section->image) }}" alt="{{ $section->title }}" class="expertise-image">
                            </div>
                            <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                                @if($section->title)
                                    <h3 class="expertise-title">{{ $section->title }}</h3>
                                @endif
                                @if($section->subtitle)
                                    <h5 class="studio-location-title">{{ $section->subtitle }}</h5>
                                @endif
                                <div class="expertise-list">
                                    {!! $section->content !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
            @break
    @endswitch
@endforeach

    @if($services->isNotEmpty())
        <section class="about-services-section" id="services">
            <div class="container">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-lg-4 col-md-6 mb-4"
                             data-aos="fade-up"
                             data-aos-delay="{{ $loop->iteration * 100 }}">

                            <div class="flip-card">
                                <div class="flip-card-inner">

                                    <div class="flip-card-front">
                                        <img src="{{ asset($service->front_image) }}"
                                             alt="{{ $service->front_title }}"
                                             style="width:100%;height:100%;object-fit:cover;">

                                        <div class="flip-card-front-overlay">
                                            <h3 class="flip-card-title">{{ $service->front_title }}</h3>
                                            @if(!empty($service->front_description))
                                                <p class="mb-0 text-white-50">{!! $service->front_description !!}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="flip-card-back"
                                         style="{{ !empty($service->back_image)
                                    ? 'background-image:url('.asset($service->back_image).');background-size:cover;'
                                    : '' }}">

                                        <div class="flip-card-back-overlay"></div>

                                        <div class="flip-card-back-content">
                                            <h3 class="flip-back-title">
                                                {{ $service->back_title ?? $service->front_title }}
                                            </h3>

                                            @if(!empty($service->back_description))
                                                <div class="flip-back-desc">
                                                    {!! $service->back_description !!}
                                                </div>
                                            @endif

                                            @if(!empty($service->button_link) && !empty($service->button_text))
                                                <a href="{{ $service->button_link }}"
                                                   class="btn btn-outline-light mt-3">
                                                    {{ $service->button_text }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

<!-- Values and Sourcing Philosophy Parallax Section -->
<section class="parallax-values-section" id="values">
    <div class="parallax-values-content">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center" data-aos="fade-up">
                    <h2 class="parallax-values-title">Values and Sourcing Philosophy</h2>
                </div>
            </div>
            <div class="row">
                @foreach($values as $value)
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="value-card">
                            @if($value->icon)
                                <div class="value-icon-wrapper">
                                    <img src="{{ asset($value->icon) }}" alt="{{ $value->title }}" class="value-icon">
                                </div>
                            @endif
                            <h3 class="value-title">{{ $value->title }}</h3>
                            <div class="value-description">
                                {!! $value->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Our Global Presence Section -->
@if($offices->isNotEmpty())
<section class="global-presence-section" id="offices">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="global-presence-title">Our Global Presence</h2>
            </div>
        </div>
        <div class="row">
            @foreach($offices as $office)
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="office-card">
                        <h3 class="about-office-title">{{ $office->title }}</h3>
                        <div class="office-description">
                            {!! nl2br(e($office->description)) !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

@if($sections->isEmpty())
    <div class="container py-5 text-center">
        <div class="alert alert-info">
            No sections found. Please add sections from the Admin Panel > About Us > Page Sections.
        </div>
    </div>
@endif

@endsection

@push('styles')
<style>
    /* ... Existing Styles (kept mostly same, added Flip Card) ... */

    /* Flip Card Styles */
    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 400px; /* Adjusted height */
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-radius: 15px;
        overflow: hidden;
    }

    .flip-card-front {
        background-color: #fff;
        color: black;
    }

    .flip-card-front-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.8), rgba(0,0,0,0));
        color: white;
        text-align: center; /* Centered front text as per image style */
    }

    .flip-card-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 5px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .flip-card-back {
        background-color: #2c3e50;
        color: white;
        transform: rotateY(180deg);
        position: relative;
    }

    .flip-card-back-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7); /* Dark overlay for readability */
        z-index: 1;
    }

    .flip-card-back-content {
        position: relative;
        z-index: 2;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .flip-back-title {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .flip-back-desc {
        font-size: 1rem;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    /* Existing General Styles */
    .about-services-section {
        padding: 5rem 0;
        background-color: #f8f9fa;
    }

    /* Re-adding essential styles from previous file for consistency */
    .about-welcome-section { padding: 4rem 0; background: #fff; }
    .welcome-title { font-size: 1.5rem; font-weight: 700; color: #d35400; margin-bottom: 0.5rem; }
    .welcome-subtitle { font-size: 1.2rem; font-weight: 600; color: #333; margin-bottom: 1.5rem; }
    .welcome-text { font-size: 0.95rem; color: #555; line-height: 1.8; margin-bottom: 1rem; }

    .about-fullwidth-image-section { width: 100%; overflow: hidden; }
    .fullwidth-image { width: 100%; height: auto; display: block; border-radius: 10px; }

    .about-quote-section { padding: 0; margin-top: 2rem; }
    .quote-banner { background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%); padding: 1.5rem 2rem; text-align: center; border-radius: 5px; }
    .quote-text { font-size: 1.2rem; font-style: italic; color: #fff; margin: 0; font-weight: 500; }

    .about-expertise-section { padding: 2rem 0; background: #fff; }
    .expertise-image { width: 100%; height: auto; border-radius: 10px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); }
    .expertise-title { font-size: 1.5rem; font-weight: 700; color: #333; margin-bottom: 1.5rem; }
    .expertise-list { font-size: 1rem; color: #555; margin-bottom: 0.75rem; line-height: 1.6; }

    .section-title { font-size: 2.5rem; font-weight: 700; color: #333; margin-bottom: 1.5rem; }
    .section-description { font-size: 1.1rem; color: #666; max-width: 700px; margin: 0 auto; }

    /* Global Presence Section */
    .global-presence-section {
        padding: 30px 0;
        background: #f8f9fa;
    }

    .global-presence-title {
        font-size: 3rem;
        font-weight: 700;
        color: #66bb6a;
        text-align: center;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .office-card {
        background: #e3f2fd;
        padding: 40px 30px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .office-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .about-office-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 20px;
    }

    .office-description {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.8;
        flex-grow: 1;
    }

    .office-description p {
        margin-bottom: 10px;
    }

    @media (max-width: 768px) {
        .global-presence-title {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .office-card {
            padding: 30px 20px;
        }

        .about-office-title {
            font-size: 1.1rem;
        }

        .office-description {
            font-size: 0.9rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        $('#mainNavbar').addClass('scrolled');
        $('a[href*="#"]').on('click', function(e) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({ scrollTop: target.offset().top - 80 }, 800);
            }
        });
    });
</script>
@endpush
