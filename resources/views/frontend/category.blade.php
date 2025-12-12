@extends('layouts.frontend')

@section('title', 'Category - Radiant Sourcing')

@section('content')
<section class="category-page-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-page-header">
                        <h1 class="category-page-title" id="categoryPageTitle">Category Products</h1>
                    </div>
                </div>
            </div>
            <div class="row" id="categoryProductsGrid">
                <!-- Products will be dynamically loaded here -->
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src="{{ asset('frontend/js/category-script.js') }}"></script>
@endpush
