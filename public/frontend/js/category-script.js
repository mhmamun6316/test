$(document).ready(function() {
    
    // Initialize AOS
    AOS.init({
        duration: 800,
        easing: 'ease-out',
        offset: 100,
        once: true
    });

    // Navbar Scroll Effect - Always scrolled on category page
    $('#mainNavbar').addClass('scrolled');
    
    $(window).on('scroll', function() {
        // Keep scrolled class always on category page
        $('#mainNavbar').addClass('scrolled');
    });

    // Category Products Data (same as main script)
    var categoryProducts = {
        'knit': [
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'Knit Product 1', subtitle: 'Premium Quality Knitwear' },
            { image: 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=800&h=1000&fit=crop', title: 'Knit Product 2', subtitle: 'Comfortable & Stylish' },
            { image: 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=800&h=1000&fit=crop', title: 'Knit Product 3', subtitle: 'Modern Design' },
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'Knit Product 4', subtitle: 'Classic Collection' }
        ],
        'women': [
            { image: 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=800&h=1000&fit=crop', title: 'Women Product 1', subtitle: 'Elegant Design' },
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'Women Product 2', subtitle: 'Fashion Forward' },
            { image: 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=800&h=1000&fit=crop', title: 'Women Product 3', subtitle: 'Trendy Collection' }
        ],
        'nightwear and loungewear': [
            { image: 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=800&h=1000&fit=crop', title: 'Nightwear Product 1', subtitle: 'Comfortable Sleepwear' },
            { image: 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800&h=1000&fit=crop', title: 'Nightwear Product 2', subtitle: 'Cozy Loungewear' },
            { image: 'https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=800&h=1000&fit=crop', title: 'Nightwear Product 3', subtitle: 'Relaxed Fit' }
        ],
        'denim': [
            { image: 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800&h=1000&fit=crop', title: 'Denim Product 1', subtitle: 'Classic Denim' },
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'Denim Product 2', subtitle: 'Vintage Style' },
            { image: 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=800&h=1000&fit=crop', title: 'Denim Product 3', subtitle: 'Modern Fit' }
        ],
        'shirts': [
            { image: 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=800&h=1000&fit=crop', title: 'Shirt Product 1', subtitle: 'Formal Shirt' },
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'Shirt Product 2', subtitle: 'Casual Style' },
            { image: 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?w=800&h=1000&fit=crop', title: 'Shirt Product 3', subtitle: 'Premium Quality' }
        ],
        'pants': [
            { image: 'https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=800&h=1000&fit=crop', title: 'Pants Product 1', subtitle: 'Slim Fit' },
            { image: 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800&h=1000&fit=crop', title: 'Pants Product 2', subtitle: 'Comfortable Fit' },
            { image: 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=800&h=1000&fit=crop', title: 'Pants Product 3', subtitle: 'Classic Style' }
        ],
        't-shirts': [
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'T-Shirt Product 1', subtitle: 'Cotton Blend' },
            { image: 'https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=800&h=1000&fit=crop', title: 'T-Shirt Product 2', subtitle: 'Comfortable Fit' },
            { image: 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=800&h=1000&fit=crop', title: 'T-Shirt Product 3', subtitle: 'Casual Style' }
        ],
        'dresses': [
            { image: 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800&h=1000&fit=crop', title: 'Dress Product 1', subtitle: 'Elegant Design' },
            { image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=800&h=1000&fit=crop', title: 'Dress Product 2', subtitle: 'Party Wear' },
            { image: 'https://images.unsplash.com/photo-1603252109303-2751441dd157?w=800&h=1000&fit=crop', title: 'Dress Product 3', subtitle: 'Casual Dress' }
        ],
        'jackets': [
            { image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800&h=1000&fit=crop', title: 'Jacket Product 1', subtitle: 'Winter Jacket' },
            { image: 'https://images.unsplash.com/photo-1542272604-787c3835535d?w=800&h=1000&fit=crop', title: 'Jacket Product 2', subtitle: 'Leather Jacket' },
            { image: 'https://images.unsplash.com/photo-1506629082955-511b1aa562c8?w=800&h=1000&fit=crop', title: 'Jacket Product 3', subtitle: 'Casual Jacket' }
        ],
        'activewear': [
            { image: 'https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?w=800&h=1000&fit=crop', title: 'Activewear Product 1', subtitle: 'Sportswear' },
            { image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800&h=1000&fit=crop', title: 'Activewear Product 2', subtitle: 'Gym Wear' },
            { image: 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=800&h=1000&fit=crop', title: 'Activewear Product 3', subtitle: 'Athletic Wear' }
        ],
        'accessories': [
            { image: 'https://images.unsplash.com/photo-1594223274512-ad4803739b7c?w=800&h=1000&fit=crop', title: 'Accessory Product 1', subtitle: 'Fashion Accessories' },
            { image: 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&h=1000&fit=crop', title: 'Accessory Product 2', subtitle: 'Stylish Design' },
            { image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=800&h=1000&fit=crop', title: 'Accessory Product 3', subtitle: 'Premium Quality' }
        ],
        'footwear': [
            { image: 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=800&h=1000&fit=crop', title: 'Footwear Product 1', subtitle: 'Comfortable Shoes' },
            { image: 'https://images.unsplash.com/photo-1594223274512-ad4803739b7c?w=800&h=1000&fit=crop', title: 'Footwear Product 2', subtitle: 'Sport Shoes' },
            { image: 'https://images.unsplash.com/photo-1544966503-7cc5ac882d5f?w=800&h=1000&fit=crop', title: 'Footwear Product 3', subtitle: 'Casual Footwear' }
        ]
    };

    // Get category from URL parameter
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }

    var categoryName = getUrlParameter('category');
    
    if (categoryName) {
        // Update page title
        var displayName = categoryName.charAt(0).toUpperCase() + categoryName.slice(1);
        $('#categoryPageTitle').text(displayName);
        
        // Get products for this category
        var products = categoryProducts[categoryName] || [];
        
        // Populate products
        if (products.length > 0) {
            products.forEach(function(product, index) {
                var productHtml = `
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="${index * 100}">
                        <div class="product-item">
                            <div class="product-image-container magnify-wrapper">
                                <img src="${product.image}" alt="${product.title}" class="product-image magnify-image" data-zoom-image="${product.image}">
                            </div>
                            <div class="product-info">
                                <h5 class="product-title">${product.title}</h5>
                                <p class="product-subtitle">${product.subtitle}</p>
                            </div>
                        </div>
                    </div>
                `;
                $('#categoryProductsGrid').append(productHtml);
            });
        } else {
            $('#categoryProductsGrid').html('<div class="col-12 text-center"><p>No products available in this category.</p></div>');
        }
    } else {
        // No category specified, redirect to products
        window.location.href = 'index.html#products';
    }

    // Magnifying Glass Zoom Functionality
    var magnifyContainer = $('#magnifyContainer');
    var magnifyGlass = $('#magnifyGlass');
    var magnifyImage = null;
    var zoomLevel = 2.5; // Zoom level

    $('.magnify-wrapper').on('mousemove', function(e) {
        var $wrapper = $(this);
        var $img = $wrapper.find('.magnify-image');
        
        if ($img.length) {
            magnifyImage = $img;
            var offset = $wrapper.offset();
            var x = e.pageX - offset.left;
            var y = e.pageY - offset.top;
            
            // Show magnifying glass
            magnifyContainer.css({
                'display': 'block',
                'left': (e.pageX - 100) + 'px',
                'top': (e.pageY - 100) + 'px'
            });
            
            // Calculate zoom position
            var imgWidth = $img.width();
            var imgHeight = $img.height();
            var zoomX = (x / imgWidth) * 100;
            var zoomY = (y / imgHeight) * 100;
            
            // Set background image and position
            var zoomImageSrc = $img.data('zoom-image') || $img.attr('src');
            magnifyGlass.css({
                'background-image': 'url(' + zoomImageSrc + ')',
                'background-size': (imgWidth * zoomLevel) + 'px ' + (imgHeight * zoomLevel) + 'px',
                'background-position': zoomX + '% ' + zoomY + '%',
                'background-repeat': 'no-repeat'
            });
        }
    });

    $('.magnify-wrapper').on('mouseleave', function() {
        magnifyContainer.css('display', 'none');
    });

    // Products dropdown hover functionality (same as main page)
    var $productsDropdown = $('.nav-item.dropdown');
    var $dropdownToggle = $productsDropdown.find('.dropdown-toggle');
    var $dropdownMenu = $productsDropdown.find('.dropdown-menu');
    var dropdownTimeout;
    var dropdownInstance;
    var isHoverEnabled = window.innerWidth > 992;

    if ($dropdownToggle.length) {
        dropdownInstance = new bootstrap.Dropdown($dropdownToggle[0]);
    }

    $(window).on('resize', function() {
        isHoverEnabled = window.innerWidth > 992;
    });

    $productsDropdown.on('mouseenter', function() {
        if (isHoverEnabled) {
            clearTimeout(dropdownTimeout);
            if (dropdownInstance) {
                dropdownInstance.show();
            }
        }
    });

    $productsDropdown.on('mouseleave', function() {
        if (isHoverEnabled) {
            var self = this;
            dropdownTimeout = setTimeout(function() {
                if (dropdownInstance) {
                    dropdownInstance.hide();
                }
            }, 200);
        }
    });

    $dropdownMenu.on('mouseenter', function() {
        if (isHoverEnabled) {
            clearTimeout(dropdownTimeout);
        }
    });

    $dropdownMenu.on('mouseleave', function() {
        if (isHoverEnabled) {
            var self = this;
            dropdownTimeout = setTimeout(function() {
                if (dropdownInstance) {
                    dropdownInstance.hide();
                }
            }, 200);
        }
    });

});

