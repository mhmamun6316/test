@extends('layouts.frontend')

@section('title', 'About Us - Radiant Sourcing')

@section('content')
<!-- Hero Section / Overview -->
<section class="about-hero-section" id="overview">
    <div class="about-hero-background">
        <img src="{{ asset('frontend/assets/about-us/pexels-star-zhang-3254790-29906028.jpg') }}" alt="About Us" class="hero-bg-image">
        <div class="about-hero-overlay"></div>
    </div>
    <div class="about-hero-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="about-hero-title" data-aos="fade-up">ABOUT US</h1>
                    <p class="about-hero-subtitle" data-aos="fade-up" data-aos-delay="100">Who we are</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="about-welcome-section text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" data-aos="fade-up">
                <h2 class="welcome-title">Welcome to Radiant Sourcing Ltd, Where Fashion Meets Integrity!!</h2>
                <h4 class="welcome-subtitle">- Reliable Strategic, Sustainable and Ethical Global Sourcing Partner!!</h4>
                <p class="welcome-text">
                    We believe that Fashion is not just about Clothing, it's an ever evolving statement, an expression of Identity, Culture context of time and place, perception, aspiration, creativity and innovation, value and belief of individual and community. Founded in 2024, we blend creativity, sustainability, and manufacturing excellence to deliver innovative global sourcing solutions.
                </p>
                <p class="welcome-text" data-aos="fade-up" data-aos-delay="100">
                    We drive fashion evolution through market intelligence, trend analysis, innovative design, and versatile product categories. Our commitment spans ethical sourcing, sustainability, social responsibility, and international compliance. With trusted manufacturing partners, quality assurance, licensed character production, and end-to-end logistics, we deliver superior service and exceptional customer value.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Full Width Image Section -->
<section class="about-fullwidth-image-section">
    <div class="container">
        <img src="{{ asset('frontend/assets/about-us/pexels-rdne-7685990.jpg') }}" alt="Radiant Sourcing Office" class="fullwidth-image" data-aos="fade-up">
    </div>
</section>

<!-- Quote Section 1 -->
<section class="about-quote-section">
    <div class="container">
        <div class="quote-banner" data-aos="fade-up">
            <p class="quote-text">"Elevating Sourcing, Strengthening Partnership- Together We Achieve More!!"</p>
        </div>
    </div>
</section>

<!-- Expertise Section -->
<section class="about-expertise-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <img src="{{ asset('frontend/assets/about-us/pexels-rachel-claire-5864245.jpg') }}" alt="Radiant Sourcing Expertise" class="expertise-image">
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <h3 class="expertise-title">OUR EXPERTISE-</h3>
                <ul class="expertise-list">
                    <li>Market Intelligence, Design Support.</li>
                    <li>R&D & Product Innovation.</li>
                    <li>Ethical & Responsible Sourcing.</li>
                    <li>Sustainability & CSR</li>
                    <li>Quality Assurance & Manufacturing Excellence</li>
                    <li>Diversified Product Management</li>
                    <li>Licensed Character Product Sourcing</li>
                    <li>Leadership & Industry Expertise</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Design Studio Section -->
<section class="about-studio-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <h3 class="studio-title">DESIGN STUDIO:</h3>

                <h5 class="studio-location-title">Design Studio in London, UK</h5>
                <p class="studio-location-text">
                    Radiant Sourcing London Studio creates elegant, trend-driven collections guided by in-house expert British designers.
                </p>

                <h5 class="studio-location-title">Design Studio in Dhaka, Bangladesh</h5>
                <p class="studio-location-text">
                    Our Dhaka studio fuses local craftsmanship with global trends, delivering innovative, high-quality designs.
                </p>

                <h5 class="studio-focus-title">We Focus</h5>
                <p class="studio-focus-item"><strong>Design & Collaboration:</strong><br>
                    Sustainable, trend-driven designs powered by expertise Designers based in London and Dhaka Studio.
                </p>
                <p class="studio-focus-item"><strong>Shaping the Future:</strong><br>
                    Pushing fashion boundaries for change and sustainability.
                </p>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <img src="{{ asset('frontend/assets/about-us/pexels-ron-lach-8423961.jpg') }}" alt="Design Studio" class="studio-image">
            </div>
        </div>
    </div>
</section>

<!-- Final Quote Section -->
<section class="about-quote-section">
    <div class="container p-0">
        <div class="quote-banner" data-aos="fade-up">
            <p class="quote-text">"Elevating Sourcing, Strengthening Partnership- Together We Achieve More!!"</p>
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="about-mission-section" id="mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Mission</h2>
                <p class="section-description">Content coming soon...</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="about-services-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Our Services</h2>
                <p class="section-description">Content coming soon...</p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="about-values-section" id="values">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center" data-aos="fade-up">
                <h2 class="section-title">Values & Sourcing Philosophy</h2>
                <p class="section-description">Content coming soon...</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Hero Section */
    .about-hero-section {
        position: relative;
        height: 70vh;
        min-height: 500px;
        display: flex;
        align-items: center;
        /*overflow: hidden;*/
    }

    .about-hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .hero-bg-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
    }

    .about-hero-content {
        position: relative;
        z-index: 2;
        width: 100%;
    }

    .about-hero-title {
        font-size: 4rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 0.5rem;
    }

    .about-hero-subtitle {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
    }

    /* Welcome Section */
    .about-welcome-section {
        padding: 4rem 0;
        background: #fff;
    }

    .welcome-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #d35400;
        margin-bottom: 0.5rem;
    }

    .welcome-subtitle {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .welcome-text {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.8;
        margin-bottom: 1rem;
    }

    /* Full Width Image */
    .about-fullwidth-image-section {
        width: 100%;
        overflow: hidden;
    }

    .fullwidth-image {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 10px;
    }

    /* Quote Section */
    .about-quote-section {
        padding: 0;
        margin-top: 2rem;
    }

    .quote-banner {
        background: var(--primary-gradient);
        padding: 1.5rem 2rem;
        text-align: center;
        border-radius: 5px;
    }

    .quote-text {
        font-size: 1.2rem;
        font-style: italic;
        color: #fff;
        margin: 0;
        font-weight: 500;
    }

    /* Expertise Section */
    .about-expertise-section {
        padding: 2rem 0;
        background: #fff;
    }

    .expertise-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .expertise-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .expertise-list {
        list-style: disc;
        padding-left: 1.5rem;
    }

    .expertise-list li {
        font-size: 1rem;
        color: #555;
        margin-bottom: 0.75rem;
        line-height: 1.6;
    }

    /* Design Studio Section */
    .about-studio-section {
        padding: 5rem 0;
        background: #f9f9f9;
    }

    .studio-title {
        font-size: 1.3rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .studio-location-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .studio-location-text {
        font-size: 0.95rem;
        color: #d35400;
        margin-bottom: 1.5rem;
        line-height: 1.6;
    }

    .studio-focus-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1rem;
    }

    .studio-focus-item {
        font-size: 0.95rem;
        color: #555;
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .studio-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Common Section Styles */
    .about-mission-section,
    .about-services-section,
    .about-values-section {
        padding: 5rem 0;
    }

    .about-mission-section {
        background: #fff;
    }

    .about-services-section {
        background: #f9f9f9;
    }

    .about-values-section {
        background: #fff;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .section-description {
        font-size: 1.1rem;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .about-hero-title {
            font-size: 2.5rem;
        }

        .about-expertise-section .col-lg-6:first-child {
            margin-bottom: 2rem;
        }

        .about-studio-section .col-lg-5 {
            margin-bottom: 2rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Keep navbar scrolled on this page
        $('#mainNavbar').addClass('scrolled');

        // Smooth scroll for anchor links
        $('a[href*="#"]').on('click', function(e) {
            var target = $(this.hash);
            if (target.length) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        });
    });
</script>
@endpush
