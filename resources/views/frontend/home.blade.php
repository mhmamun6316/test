@extends('layouts.frontend')

@section('title', 'Radiant Sourcing - Home')

@section('content')
    <!-- Hero Banner with Video -->
    <section class="hero-section" id="home">
        <div class="video-container">
            <video autoplay muted loop playsinline id="heroVideo">
                <source src="{{ asset('frontend/assets/videos/hero-banner.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay"></div>
        </div>
        
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fashion Evolution Section -->
    <section class="fashion-evolution-section" id="fashion-evolution">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="evolution-title" data-aos="fade-up">Fashion Evolution</h1>
                    <p class="evolution-subtitle" data-aos="fade-up" data-aos-delay="100">Crafting Tomorrow's Style â€” Innovation Meets Elegance</p>
                    <p class="evolution-description" data-aos="fade-up" data-aos-delay="200">
                        Discover the future of fashion with Radiant Sourcing, where creativity and sustainability converge to redefine modern style. 
                        We blend exceptional craftsmanship with advanced technology to deliver fashion-forward solutions that inspire confidence and celebrate individuality. 
                        From concept to creation, we transform visionary designs into wearable art that resonates with today's conscious consumer.
                    </p>
                </div>
            </div>
        </div>

        <!-- Characteristics & Carousel -->
        <div class="characteristics-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Left Side - Characteristics -->
                    <div class="col-lg-5 characteristics-content">
                        <div class="characteristics-wrapper">
                            <div class="characteristics-header">
                                <h3 class="characteristics-heading" data-aos="slide-left">Why Choose Us</h3>
                                <div class="heading-underline" data-aos="slide-left" data-aos-delay="100"></div>
                            </div>
                            <ul class="characteristics-list">
                                <li data-aos="slide-left" data-aos-delay="200">
                                    <span class="list-icon">âœ¦</span>
                                    <span class="list-text">Innovative designs that inspire and transform.</span>
                                </li>
                                <li data-aos="slide-left" data-aos-delay="300">
                                    <span class="list-icon">âœ¦</span>
                                    <span class="list-text">Quality craftsmanship for lasting style.</span>
                                </li>
                                <li data-aos="slide-left" data-aos-delay="400">
                                    <span class="list-icon">âœ¦</span>
                                    <span class="list-text">Sustainable practices meet premium fashion.</span>
                                </li>
                                <li data-aos="slide-left" data-aos-delay="500">
                                    <span class="list-icon">âœ¦</span>
                                    <span class="list-text">Modern materials. Minimal footprint. Maximum impact.</span>
                                </li>
                                <li data-aos="slide-left" data-aos-delay="600">
                                    <span class="list-icon">âœ¦</span>
                                    <span class="list-text">Excellence is our standard, not our goal.</span>
                                </li>
                            </ul>
                            <a href="#explore" class="btn btn-explore" data-aos="slide-left" data-aos-delay="700">
                                <span>EXPLORE MORE</span>
                                <span class="btn-arrow">â†’</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Side - Carousel -->
                    <div class="col-lg-7 carousel-content" data-aos="slide-right">
                        <div id="fashionCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="carousel-item active">
                                    <img src="{{ asset('frontend/assets/evolution1.png') }}" class="d-block w-100 carousel-img" alt="Fashion Evolution 1">
                                </div>

                                <!-- Slide 2 -->
                                <div class="carousel-item">
                                    <img src="{{ asset('frontend/assets/evlotuion2.png') }}" class="d-block w-100 carousel-img" alt="Fashion Evolution 2">
                                </div>
                            </div>

                            <!-- Carousel Controls -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#fashionCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#fashionCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>

                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#fashionCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#fashionCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Dynamic Section -->
    <section class="parallax-section" id="parallax-dynamic">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="parallax-quote" data-aos="fade-up">
                            "Style transcends boundaries, weaving innovation into every thread.<br>
                            We don't just follow trendsâ€”we craft the future of fashion."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ethical & Responsive Sourcing Section -->
    <section class="ethical-sourcing-section" id="ethical-sourcing">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left Side - Content -->
                <div class="col-lg-6 ethical-content">
                    <h2 class="ethical-title" data-aos="slide-left">Ethical & Responsive Sourcing</h2>
                    <p class="ethical-description" data-aos="slide-left" data-aos-delay="100">
                        Our dedication to principled and adaptive sourcing methods emphasizes openness, equitable 
                        employment conditions, and ecological stewardship. We combine social accountability with 
                        environmentally conscious production, collaborating with suppliers to establish sustainable 
                        programs and encourage the adoption of natural, planet-friendly, and repurposed resources. 
                        Leveraging our broad connections, we guarantee conscientious procurement and manufacturing 
                        processes that serve communities and the environment.
                    </p>
                    <a href="#explore" class="btn btn-ethical" data-aos="slide-left" data-aos-delay="400">EXPLORE MORE</a>
                </div>

                <!-- Right Side - Image with Certificates -->
                <div class="col-lg-6 ethical-image-wrapper" data-aos="slide-right">
                    <!-- Main Image Container -->
                    <div class="ethical-main-image">
                        <img src="{{ asset('frontend/assets/ethical.jpg') }}" alt="Ethical Sourcing" class="img-fluid">
                        
                        <!-- Certificates Overlay - Inside Image Bottom -->
                        <div class="certificates-overlay">
                            <!-- Certificates Swiper - Top Row (Right to Left) -->
                            <div class="certificates-top">
                                <div class="swiper certificates-swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/cetificate1.jpg') }}" alt="Certificate 1" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate2.jpg') }}" alt="Certificate 2" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate3.jpg') }}" alt="Certificate 3" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate4.jpg') }}" alt="Certificate 4" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate6.jpg') }}" alt="Certificate 6" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate7.jpg') }}" alt="Certificate 7" class="certificate-img">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Certificates Swiper - Bottom Row (Left to Right) -->
                            <div class="certificates-bottom">
                                <div class="swiper certificates-swiper-bottom">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate7.jpg') }}" alt="Certificate 7" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate6.jpg') }}" alt="Certificate 6" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate4.jpg') }}" alt="Certificate 4" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate3.jpg') }}" alt="Certificate 3" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/certificate2.jpg') }}" alt="Certificate 2" class="certificate-img">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="{{ asset('frontend/assets/cetificate1.jpg') }}" alt="Certificate 1" class="certificate-img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Banner -->
                    <div class="ethical-banner">
                        <p class="banner-text">Our partners are compliant with international social and environmental standards to protect both People and the Planet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability Section -->
    <section class="sustainability-section" id="sustainability">
        <div class="container-fluid">
            <!-- First Part: Title & Description Left, Image Right -->
            <div class="row align-items-center sustainability-part-1">
                <div class="col-lg-6 sustainability-content-left">
                    <h2 class="sustainability-title" data-aos="slide-left">Sustainability</h2>
                    <p class="sustainability-description" data-aos="slide-left" data-aos-delay="100">
                        Our operations are guided by a vision of achieving social and ecological equilibrium, 
                        where the well-being of both humanity and the environment are prioritized and sustained.
                    </p>
                    <p class="sustainability-description" data-aos="slide-left" data-aos-delay="200">
                        Ethically sourcing products and nurturing sustainability are fundamental to our mission, 
                        ensuring equitable treatment for workers and actively reducing our environmental impact.
                    </p>
                </div>
                <div class="col-lg-6 sustainability-image-right">
                    <div class="sustainability-image-wrapper-1" data-aos="slide-right">
                        <img src="{{ asset('frontend/assets/sustainability1.jpg') }}" alt="Sustainability" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Second Part: Image Left, Description Right with Button -->
            <div class="row align-items-center sustainability-part-2">
                <div class="col-lg-6 sustainability-image-left">
                    <div class="sustainability-image-wrapper-3" data-aos="slide-left">
                        <img src="{{ asset('frontend/assets/sustainability3.jpg') }}" alt="Sustainability" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 sustainability-content-right">
                    <p class="sustainability-description" data-aos="slide-right" data-aos-delay="100">
                        Our growth focuses on environmental responsibility, with an emphasis on circular thinking, 
                        emission reduction, water conservation, and responsible consumption. We collaborate with 
                        partners committed to ethical sourcing and environmental compliance.
                    </p>
                    <p class="sustainability-description" data-aos="slide-right" data-aos-delay="200">
                        Sustainability is at the core of our growth plan, influencing every decision and action 
                        we take, as we collaborate with like-minded dedicated partners!
                    </p>
                    <a href="#explore" class="btn btn-sustainability" data-aos="slide-right" data-aos-delay="400">EXPLORE MORE</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Banner Section -->
    <section class="quote-banner-section">
        <div class="quote-banner-main">
            <p class="quote-text" data-aos="fade-up">"The Earth does not belong to us, We belong to the Earth!"</p>
        </div>
    </section>

    <!-- Manufacturing Excellence Section -->
    <section class="manufacturing-excellence-section" id="manufacturing-excellence">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="manufacturing-title" data-aos="fade-up">MANUFACTURING EXCELLENCE</h1>
                    <p class="manufacturing-subtitle" data-aos="fade-up" data-aos-delay="100">Where Expertise Ignites Precision and Artistry!!</p>
                    <p class="manufacturing-description" data-aos="fade-up" data-aos-delay="200">
                        Radiant Sourcing Limited serves as a Foundation of Manufacturing mastery, where artistry goes beyond equipment to represent accuracy, security, and enablement. 
                        From the first material slice to the concluding seam, each phase demonstrates dedication to exceeding professional benchmarks, producing apparel recognized for outstanding craftsmanship, honesty, and creative excellence.
                    </p>
                </div>
            </div>
        </div>

        <!-- Image 1 - Right Side -->
        <div class="manufacturing-image-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 manufacturing-content-left">
                        <h3 class="manufacturing-image-title" data-aos="slide-left">Fitting/Garment Technical Support</h3>
                        <p class="manufacturing-image-subtitle" data-aos="slide-left" data-aos-delay="100">Elevating Wearability, Style and Functionality...!!</p>
                        <p class="manufacturing-image-description" data-aos="slide-left" data-aos-delay="200">
                            Apparel is crafted to appear magnificent, conform perfectly, and flow with natural elegance. Each elementâ€”workmanship, sizing, and visual appealâ€”is carefully perfected by a committed internal technical group. Customized fitting guidance and technical help are offered to guarantee requirements are surpassed, improving ease, design, and performance for enhanced client contentment.
                        </p>
                    </div>
                    <div class="col-lg-6 manufacturing-image-right">
                        <div class="manufacturing-image-wrapper" data-aos="slide-right">
                            <img src="{{ asset('frontend/assets/excelence1.png') }}" alt="Manufacturing Excellence" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quote Banner 1 -->
        <section class="quote-banner-section">
            <div class="quote-banner-main">
                <p class="quote-text" data-aos="fade-up">"Production mastery is never coincidental It is consistently the outcome of clear purpose, genuine dedication, strategic guidance, and expert implementation."</p>
            </div>
        </section>

        <!-- Image 2 - Left Side -->
        <div class="manufacturing-image-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 manufacturing-image-left">
                        <div class="manufacturing-image-wrapper" data-aos="slide-left">
                            <img src="{{ asset('frontend/assets/product_control.png') }}" alt="Production Control" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 manufacturing-content-right">
                        <h3 class="manufacturing-image-title" data-aos="slide-right">Production Control</h3>
                        <p class="manufacturing-image-subtitle" data-aos="slide-right" data-aos-delay="100">Optimizing Efficiency, Ensuring Quality, Orchestrating Excellence!!</p>
                        <p class="manufacturing-image-description" data-aos="slide-right" data-aos-delay="200">
                            At the foundation of our production management system are four essential elements: Material Requirement Planning (MRP), Capacity Planning, Production Scheduling, and Quality Control. These components collaborate to guarantee a smooth, effective manufacturing operation, overseeing all aspects from material procurement to end product examination. Material Requirement Planning (MRP) handles material requirements to preserve ideal stock levels and prevent deficits or surpluses.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 3 - Right Side with Button -->
        <div class="manufacturing-image-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 manufacturing-content-left">
                        <p class="manufacturing-image-description" data-aos="slide-left" data-aos-delay="100">
                            Capacity Planning coordinates manufacturing with requirements to enhance assets and stabilize work distribution. Production Scheduling arranges activities to increase yield and decrease idle periods. Quality Control maintains criteria to guarantee each item fulfills or surpasses requirements.
                        </p>
                        <p class="manufacturing-image-description" data-aos="slide-left" data-aos-delay="200">
                            The supply network is supervised to decrease inefficiency and enhance efficiency. Attractive costs and adaptable delivery schedules are accomplished through this meticulous supervision. Business superiority and outstanding customer worth are secured by combining these factors.
                        </p>
                        <a href="#explore" class="btn btn-manufacturing" data-aos="slide-left" data-aos-delay="300">EXPLORE MORE</a>
                    </div>
                    <div class="col-lg-6 manufacturing-image-right">
                        <div class="manufacturing-image-wrapper" data-aos="slide-right">
                            <img src="{{ asset('frontend/assets/product_control2.png') }}" alt="Production Control" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quote Banner 2 -->
        <section class="quote-banner-section">
            <div class="quote-banner-main">
                <p class="quote-text" data-aos="fade-up">"Creating Mastery: Precise Management, Perfect Apparel, Superiority in Every Seam, Effectiveness in Every Stage."</p>
            </div>
        </section>

        <!-- Image 4 - Left Side with Button -->
        <div class="manufacturing-image-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 manufacturing-content-left">
                        <h3 class="manufacturing-image-title" data-aos="slide-left">Quality Assurance</h3>
                        <p class="manufacturing-image-subtitle" data-aos="slide-left" data-aos-delay="100">Redefining Excellence in Craftsmanship and Enduring Durability</p>
                        <p class="manufacturing-image-description" data-aos="slide-left" data-aos-delay="200">
                            Dedicated to maintaining flawless criteria through strict quality management, we guarantee each apparel surpasses requirements for workmanship and resilience. In partnership with our associates, we implement sophisticated proceduresâ€”including laboratory examinations and on-location assessmentsâ€”at each phase of manufacturing, strengthening trust in the honesty and superiority of our merchandise.
                        </p>
                        <a href="#explore" class="btn btn-manufacturing" data-aos="slide-left" data-aos-delay="300">EXPLORE MORE</a>
                    </div>
                    <div class="col-lg-6 manufacturing-image-right">
                        <div class="manufacturing-image-wrapper" data-aos="slide-right">
                            <img src="{{ asset('frontend/assets/product_control3.png') }}" alt="Quality Assurance" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 5 - Left Side with Button -->
        <div class="manufacturing-image-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 manufacturing-image-left">
                        <div class="manufacturing-image-wrapper" data-aos="slide-left">
                            <img src="{{ asset('frontend/assets/product_control4.png') }}" alt="Fair Traceability" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 manufacturing-content-right">
                        <h3 class="manufacturing-image-title" data-aos="slide-right">Fair Traceability</h3>
                        <p class="manufacturing-image-subtitle" data-aos="slide-right" data-aos-delay="100">Transparency across the Supply Chain!!</p>
                        <p class="manufacturing-image-description" data-aos="slide-right" data-aos-delay="200">
                            Instant Notifications Advance Openness, Morality, and Responsibilityâ€”Building Confidence Throughout the Supply Network. We emphasize equitable tracking by delivering instant notifications at each phase of the item pathâ€”from basic material procurement to productionâ€”guaranteeing moral conduct and supply network responsibility.
                        </p>
                        <a href="#explore" class="btn btn-manufacturing" data-aos="slide-right" data-aos-delay="300">EXPLORE MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image 6 - Left Side with Button -->
        <div class="manufacturing-image-section">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 manufacturing-content-left">
                        <h3 class="manufacturing-image-title" data-aos="slide-left">Shipping And Logistics</h3>
                        <p class="manufacturing-image-subtitle" data-aos="slide-left" data-aos-delay="100">Streamlined Delivery, Global Reach!!</p>
                        <p class="manufacturing-image-description" data-aos="slide-left" data-aos-delay="200">
                            Radiant Sourcing ensures a seamless end-to-end logistics experience through our dedicated in-house shipping and logistics team. We streamline supply chain processes and manage all shipping and forwarder formalities with precision. From manufacturing facilities to global destinations, we oversee every step to guarantee efficient delivery and the highest level of customer satisfaction.
                        </p>
                        <a href="#explore" class="btn btn-manufacturing" data-aos="slide-left" data-aos-delay="300">EXPLORE MORE</a>
                    </div>
                    <div class="col-lg-6 manufacturing-image-right">
                        <div class="manufacturing-image-wrapper" data-aos="slide-right">
                            <img src="{{ asset('frontend/assets/product_control5.png') }}" alt="Shipping And Logistics" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products-section" id="products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="products-title text-center" data-aos="fade-up">Products</h1>
                    <p class="products-description" data-aos="fade-up" data-aos-delay="100">
                        At the crossroads of innovation and style, we provide an extensive range of products to meet diverse fashion preferences, blending timeless elegance with the latest trends. Our mission is to enhance your sourcing supply chain from design to delivery. With a focus on 12 distinct categories, we tailor sourcing solutions to meet your needs effectively.
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Category 1: Knit -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card" data-category="knit" style="cursor: pointer;">
                        <div class="swiper category-swiper category-swiper-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="Knit Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=400&h=500&fit=crop" alt="Knit Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1603252109303-2751441dd157?w=400&h=500&fit=crop" alt="Knit Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-1"></div>
                            <div class="swiper-button-prev category-prev-1"></div>
                            <div class="swiper-pagination category-pagination-1"></div>
                        </div>
                        <h4 class="category-name">Knit</h4>
                    </div>
                </div>
                <!-- Category 2: Women -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=400&h=500&fit=crop" alt="Woven Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="Woven Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=400&h=500&fit=crop" alt="Woven Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-2"></div>
                            <div class="swiper-button-prev category-prev-2"></div>
                            <div class="swiper-pagination category-pagination-2"></div>
                        </div>
                        <h4 class="category-name">Women</h4>
                    </div>
                </div>
                <!-- Category 3: Nightwear and Loungewear -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=400&h=500&fit=crop" alt="Nightwear Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&h=500&fit=crop" alt="Nightwear Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=400&h=500&fit=crop" alt="Nightwear Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-3"></div>
                            <div class="swiper-button-prev category-prev-3"></div>
                            <div class="swiper-pagination category-pagination-3"></div>
                        </div>
                        <h4 class="category-name">Nightwear and Loungewear</h4>
                    </div>
                </div>
                <!-- Category 4: Denim -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&h=500&fit=crop" alt="Denim Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="Denim Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=400&h=500&fit=crop" alt="Denim Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-4"></div>
                            <div class="swiper-button-prev category-prev-4"></div>
                            <div class="swiper-pagination category-pagination-4"></div>
                        </div>
                        <h4 class="category-name">Denim</h4>
                    </div>
                </div>
                <!-- Category 5: Shirts -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1603252109303-2751441dd157?w=400&h=500&fit=crop" alt="Shirt Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="Shirt Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=400&h=500&fit=crop" alt="Shirt Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-5"></div>
                            <div class="swiper-button-prev category-prev-5"></div>
                            <div class="swiper-pagination category-pagination-5"></div>
                        </div>
                        <h4 class="category-name">Shirts</h4>
                    </div>
                </div>
                <!-- Category 6: Pants -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-6">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=400&h=500&fit=crop" alt="Pants Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&h=500&fit=crop" alt="Pants Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1603252109303-2751441dd157?w=400&h=500&fit=crop" alt="Pants Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-6"></div>
                            <div class="swiper-button-prev category-prev-6"></div>
                            <div class="swiper-pagination category-pagination-6"></div>
                        </div>
                        <h4 class="category-name">Pants</h4>
                    </div>
                </div>
                <!-- Category 7: T-Shirts -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-7">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="T-Shirt Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=400&h=500&fit=crop" alt="T-Shirt Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=400&h=500&fit=crop" alt="T-Shirt Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-7"></div>
                            <div class="swiper-button-prev category-prev-7"></div>
                            <div class="swiper-pagination category-pagination-7"></div>
                        </div>
                        <h4 class="category-name">T-Shirts</h4>
                    </div>
                </div>
                <!-- Category 8: Dresses -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="550">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-8">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=500&fit=crop" alt="Dress Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=500&fit=crop" alt="Dress Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1603252109303-2751441dd157?w=400&h=500&fit=crop" alt="Dress Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-8"></div>
                            <div class="swiper-button-prev category-prev-8"></div>
                            <div class="swiper-pagination category-pagination-8"></div>
                        </div>
                        <h4 class="category-name">Dresses</h4>
                    </div>
                </div>
                <!-- Category 9: Jackets -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-9">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&h=500&fit=crop" alt="Jacket Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1542272604-787c3835535d?w=400&h=500&fit=crop" alt="Jacket Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=400&h=500&fit=crop" alt="Jacket Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-9"></div>
                            <div class="swiper-button-prev category-prev-9"></div>
                            <div class="swiper-pagination category-pagination-9"></div>
                        </div>
                        <h4 class="category-name">Jackets</h4>
                    </div>
                </div>
                <!-- Category 10: Activewear -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="650">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-10">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=500&fit=crop" alt="Activewear Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&h=500&fit=crop" alt="Activewear Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=500&fit=crop" alt="Activewear Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-10"></div>
                            <div class="swiper-button-prev category-prev-10"></div>
                            <div class="swiper-pagination category-pagination-10"></div>
                        </div>
                        <h4 class="category-name">Activewear</h4>
                    </div>
                </div>
                <!-- Category 11: Accessories -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-11">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?w=400&h=500&fit=crop" alt="Accessory Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=500&fit=crop" alt="Accessory Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400&h=500&fit=crop" alt="Accessory Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-11"></div>
                            <div class="swiper-button-prev category-prev-11"></div>
                            <div class="swiper-pagination category-pagination-11"></div>
                        </div>
                        <h4 class="category-name">Accessories</h4>
                    </div>
                </div>
                <!-- Category 12: Footwear -->
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="750">
                    <div class="category-card">
                        <div class="swiper category-swiper category-swiper-12">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=500&fit=crop" alt="Footwear Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?w=400&h=500&fit=crop" alt="Footwear Product" class="category-product-image">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=500&fit=crop" alt="Footwear Product" class="category-product-image">
                                </div>
                            </div>
                            <div class="swiper-button-next category-next-12"></div>
                            <div class="swiper-button-prev category-prev-12"></div>
                            <div class="swiper-pagination category-pagination-12"></div>
                        </div>
                        <h4 class="category-name">Footwear</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Parallax Section 2 -->
    <section class="parallax-section-2" id="parallax-inquiry">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="parallax-title-2" data-aos="fade-up">We are eager to deliver you Superior Value</h2>
                        <p class="parallax-subtitle-2" data-aos="fade-up" data-aos-delay="100">To Enquire with Us</p>
                        <a href="#contact" class="btn btn-parallax-2" data-aos="fade-up" data-aos-delay="200">CLICK HERE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us-section" id="about">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Left Side - Text Content -->
                <div class="col-lg-6 about-content" data-aos="slide-right">
                    <h2 class="about-title">All About Us</h2>
                    <p class="about-description">
                        We believe that Fashion is not just about Clothing, it's an ever evolving statement, an expression of Identity, Culture context of time and place, perception, aspiration, creativity and innovation, value and belief of individual and community.
                    </p>
                </div>
                
                <!-- Right Side - Carousel -->
                <div class="col-lg-6 about-carousel-wrapper" data-aos="slide-left">
                    <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Slide 1: Sustainability -->
                            <div class="carousel-item active">
                                <div class="carousel-image-wrapper">
                                    <img src="{{ asset('frontend/assets/sustainability1.jpg') }}" class="d-block w-100 carousel-img" alt="Sustainability">
                                    <div class="carousel-overlay">
                                        <h3 class="carousel-title">Sustainability</h3>
                                        <p class="carousel-subtitle">Building a Better Future Through Responsible Practices</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Slide 2: Ethical Sourcing -->
                            <div class="carousel-item">
                                <div class="carousel-image-wrapper">
                                    <img src="{{ asset('frontend/assets/ethical.jpg') }}" class="d-block w-100 carousel-img" alt="Ethical Sourcing">
                                    <div class="carousel-overlay">
                                        <h3 class="carousel-title">Ethical Sourcing</h3>
                                        <p class="carousel-subtitle">Putting People and Society First, Our Ethical Sourcing Practices Move On</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Slide 3: Manufacturing Excellence -->
                            <div class="carousel-item">
                                <div class="carousel-image-wrapper">
                                    <img src="{{ asset('frontend/assets/excelence1.png') }}" class="d-block w-100 carousel-img" alt="Manufacturing Excellence">
                                    <div class="carousel-overlay">
                                        <h3 class="carousel-title">Manufacturing Excellence</h3>
                                        <p class="carousel-subtitle">Precision Craftsmanship and Quality Standards</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#aboutCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('frontend/js/script.js') }}"></script>
@endpush
