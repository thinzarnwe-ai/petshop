@extends('frontend.master')
@section('main')
 <!-- Start Top Header Area -->
 <div class="top-header-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <p>FREE 5 days shipping over $99</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <ul>
                    <li><a href="https://www.facebook.com/login/" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="https://twitter.com/i/flow/login" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="https://www.instagram.com/accounts/login/" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="https://www.youtube.com/" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="patoi-responsive-nav">
        <div class="container">
            <div class="patoi-responsive-menu">
                <div class="logo">
                    <a href="index-2.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="patoi-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index-2.html"><img src="{{ asset('frontend/assets/img/logo.png') }}" alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link active">Home</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="index-2.html" class="nav-link active">Home Demo - One</a></li>
                                <li class="nav-item"><a href="index-3.html" class="nav-link">Home Demo - Two</a></li>
                                <li class="nav-item"><a href="index-4.html" class="nav-link">Home Demo - Three</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Pages</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
                                <li class="nav-item"><a href="order-tracking.html" class="nav-link">Order Tracking</a></li>
                                <li class="nav-item"><a href="profile-authentication.html" class="nav-link">My Account</a></li>
                                <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                <li class="nav-item"><a href="privacy-policy.html" class="nav-link">Privacy Policy</a></li>
                                <li class="nav-item"><a href="terms-conditions.html" class="nav-link">Terms & Conditions</a></li>
                                <li class="nav-item"><a href="not-found.html" class="nav-link">404 Error Page</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Shop</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="shop-grid.html" class="nav-link">Shop Grid</a></li>
                                <li class="nav-item"><a href="shop-left-sidebar.html" class="nav-link">Shop Left Sidebar</a></li>
                                <li class="nav-item"><a href="shop-right-sidebar.html" class="nav-link">Shop Right Sidebar</a></li>
                                <li class="nav-item"><a href="products-details.html" class="nav-link">Products Details</a></li>
                                <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>
                                <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
                                <li class="nav-item"><a href="wishlist.html" class="nav-link">Wishlist</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#" class="dropdown-toggle nav-link">Blog</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                <li class="nav-item"><a href="blog-left-sidebar.html" class="nav-link">Blog Left Sidebar</a></li>
                                <li class="nav-item"><a href="blog-right-sidebar.html" class="nav-link">Blog Right Sidebar</a></li>
                                <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                    </ul>
                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <ul>
                                <li>
                                    <select class="form-select">
                                        <option selected>English</option>
                                        <option value="1">Spanish</option>
                                        <option value="2">Chinese</option>
                                    </select>
                                </li>
                                <li>
                                    <div class="search-icon">
                                        <i class='bx bx-search'></i>
                                    </div>
                                </li>
                                <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                                <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <ul>
                            <li>
                                <select class="form-select">
                                    <option selected>English</option>
                                    <option value="1">Spanish</option>
                                    <option value="2">Chinese</option>
                                </select>
                            </li>
                            <li>
                                <div class="search-icon">
                                    <i class='bx bx-search'></i>
                                </div>
                            </li>
                            <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!-- Search Overlay -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Enter your keywords...">
                    <button type="submit"><i class='bx bx-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Search Overlay -->

<!-- Start Main Banner Area -->
<div class="main-banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <span class="sub-title">Welcome to Best Friend</span>
                    <h1>We provide best pet products</h1>
                    <p>Save 20% off your first order</p>
                    <a href="shop-grid.html" class="default-btn"><span>Shop Now</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-image">
                    <img src="{{ asset('frontend/assets/img/banner/banner1.png') }}" alt="banner-image">
                    <img src="{{ asset('frontend/assets/img/banner/banner2.png') }}" alt="banner-image">
                    <img src="{{ asset('frontend/assets/img/banner/banner3.png') }}" alt="banner-image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Banner Area -->

<!-- Start Offer Area -->
<div class="offer-area pt-100 pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/offer/offer1.jpg') }}" alt="offer-image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/offer/offer2.jpg') }}" alt="offer-image">
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-offer-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/offer/offer3.jpg') }}" alt="offer-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Offer Area -->

<!-- Start Categories Area -->
<div class="categories-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Shop by Categories</h2>
        </div>
        <div class="categories-slides owl-carousel owl-theme">
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="{{ asset('frontend/assets/img/categories/categories1.jpg') }}" alt="categories-image">
                    <h3>Dog food</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="{{ asset('frontend/assets/img/categories/categories2.jpg') }}" alt="categories-image">
                    <h3>Cat food</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="{{ asset('frontend/assets/img/categories/categories3.jpg') }}" alt="categories-image">
                    <h3>Pet accessories</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="{{ asset('frontend/assets/img/categories/categories4.jpg') }}" alt="categories-image">
                    <h3>Dry food</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="{{ asset('frontend/assets/img/categories/categories5.jpg') }}" alt="categories-image">
                    <h3>Pet toys</h3>
                </a>
            </div>
            <div class="single-categories-box">
                <a href="shop-grid.html" class="d-block">
                    <img src="{{ asset('frontend/assets/img/categories/categories6.jpg') }}" alt="categories-image">
                    <h3>Cat toys</h3>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- End Categories Area -->

<!-- Start Products Area -->
<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>New Arrivals</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products1.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Pet brash</a></h3>
                        <div class="price">
                            <span class="new-price">$35.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products2.jpg') }}" alt="products-image">
                        </a>
                        <span class="hot">Hot!</span>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Automatic dog blue leash</a></h3>
                        <div class="price">
                            <span class="new-price">$75.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products3.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Cat toilet bowl</a></h3>
                        <div class="price">
                            <span class="new-price">$49.00</span>
                            <span class="old-price">$55.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products4.jpg') }}" alt="products-image">
                        </a>
                        <span class="on-sale">On Sale!</span>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Bowl with rubber toy</a></h3>
                        <div class="price">
                            <span class="new-price">$60.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products5.jpg') }}" alt="products-image">
                        </a>
                        <span class="on-sale">On Sale!</span>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Stack pet collars</a></h3>
                        <div class="price">
                            <span class="new-price">$99.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products6.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Dog toy</a></h3>
                        <div class="price">
                            <span class="new-price">$15.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products7.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Plastic muzzle</a></h3>
                        <div class="price">
                            <span class="new-price">$29.00</span>
                            <span class="old-price">$35.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products8.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Pet toy</a></h3>
                        <div class="price">
                            <span class="new-price">$25.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Area -->

<!-- Start Offer Area -->
<div class="offer-area pb-75">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="single-offer-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/offer/offer4.jpg') }}" alt="offer-image">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-offer-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/offer/offer5.jpg') }}" alt="offer-image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Offer Area -->

<!-- Start Products Area -->
<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Best Sellers</h2>
        </div>
        <div class="products-slides owl-carousel owl-theme">
            <div class="single-products-box">
                <div class="image">
                    <a href="products-details.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/products/products9.jpg') }}" alt="products-image">
                    </a>
                    <ul class="products-button">
                        <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                        <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                    </ul>
                    <div class="new">New!</div>
                </div>
                <div class="content">
                    <h3><a href="products-details.html">Pet chair</a></h3>
                    <div class="price">
                        <span class="new-price">$150.00</span>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
            <div class="single-products-box">
                <div class="image">
                    <a href="products-details.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/products/products10.jpg') }}" alt="products-image">
                    </a>
                    <ul class="products-button">
                        <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                        <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                    </ul>
                </div>
                <div class="content">
                    <h3><a href="products-details.html">Pink ceramic cat bowl</a></h3>
                    <div class="price">
                        <span class="new-price">$39.00</span>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
            <div class="single-products-box">
                <div class="image">
                    <a href="products-details.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/products/products11.jpg') }}" alt="products-image">
                    </a>
                    <ul class="products-button">
                        <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                        <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                    </ul>
                    <span class="sold">Sold!</span>
                </div>
                <div class="content">
                    <h3><a href="products-details.html">Red dog bed</a></h3>
                    <div class="price">
                        <span class="new-price">$125.00</span>
                        <span class="old-price">$145.00</span>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                        <i class='bx bx-star'></i>
                    </div>
                </div>
            </div>
            <div class="single-products-box">
                <div class="image">
                    <a href="products-details.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/products/products12.jpg') }}" alt="products-image">
                    </a>
                    <ul class="products-button">
                        <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                        <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                    </ul>
                </div>
                <div class="content">
                    <h3><a href="products-details.html">Pet carrier</a></h3>
                    <div class="price">
                        <span class="new-price">$39.00</span>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
            </div>
            <div class="single-products-box">
                <div class="image">
                    <a href="products-details.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/products/products1.jpg') }}" alt="products-image">
                    </a>
                    <ul class="products-button">
                        <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                        <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                        <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                    </ul>
                </div>
                <div class="content">
                    <h3><a href="products-details.html">Pet brash</a></h3>
                    <div class="price">
                        <span class="new-price">$35.00</span>
                    </div>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Area -->

<!-- Start Offer Area -->
<div class="offer-area pb-75">
    <div class="container">
        <div class="single-offer-box">
            <a href="shop-grid.html" class="d-block">
                <img src="{{ asset('frontend/assets/img/offer/offer6.jpg') }}" alt="offer-image">
            </a>
        </div>
    </div>
</div>
<!-- End Offer Area -->

<!-- Start Brands Area -->
<div class="brands-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Top Brands</h2>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/brands/brands1.png') }}" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/brands/brands2.png') }}" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/brands/brands3.png') }}" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/brands/brands4.png') }}" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/brands/brands5.png') }}" alt="brands">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <div class="single-brands-box">
                    <a href="shop-grid.html" class="d-block">
                        <img src="{{ asset('frontend/assets/img/brands/brands6.png') }}" alt="brands">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Brands Area -->

<!-- Start Products Area -->
<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Special Offers</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                <div class="offer-box">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="image">
                                <img src="{{ asset('frontend/assets/img/offer/offer7.png') }}" alt="offer-image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="content">
                                <h3><a href="products-details.html">Premium lamb rice</a></h3>
                                <span class="price">$240.00</span>
                                <div class="rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipiscing elit, sed do eiusmod tempor.</p>
                                <h3>Place an order now</h3>
                                <span class="discount">Enjoy 30% OFF</span>
                                <div class="counter-class" data-date="2024-12-24 24:00:00">
                                    <div><span class="counter-days"></span> Days</div>
                                    <div><span class="counter-hours"></span> Hours</div>
                                    <div><span class="counter-minutes"></span> Minutes</div>
                                    <div><span class="counter-seconds"></span> Seconds</div>
                                </div>
                                <a href="shop-grid.html" class="default-btn"><span>Shop Now</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products13.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Premium beef rice</a></h3>
                        <div class="price">
                            <span class="new-price">$139.00</span>
                            <span class="old-price">$200.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="products-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/products/products14.jpg') }}" alt="products-image">
                        </a>
                        <ul class="products-button">
                            <li><a href="cart.html"><i class='bx bx-cart-alt'></i></a></li>
                            <li><a href="wishlist.html"><i class='bx bx-heart'></i></a></li>
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#productsQuickView"><i class='bx bx-show'></i></a></li>
                            <li><a href="products-details.html"><i class='bx bx-link-alt'></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">Premium pork rice</a></h3>
                        <div class="price">
                            <span class="new-price">$100.00</span>
                            <span class="old-price">$120.00</span>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bx-star'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Products Area -->

<!-- Start Facility Area -->
<div class="facility-area">
    <div class="container">
        <div class="facility-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="{{ asset('frontend/assets/img/icon/icon1.png') }}" alt="icon">
                        <h3>Best collection</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="{{ asset('frontend/assets/img/icon/icon2.png') }}" alt="icon">
                        <h3>Fast delivery</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="{{ asset('frontend/assets/img/icon/icon3.png') }}" alt="icon">
                        <h3>24/7 customer support</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="{{ asset('frontend/assets/img/icon/icon4.png') }}" alt="icon">
                        <h3>Secured payment</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Facility Area -->

<!-- Start Blog Area -->
<div class="blog-area pt-100 pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Latest Blog</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="blog-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/blog/blog1.jpg') }}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <span class="date">
                            <span>10 Aug</span> 2024
                        </span>
                        <a href="blog-grid.html" class="category">Training</a>
                        <h3><a href="blog-details.html">Properly a pet training guide</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="blog-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/blog/blog2.jpg') }}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <span class="date">
                            <span>11 Aug</span> 2024
                        </span>
                        <a href="blog-grid.html" class="category">Behaviour</a>
                        <h3><a href="blog-details.html">The exact rules of how to travel with pets</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-post">
                    <div class="image">
                        <a href="blog-details.html" class="d-block">
                            <img src="{{ asset('frontend/assets/img/blog/blog3.jpg') }}" alt="blog-image">
                        </a>
                    </div>
                    <div class="content">
                        <span class="date">
                            <span>12 Aug</span> 2024
                        </span>
                        <a href="blog-grid.html" class="category">Solutions</a>
                        <h3><a href="blog-details.html">Creating proper guidelines for pet food </a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Area -->

<!-- Start Footer Area -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <a href="index-2.html" class="logo">
                        <img src="{{ asset('frontend/assets/img/white-logo.png') }}" alt="logo">
                    </a>
                    <ul class="footer-contact-info">
                        <li><span>Hotline:</span> <a href="tel:12855">12855</a></li>
                        <li><span>Tech support:</span> <a href="tel:+1514312-5678">+1 (514) 312-5678</a></li>
                        <li><span>Email:</span> <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#6d05080101022d1d0c190204430e0200"><span class="__cf_email__" data-cfemail="355d5059595a754554415a5c1b565a58">[email&#160;protected]</span></a></li>
                        <li><span>Address:</span> 1523 Cook Hill Road New Haven, CT</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    <h3>Information</h3>
                    <ul class="custom-links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="privacy-policy.html">Refund Policy</a></li>
                        <li><a href="terms-conditions.html">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer service</h3>
                    <ul class="custom-links">
                        <li><a href="profile-authentication.html">My Account</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="cart.html">Order History</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="terms-conditions.html">Delivery Information</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Subscribe to our newsletter!</h3>
                    <p>Sign up for our mailing list to get the latest updates news & offers.</p>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Your email address" name="EMAIL" required autocomplete="off">
                        <button type="submit"><i class='bx bx-paper-plane'></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                    <div class="payment-types">
                        <div class="d-flex align-items-center">
                            <span>We accept:</span>
                            <ul>
                                <li><img src="{{ asset('frontend/assets/img/payment/visa.png') }}" alt="visa"></li>
                                <li><img src="{{ asset('frontend/assets/img/payment/mc.png') }}" alt="master-card"></li>
                                <li><img src="{{ asset('frontend/assets/img/payment/paypal.png') }}" alt="paypal"></li>
                                <li><img src="{{ asset('frontend/assets/img/payment/ae.png') }}" alt="american-express"></li>
                                <li><img src="{{ asset('frontend/assets/img/payment/discover.png') }}" alt="discover"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <p>© Patoi is Proudly Owned by <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
        </div>
    </div>
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class='bx bx-upvote'></i></div>

<!-- Start QuickView Modal -->
<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="image">
                            <img src="{{ asset('frontend/assets/img/products/products1.jpg') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="content">
                            <h3><a href="products-details.html">Pet Brash</a></h3>
                            <div class="price">
                                <span class="new-price">$150.00</span>
                                <span class="old-price">$200.00</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <p>Nemo malesuada animi consectetur, cras consectetuer laborum tenetur, cum, lacus nemo imperdiet facilisis aute metus lorem.</p>
                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                                <button type="submit" class="default-btn"><span>Add to Cart</span></button>
                            </div>
                            <a href="wishlist.html" class="add-to-wishlist"><i class='bx bx-heart'></i> Add to wishlist</a>
                            <ul class="products-info">
                                <li><span>SKU:</span> 007</li>
                                <li><span>Categories:</span> <a href="shop-grid.html">Brash</a></li>
                                <li><span>Availability:</span> In stock (7 items)</li>
                                <li><span>Tag:</span> Accessories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End QuickView Modal -->

<!-- Start Sidebar Modal Area -->
<div class="productsFilterModal modal right fade" id="productsFilterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <aside class="widget-area">
                    <div class="widget widget_categories">
                        <h3 class="widget-title"><span>Categories</span></h3>
                        <ul>
                            <li><a href="shop-left-sidebar.html">Business</a></li>
                            <li><a href="shop-left-sidebar.html">Privacy</a></li>
                            <li><a href="shop-left-sidebar.html">Technology</a></li>
                            <li><a href="shop-left-sidebar.html">Tips</a></li>
                            <li><a href="shop-left-sidebar.html">Log in</a></li>
                            <li><a href="shop-left-sidebar.html">Uncategorized</a></li>
                        </ul>
                    </div>
                    <div class="widget widget_price_filter">
                        <h3 class="widget-title"><span>Filter by Price</span></h3>
                        <div class="collection_filter_by_price">
                            <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                        </div>
                    </div>
                    <div class="widget widget_patoi_posts_thumb">
                        <h3 class="widget-title"><span>Our Best Sellers</span></h3>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{ asset('frontend/assets/img/products/products1.jpg') }}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Pet brash</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{ asset('frontend/assets/img/products/products2.jpg') }}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Automatic dog blue leash</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{ asset('frontend/assets/img/products/products3.jpg') }}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Cat toilet bowl</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{ asset('frontend/assets/img/products/products4.jpg') }}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Bowl with rubber toy</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title"><span>Tags</span></h3>
                        <div class="tagcloud">
                            <a href="shop-left-sidebar.html">Advertisment</a>
                            <a href="shop-left-sidebar.html">Business</a>
                            <a href="shop-left-sidebar.html">Life</a>
                            <a href="shop-left-sidebar.html">Lifestyle</a>
                            <a href="shop-left-sidebar.html">Fashion</a>
                            <a href="shop-left-sidebar.html">Ads</a>
                            <a href="shop-left-sidebar.html">Advertisment</a>
                        </div>
                    </div>
                    <div class="widget widget_follow_us">
                        <h3 class="widget-title"><span>Follow Us</span></h3>
                        <ul>
                            <li><a href="#" target="_blank">Facebook</a></li>
                            <li><a href="#" target="_blank">Twitter</a></li>
                            <li><a href="#" target="_blank">Instagram</a></li>
                            <li><a href="#" target="_blank">Pinterest</a></li>
                            <li><a href="#" target="_blank">Linkedin</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal Area -->

@endsection
