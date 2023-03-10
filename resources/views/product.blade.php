@include('layout.nav')
@extends('layout.footer')

<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet" />
    
    {{-- <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css"> --}}
    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    	<link href="{{ asset('assets/css/plugins/nouislider/nouislider.css') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css"> --}}
    
	
    <!-- Main CSS File -->
    {{-- <link rel="stylesheet" href="assets/css/style.css"> --}}

</head>

<body>
    <div class="page-wrapper">
 
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Masonry Sticky Info</li>
                    </ol>
                    
                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous"
                            tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>Prev</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next"
                            tabindex="-1">
                            <span>Next</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery">
                                    <figure class="product-main-image">
                                        <span class="product-label label-sale">Sale</span>
                                        <img id="product-zoom" src="{{ asset('images2/'.$product->image)}}"
                                            data-zoom-image="{{ asset('images2/'.$product->image)}}"
                                            alt="product image">

                                        <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                            <i class="icon-arrows"></i>
                                        </a>
                                    </figure><!-- End .product-main-image -->

                                    <div id="product-zoom-gallery"
                                        class="product-image-gallery product-gallery-masonry">
                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('images2/'.$product->image)}}"
                                            data-zoom-image="{{ asset('images2/'.$product->image)}}">
                                            <img src="{{ asset('images2/'.$product->image)}}"
                                                alt="product cross">
                                        </a>

                                        <a class="product-gallery-item gallery-item-wide" href="#"
                                            data-image="{{ asset('images2/'.$product->image)}}"
                                            data-zoom-image="{{ asset('images2/'.$product->image)}}">
                                            <img src="{{ asset('images2/'.$product->image)}}"
                                                alt="product with model">
                                        </a>

                                        <a class="product-gallery-item" href="#"
                                            data-image="{{ asset('images2/'.$product->image)}}"
                                            data-zoom-image="{{ asset('images2/'.$product->image)}}">
                                            <img src="{{ asset('images2/'.$product->image)}}"
                                                alt="product side">
                                        </a>
                                    </div><!-- End .product-image-gallery -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details sticky-content">
                                    <h1 class="product-title">{{$product->name}}</h1>
                                    <!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div>
                                            <!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-accordion" id="review-link">(2
                                            Reviews )</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                        <span class="new-price">${{$product->price}}</span>
                                        {{-- <span class="old-price">$80.00</span> --}}
                                    </div><!-- End .product-price -->

                                    <div class="product-content">
                                        <p>{{$product->description}}
                                        </p>
                                    </div><!-- End .product-content -->

                                    

                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1"
                                                min="1" max="10" step="1" data-decimals="0"
                                                required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->
                                     <form action="{{route('order.store')}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <div class="product-details-action">
                                        <input type="submit" class="btn-product btn-cart" value ="add to cart">
                                                </form>
                                   

                                    </div><!-- End .product-details-action -->

                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="product">{{$product->category->name}}</a>
            
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="#" class="social-icon" title="Facebook"
                                                target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i
                                                    class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram"
                                                target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="#" class="social-icon" title="Pinterest"
                                                target="_blank"><i class="icon-pinterest"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->

                                    <div class="accordion accordion-plus product-details-accordion"
                                        id="product-accordion">
                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-desc-heading">
                                                <h2 class="card-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        href="#product-accordion-desc" aria-expanded="false"
                                                        aria-controls="product-accordion-desc">
                                                        Description
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-desc" class="collapse"
                                                aria-labelledby="product-desc-heading"
                                                data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        <p>{{$product->description}}
                                                        </p>
                                                       
                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-info-heading">
                                                <h2 class="card-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        href="#product-accordion-info" aria-expanded="false"
                                                        aria-controls="product-accordion-info">
                                                        Additional Information
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-info" class="collapse"
                                                aria-labelledby="product-info-heading"
                                                data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                            Donec odio. Quisque volutpat mattis eros. Nullam malesuada
                                                            erat ut turpis. Suspendisse urna viverra non, semper
                                                            suscipit, posuere a, pede. Donec nec justo eget felis
                                                            facilisis fermentum. Aliquam porttitor mauris sit amet orci.
                                                        </p>

                                                        <h3>Fabric & care</h3>
                                                        <ul>
                                                            <li>100% Polyester</li>
                                                            <li>Do not iron</li>
                                                            <li>Do not wash</li>
                                                            <li>Do not bleach</li>
                                                            <li>Do not tumble dry</li>
                                                            <li>Professional dry clean only</li>
                                                        </ul>

                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-shipping-heading">
                                                <h2 class="card-title">
                                                    <a role="button" data-toggle="collapse"
                                                        href="#product-accordion-shipping" aria-expanded="true"
                                                        aria-controls="product-accordion-shipping">
                                                        Shipping & Returns
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-shipping" class="collapse show"
                                                aria-labelledby="product-shipping-heading"
                                                data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="product-desc-content">
                                                        <p>We deliver to over 100 countries around the world. For full
                                                            details of the delivery options we offer, please view our <a
                                                                href="#">Delivery information</a><br>
                                                            We hope you???ll love every purchase, but if you ever need to
                                                            return an item you can do so within a month of receipt. For
                                                            full details of how to make a return, please view our <a
                                                                href="#">Returns information</a></p>
                                                    </div><!-- End .product-desc-content -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->

                                        <div class="card card-box card-sm">
                                            <div class="card-header" id="product-review-heading">
                                                <h2 class="card-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        href="#product-accordion-review" aria-expanded="false"
                                                        aria-controls="product-accordion-review">
                                                        Reviews (2)
                                                    </a>
                                                </h2>
                                            </div><!-- End .card-header -->
                                            <div id="product-accordion-review" class="collapse"
                                                aria-labelledby="product-review-heading"
                                                data-parent="#product-accordion">
                                                <div class="card-body">
                                                    <div class="reviews">
                                                        <div class="review">
                                                            <div class="row no-gutters">
                                                                <div class="col-auto">
                                                                    <h4><a href="#">Samanta J.</a></h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings">
                                                                            <div class="ratings-val"
                                                                                style="width: 80%;"></div>
                                                                            <!-- End .ratings-val -->
                                                                        </div><!-- End .ratings -->
                                                                    </div><!-- End .rating-container -->
                                                                    <span class="review-date">6 days ago</span>
                                                                </div><!-- End .col -->
                                                                <div class="col">
                                                                    <h4>Good, perfect size</h4>

                                                                    <div class="review-content">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipisicing elit. Ducimus cum dolores
                                                                            assumenda asperiores facilis porro
                                                                            reprehenderit animi culpa atque blanditiis
                                                                            commodi perspiciatis doloremque, possimus,
                                                                            explicabo, autem fugit beatae quae voluptas!
                                                                        </p>
                                                                    </div><!-- End .review-content -->

                                                                    <div class="review-action">
                                                                        <a href="#"><i
                                                                                class="icon-thumbs-up"></i>Helpful
                                                                            (2)</a>
                                                                        <a href="#"><i
                                                                                class="icon-thumbs-down"></i>Unhelpful
                                                                            (0)</a>
                                                                    </div><!-- End .review-action -->
                                                                </div><!-- End .col-auto -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .review -->

                                                        <div class="review">
                                                            <div class="row no-gutters">
                                                                <div class="col-auto">
                                                                    <h4><a href="#">John Doe</a></h4>
                                                                    <div class="ratings-container">
                                                                        <div class="ratings">
                                                                            <div class="ratings-val"
                                                                                style="width: 100%;"></div>
                                                                            <!-- End .ratings-val -->
                                                                        </div><!-- End .ratings -->
                                                                    </div><!-- End .rating-container -->
                                                                    <span class="review-date">5 days ago</span>
                                                                </div><!-- End .col -->
                                                                <div class="col">
                                                                    <h4>Very good</h4>

                                                                    <div class="review-content">
                                                                        <p>Sed, molestias, tempore? Ex dolor esse iure
                                                                            hic veniam laborum blanditiis laudantium
                                                                            iste amet. Cum non voluptate eos enim, ab
                                                                            cumque nam, modi, quas iure illum
                                                                            repellendus, blanditiis perspiciatis beatae!
                                                                        </p>
                                                                    </div><!-- End .review-content -->

                                                                    <div class="review-action">
                                                                        <a href="#"><i
                                                                                class="icon-thumbs-up"></i>Helpful
                                                                            (0)</a>
                                                                        <a href="#"><i
                                                                                class="icon-thumbs-down"></i>Unhelpful
                                                                            (0)</a>
                                                                    </div><!-- End .review-action -->
                                                                </div><!-- End .col-auto -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .review -->
                                                    </div><!-- End .reviews -->
                                                </div><!-- End .card-body -->
                                            </div><!-- End .collapse -->
                                        </div><!-- End .card -->
                                    </div><!-- End .accordion -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->

                    <hr class="mt-3 mb-5">

                    <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'>
                       
                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        @section('footer')
        @endsection
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search"
                    placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>

                        <ul>
                            <li><a href="index-1.html">01 - furniture store</a></li>
                            <li><a href="index-2.html">02 - furniture store</a></li>
                            <li><a href="index-3.html">03 - electronic store</a></li>
                            <li><a href="index-4.html">04 - electronic store</a></li>
                            <li><a href="index-5.html">05 - fashion store</a></li>
                            <li><a href="index-6.html">06 - fashion store</a></li>
                            <li><a href="index-7.html">07 - fashion store</a></li>
                            <li><a href="index-8.html">08 - fashion store</a></li>
                            <li><a href="index-9.html">09 - fashion store</a></li>
                            <li><a href="index-10.html">10 - shoes store</a></li>
                            <li><a href="index-11.html">11 - furniture simple store</a></li>
                            <li><a href="index-12.html">12 - fashion simple store</a></li>
                            <li><a href="index-13.html">13 - market</a></li>
                            <li><a href="index-14.html">14 - market fullwidth</a></li>
                            <li><a href="index-15.html">15 - lookbook 1</a></li>
                            <li><a href="index-16.html">16 - lookbook 2</a></li>
                            <li><a href="index-17.html">17 - fashion store</a></li>
                            <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                            <li><a href="index-19.html">19 - games store</a></li>
                            <li><a href="index-20.html">20 - book store</a></li>
                            <li><a href="index-21.html">21 - sport store</a></li>
                            <li><a href="index-22.html">22 - tools store</a></li>
                            <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                            <li><a href="index-24.html">24 - extreme sport store</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span
                                            class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span
                                            class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span
                                            class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.html">Full Width</a></li>
                            <li><a href="">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.html">About</a>

                                <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>

                                <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                </ul>
                            </li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="faq.html">FAQs</a></li>
                            <li><a href="404.html">Error 404</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                        <ul>
                            <li><a href="blog.html">Classic</a></li>
                            <li><a href="blog-listing.html">Listing</a></li>
                            <li>
                                <a href="#">Grid</a>
                                <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Masonry</a>
                                <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Mask</a>
                                <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Single Post</a>
                                <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                        <ul>
                            <li><a href="elements-products.html">Products</a></li>
                            <li><a href="elements-typography.html">Typography</a></li>
                            <li><a href="elements-titles.html">Titles</a></li>
                            <li><a href="elements-banners.html">Banners</a></li>
                            <li><a href="elements-product-category.html">Product Category</a></li>
                            <li><a href="elements-video-banners.html">Video Banners</a></li>
                            <li><a href="elements-buttons.html">Buttons</a></li>
                            <li><a href="elements-accordions.html">Accordions</a></li>
                            <li><a href="elements-tabs.html">Tabs</a></li>
                            <li><a href="elements-testimonials.html">Testimonials</a></li>
                            <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                            <li><a href="elements-portfolio.html">Portfolio</a></li>
                            <li><a href="elements-cta.html">Call to Action</a></li>
                            <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i
                        class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i
                        class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i
                        class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i
                        class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin"
                                        role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                                        role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel"
                                    aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email"
                                                name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password"
                                                name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember
                                                    Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel"
                                    aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email"
                                                name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password"
                                                name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to
                                                    the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <!-- Plugins JS File -->
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/superfish.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ URL::asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.elevateZoom.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-input-spinner.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.sticky-kit.min.js') }}"></script>
    {{-- <script src="{{('assets/js/jquery.min.js')}}"></script>
    <script src="{{('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{('assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{('assets/js/superfish.min.js')}}"></script>
    <script src="{{('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{('assets/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{('assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{('assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{('assets/js/jquery.sticky-kit.min.js')}}"></script> --}}
    <!-- Main JS File -->
    {{-- <script src="{{asset('assets/js/main.js')}}"></script> --}}
    {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" /> --}}
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>




</html>
