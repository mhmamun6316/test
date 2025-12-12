@extends('layouts.frontend')

@section('title', ($currentCategory ? $currentCategory->name : 'Products') . ' - Radiant Sourcing')

@section('content')
<!-- Category Hero Section -->
<section class="category-hero-section">
    <div class="category-hero-background">
        @if($currentCategory && $products->count() > 0 && $products->first()->image)
            <img src="{{ asset('storage/' . $products->first()->image) }}" alt="{{ $currentCategory->name }}" class="hero-bg-image">
        @else
            <div class="hero-bg-placeholder" style="background: linear-gradient(135deg, #0d5c35 0%, #1a8a4e 100%);"></div>
        @endif
        <div class="category-hero-overlay"></div>
    </div>
    <div class="category-hero-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="category-hero-title" data-aos="fade-up">
                        {{ $currentCategory ? $currentCategory->name : 'Our Products' }}
                    </h1>
                    @if($currentCategory && $currentCategory->description)
                    <p class="category-hero-subtitle" data-aos="fade-up" data-aos-delay="100">
                        {{ $currentCategory->description }}
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Navigation -->
<section class="category-nav-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="category-tabs" data-aos="fade-up">
                    <a href="{{ route('home') }}#products" class="category-tab">All Categories</a>
                    @foreach($categories as $category)
                        <a href="{{ route('category', Str::slug($category->name)) }}" 
                           class="category-tab {{ $currentCategory && $currentCategory->id == $category->id ? 'active' : '' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Products Grid Section -->
<section class="category-products-section">
    <div class="container">
        <div class="row">
            @forelse($products as $index => $product)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 50) }}">
                <div class="product-card">
                    <div class="product-image-wrapper">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                        @else
                            <img src="https://via.placeholder.com/400x500?text={{ urlencode($product->name) }}" alt="{{ $product->name }}" class="product-image">
                        @endif
                        <div class="product-overlay">
                            <span class="product-view-btn">View Details</span>
                        </div>
                    </div>
                    <div class="product-info">
                        <h4 class="product-name">{{ $product->name }}</h4>
                        @if($product->description)
                        <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <div class="empty-products">
                    <i class="fas fa-box-open fa-4x text-muted mb-3"></i>
                    <h3 class="text-muted">No Products Found</h3>
                    @if($currentCategory)
                    <p class="text-muted">There are no products in the {{ $currentCategory->name }} category yet.</p>
                    @else
                    <p class="text-muted">Please select a category to view products.</p>
                    @endif
                    <a href="{{ route('home') }}#products" class="btn btn-primary mt-3">Browse All Categories</a>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Inquiry Section -->
<section class="category-inquiry-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="inquiry-title" data-aos="fade-up">Interested in Our Products?</h2>
                <p class="inquiry-text" data-aos="fade-up" data-aos-delay="100">
                    We're eager to help you find the perfect products for your needs. Get in touch with us today.
                </p>
                <a href="{{ route('home') }}#contact" class="btn btn-inquiry" data-aos="fade-up" data-aos-delay="200">ENQUIRE NOW</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Category Hero Section */
    .category-hero-section {
        position: relative;
        height: 50vh;
        min-height: 400px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
    
    .category-hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }
    
    .hero-bg-image, .hero-bg-placeholder {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .category-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
    }
    
    .category-hero-content {
        position: relative;
        z-index: 1;
    }
    
    .category-hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: #fff;
        margin-bottom: 1rem;
    }
    
    .category-hero-subtitle {
        font-size: 1.2rem;
        color: rgba(255, 255, 255, 0.9);
        max-width: 600px;
        margin: 0 auto;
    }
    
    /* Category Navigation */
    .category-nav-section {
        padding: 2rem 0;
        background: #f8f9fa;
    }
    
    .category-tabs {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1rem;
    }
    
    .category-tab {
        padding: 0.75rem 1.5rem;
        background: #fff;
        border: 2px solid #0d5c35;
        border-radius: 30px;
        color: #0d5c35;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .category-tab:hover, .category-tab.active {
        background: #0d5c35;
        color: #fff;
    }
    
    /* Products Grid */
    .category-products-section {
        padding: 4rem 0;
    }
    
    .product-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    
    .product-image-wrapper {
        position: relative;
        height: 350px;
        overflow: hidden;
    }
    
    .product-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .product-card:hover .product-image {
        transform: scale(1.1);
    }
    
    .product-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(13, 92, 53, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .product-card:hover .product-overlay {
        opacity: 1;
    }
    
    .product-view-btn {
        padding: 0.75rem 2rem;
        background: #fff;
        color: #0d5c35;
        border-radius: 30px;
        font-weight: 600;
        cursor: pointer;
    }
    
    .product-info {
        padding: 1.5rem;
    }
    
    .product-name {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
    }
    
    .product-description {
        color: #666;
        font-size: 0.9rem;
        margin: 0;
    }
    
    /* Inquiry Section */
    .category-inquiry-section {
        padding: 4rem 0;
        background: linear-gradient(135deg, #0d5c35 0%, #1a8a4e 100%);
    }
    
    .inquiry-title {
        font-size: 2.5rem;
        color: #fff;
        margin-bottom: 1rem;
    }
    
    .inquiry-text {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.1rem;
        max-width: 600px;
        margin: 0 auto 2rem;
    }
    
    .btn-inquiry {
        padding: 1rem 3rem;
        background: #fff;
        color: #0d5c35;
        border-radius: 30px;
        font-weight: 600;
        border: none;
        transition: all 0.3s ease;
    }
    
    .btn-inquiry:hover {
        background: #f8f9fa;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }
    
    /* Empty Products */
    .empty-products {
        padding: 3rem;
    }
    
    @media (max-width: 768px) {
        .category-hero-title {
            font-size: 2.5rem;
        }
        
        .category-tabs {
            gap: 0.5rem;
        }
        
        .category-tab {
            padding: 0.5rem 1rem;
            font-size: 0.9rem;
        }
    }
</style>
@endpush

@push('scripts')
<script src="{{ asset('frontend/js/category-script.js') }}"></script>
@endpush
