@extends('website.includes.websiteMaster')
@section('title', 'IUB Tech 360 Marketplace')
@section('content')

<section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">
                        <!-- Start Hero Slider -->
                        <div class="hero-slider">
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url(storage/assets/images/hero/slider-bg1.jpg);">
                                <div class="content">
                                    <h2>
                                        Reserve Your Spotlight
                                    </h2>
                                    <p>Bring your creative vision to life on our campus stage!<br> Secure your event slot today and be the mastermind behind unforgettable experiences for your fellow students. Don't miss out on this opportunity to make a lasting impact.<br> Reserve your space now!!</p>
                                    
                                </div>
                            </div>
                            <!-- End Single Slider -->
                            <!-- Start Single Slider -->
                            <div class="single-slider"
                                style="background-image: url(storage/assets/images/hero/slider-bg2.jpg);">
                                <div class="content">
                                    <h2>
                                        We Are Hiring Now. Apply Fast!!!!
                                    </h2>
                                    <p>"Join our university shop team and turn your campus experience into<br>real-life skills! Apply now for a dynamic role that will help you grow both personally and professionally."</p>
                                    
                                    <div class="button">
                                        <a href="product-grids.html" class="btn">Apply Now</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Slider -->
                        </div>
                        <!-- End Hero Slider -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner"
                                style="background-image: url('storage/assets/images/hero/slider-bnr.jpg');">
                                <div class="content">
                                    <h2>   
                                    CURRENT<br>
                                    PARTICIPANTS
                                    </h2>
                                    <h3>- Team 1</h3>
                                    <h3>- Team 2</h3>
                                </div>
                            </div>
                            <!-- End Small Banner -->
                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <!-- Start Small Banner -->
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Ongoing Events!</h2>
                                    <p>-Programing Contest Powered by XYZ</p>
                                    <div class="button">
                                        <a class="btn" href="product-grids.html">View Event</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

<!-- Start Trending Product Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-1.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Watches</span>
                            <h4 class="title">
                                <a href="product-grids.html">Xiaomi Mi Band 5</a>
                            </h4>
                            
                            <div class="price">
                                <span>199.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-2.jpg" alt="#">
                            <!--<span class="sale-tag">Discount amount</span>-->
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">souvenir</span>
                            <h4 class="title">
                                <a href="product-grids.html">KeyChain</a>
                            </h4>
                            
                            <div class="price">
                                <span>90.00TK</span>
                                <span class="discount-price">50.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-3.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">T-shirt</span>
                            <h4 class="title">
                                <a href="product-grids.html">Red Coller T-Shirt</a>
                            </h4>
                            
                            <div class="price">
                                <span>350.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-4.jpg" alt="#">
                            <span class="new-tag">New</span>
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Jewellery</span>
                            <h4 class="title">
                                <a href="product-grids.html">Gold plated fancy bracelet</a>
                            </h4>
                            
                            <div class="price">
                                <span>400.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-5.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Headphones</span>
                            <h4 class="title">
                                <a href="product-grids.html">Wireless Headphones</a>
                            </h4>
                            
                            <div class="price">
                                <span>550.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-6.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Clothes</span>
                            <h4 class="title">
                                <a href="product-grids.html">IUB varsity Jacket</a>
                            </h4>
                            
                            <div class="price">
                                <span>370.00<TK/span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-7.jpg" alt="#">
                            <!--<span class="sale-tag">Discount amount</span>-->
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">clothes</span>
                            <h4 class="title">
                                <a href="product-grids.html">Plain Black Hoodie </a>
                            </h4>
                            
                            <div class="price">
                                <span>250.00TK</span>
                                <span class="discount-price">200.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/products/product-8.jpg" alt="#">
                            <div class="button">
                                <a href="product-details.html" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">Shoes</span>
                            <h4 class="title">
                                <a href="product-grids.html">Red Nike Shoes (replica)</a>
                            </h4>
                            
                            <div class="price">
                                <span>1500.00TK</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Trending Product Area -->

    <!-- Start Galleryy Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-1.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="test.php">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-2.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="test.php">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-3.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="product-grids.html">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-4.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="product-grids.html">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-5.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="test.php">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-6.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="test.php">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-7.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="test.php">Event Description</a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Product -->
                    <div class="single-product">
                        <div class="product-image">
                            <img src="storage/assets/images/gallery/gallery-8.jpg" alt="#">
                            
                        </div>
                        <div class="product-info">
                            
                            <h4 class="title">
                                <a href="test.php">Event Description </a>
                            </h4>
                        </div>
                    </div>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Gallary Area -->

    

    <!-- Start Banner Area -->
    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner" style="background-image:url('storage/assets/images/banner/banner-1-bg.jpg')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="test.php" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('storage/assets/images/banner/banner-2-bg.jpg')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
                                incididunt ut labore.</p>
                            <div class="button">
                                <a href="test.php" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->



    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{asset('storage/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('storage/assets/js/tiny-slider.js')}}"></script>
    <script src="{{asset('storage/assets/js/glightbox.min.js')}}"></script>
    <script src="{{asset('storage/assets/js/main.js')}}"></script>
    <script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });
    </script>
</body>

</html>


@endsection