@extends('public_layouts.main_layout')
@push('css')
    <style>
        .shop-topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .shop-result p {
            margin: 0;
            font-size: 15px;
        }

        .shop-sort select {
            min-width: 190px;
            height: 45px;
            border: 1px solid #e5e5e5;
            padding: 0 15px;
            border-radius: 5px;
            outline: none;
        }


        /* SIDEBAR */

        .shop-sidebar {
            padding-right: 20px;
        }

        .shop-sidebar-widget {
            background: #fff;
            padding: 25px;
            margin-bottom: 25px;
            border: 1px solid #eeeeee;
            border-radius: 6px;
        }

        .sidebar-title {
            font-size: 20px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .shop-category-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .shop-category-list li {
            margin-bottom: 13px;
        }

        .shop-category-list li:last-child {
            margin-bottom: 0;
        }

        .shop-category-list li a {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #333;
            font-size: 15px;
            transition: all .3s ease;
        }

        .shop-category-list li a:hover {
            color: #ff4d23;
        }

        .shop-category-list li a span {
            color: #888;
        }


        /* PRICE */

        .price-input {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .price-input input {
            width: 50%;
            height: 42px;
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 0 10px;
            outline: none;
        }

        .price-filter .default-btn {
            border: 0;
            padding: 10px 22px;
            border-radius: 4px;
        }


        /* CHECKBOX */

        .shop-check {
            margin-bottom: 12px;
        }

        .shop-check:last-child {
            margin-bottom: 0;
        }

        .shop-check label {
            display: flex;
            align-items: center;
            gap: 9px;
            cursor: pointer;
            font-size: 15px;
        }

        .shop-check input {
            width: 16px;
            height: 16px;
        }


        /* PRODUCT CARD */

        .product-card {
            background: #fff;
            margin-bottom: 30px;
            transition: all .3s ease;
        }

        .product-image {
            position: relative;
            overflow: hidden;
            background: #f8f8f8;
            border-radius: 6px;
        }

        .product-image>a {
            display: block;
        }

        .product-image img {
            width: 100%;
            height: 270px;
            object-fit: contain;
            display: block;
            transition: all .4s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.04);
        }


        /* DISCOUNT */

        .discount-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 2;
            background: #ff4d23;
            color: #fff;
            padding: 5px 10px;
            font-size: 12px;
            border-radius: 3px;
        }


        /* WISHLIST */

        .wishlist-btn {
            position: absolute;
            right: 15px;
            top: 15px;
            z-index: 3;
            width: 38px;
            height: 38px;
            border: 0;
            border-radius: 50%;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .08);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .wishlist-btn i {
            font-size: 20px;
            color: #555;
        }

        .wishlist-btn:hover i {
            color: #ff4d23;
        }


        /* ADD TO CART */

        .product-cart {
            position: absolute;
            bottom: 15px;
            left: 15px;
            right: 15px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all .3s ease;
        }

        .product-card:hover .product-cart {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .cart-btn {
            width: 100%;
            height: 44px;
            background: #ff4d23;
            color: #fff !important;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .cart-btn:hover {
            background: #222;
        }


        /* CONTENT */

        .product-content {
            padding: 17px 5px 5px;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 2px;
            margin-bottom: 7px;
        }

        .product-rating i {
            color: #ffb400;
            font-size: 16px;
        }

        .product-rating span {
            color: #777;
            font-size: 12px;
            margin-left: 5px;
        }

        .product-content h3 {
            font-size: 17px;
            line-height: 1.4;
            margin-bottom: 8px;
        }

        .product-content h3 a {
            color: #222;
        }

        .product-content h3 a:hover {
            color: #ff4d23;
        }


        /* PRICE */

        .product-price {
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .product-price span {
            color: #ff4d23;
            font-size: 18px;
            font-weight: 600;
        }

        .product-price del {
            color: #999;
            font-size: 14px;
        }

        .product-category {
            font-size: 13px;
            color: #777;
            margin-bottom: 5px;
        }

        .product-stock {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #eeeeee;
            font-size: 13px;
        }

        .product-stock span {
            color: #777;
        }

        .product-stock strong {
            color: #333;
            font-weight: 500;
        }

        .product-status {
            margin-top: 10px;
        }

        .product-status .badge {
            font-size: 11px;
            padding: 5px 9px;
        }

        /* RESPONSIVE */

        @media only screen and (max-width: 991px) {

            .shop-sidebar {
                padding-right: 0;
                margin-bottom: 30px;
            }

        }

        @media only screen and (max-width: 575px) {

            .shop-topbar {
                display: block;
            }

            .shop-sort {
                margin-top: 15px;
            }

            .shop-sort select {
                width: 100%;
            }

        }
    </style>
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg1">
        <div class="container">
            <div class="inner-title text-center">
                <h3>उत्पाद</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li>उत्पाद</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Blog Widget Area -->
    <div class="shop-area pt-100 pb-70">
        <div class="container">

           
            <div class="row">

                <!-- LEFT SIDEBAR -->
                <div class="col-lg-3">
                    <div class="shop-sidebar">

                        <!-- Categories -->
                        <div class="shop-sidebar-widget">
                            <h3 class="sidebar-title">श्रेणियाँ</h3>

                            <ul class="shop-category-list">
                                <li>
                                    <a href="#">
                                        सभी उत्पाद
                                        <span>(24)</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        पेंट
                                        <span>(10)</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        वॉल पेंट
                                        <span>(6)</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        प्राइमर
                                        <span>(4)</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        वुड कोटिंग
                                        <span>(4)</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Price Filter -->
                        <div class="shop-sidebar-widget">
                            <h3 class="sidebar-title">कीमत</h3>

                            <div class="price-filter">
                                <div class="price-input">
                                    <input type="text" placeholder="₹ Min">
                                    <input type="text" placeholder="₹ Max">
                                </div>

                                <button type="button" class="default-btn">
                                    फ़िल्टर
                                </button>
                            </div>
                        </div>

                        <!-- Availability -->
                        <div class="shop-sidebar-widget">
                            <h3 class="sidebar-title">उपलब्धता</h3>

                            <div class="shop-check">
                                <label>
                                    <input type="checkbox">
                                    <span>उपलब्ध उत्पाद</span>
                                </label>
                            </div>

                            <div class="shop-check">
                                <label>
                                    <input type="checkbox">
                                    <span>स्टॉक में</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>


                <!-- PRODUCT LIST -->
                <div class="col-lg-9">

                    <!-- Top bar -->
                    <div class="shop-topbar mb-30">

                        <div class="shop-result">
                            <p></p>
                        </div>

                        <div class="shop-sort">
                            <select>
                                <option value="">क्रम से लगाएं</option>
                                <option value="latest">नवीनतम</option>
                                <option value="low">कीमत: कम से अधिक</option>
                                <option value="high">कीमत: अधिक से कम</option>
                            </select>
                        </div>

                    </div>


                    <div class="row">

                        <!-- PRODUCT 1 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">

                                <!-- Product Image -->
                                <div class="product-image">

                                    <span class="discount-badge">
                                        -20%
                                    </span>

                                    <button type="button" class="wishlist-btn">
                                        <i class="bx bx-heart"></i>
                                    </button>

                                    <a href="{{ url('/product-details/' . encrypt(1)) }}">
                                        <img src="{{ asset('user_assets/images/product/p1.png') }}" alt="चावल">
                                    </a>

                                    <!-- Add To Cart -->
                                    <div class="product-cart">
                                        <a href="#" class="cart-btn">
                                            <i class="bx bx-cart"></i>
                                            कार्ट में जोड़ें
                                        </a>
                                    </div>

                                </div>


                                <!-- Product Details -->
                                <div class="product-content">

                                    <!-- Category -->
                                    <div class="product-category">
                                        किराना
                                    </div>

                                    <!-- Product Name -->
                                    <h3>
                                        <a href="{{ url('/product-details/' . encrypt(1)) }}">
                                            चावल
                                        </a>
                                    </h3>

                                    <!-- Rating -->
                                    <div class="product-rating">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>

                                        <span>(12)</span>
                                    </div>

                                    <!-- Price -->
                                    <div class="product-price">
                                        <span>₹50</span>
                                    </div>

                                    <!-- Stock -->
                                    <div class="product-stock">
                                        <span>उपलब्ध मात्रा:</span>
                                        <strong>100 किलोग्राम</strong>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <!-- PRODUCT 2 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">

                                <div class="product-image">

                                    <span class="discount-badge">
                                        -10%
                                    </span>

                                    <button type="button" class="wishlist-btn">
                                        <i class="bx bx-heart"></i>
                                    </button>

                                    <a href="{{ url('/product-details/' . encrypt(2)) }}">
                                        <img src="{{ asset('user_assets/images/product/p3.png') }}" alt="कॉपी">
                                    </a>

                                    <div class="product-cart">
                                        <a href="#" class="cart-btn">
                                            <i class="bx bx-cart"></i>
                                            कार्ट में जोड़ें
                                        </a>
                                    </div>

                                </div>

                                <div class="product-content">

                                    <div class="product-category">
                                        स्टेशनरी
                                    </div>

                                    <h3>
                                        <a href="{{ url('/product-details/' . encrypt(2)) }}">
                                            कॉपी
                                        </a>
                                    </h3>

                                    <div class="product-rating">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bx-star"></i>
                                        <span>(8)</span>
                                    </div>

                                    <div class="product-price">
                                        <span>₹40</span>
                                    </div>

                                    <div class="product-stock">
                                        <span>उपलब्ध मात्रा:</span>
                                        <strong>50 नग</strong>
                                    </div>

                                </div>

                            </div>
                        </div>


                        <!-- PRODUCT 3 -->
                        <div class="col-lg-4 col-md-6">
                            <div class="product-card">

                                <div class="product-image">

                                    <span class="discount-badge">
                                        -15%
                                    </span>

                                    <button type="button" class="wishlist-btn">
                                        <i class="bx bx-heart"></i>
                                    </button>

                                    <a href="{{ url('/product-details/' . encrypt(1)) }}">
                                        <img src="{{ asset('user_assets/images/product/p2.png') }}" alt="दाल">
                                    </a>

                                    <div class="product-cart">
                                        <a href="#" class="cart-btn">
                                            <i class="bx bx-cart"></i>
                                            कार्ट में जोड़ें
                                        </a>
                                    </div>

                                </div>

                                <div class="product-content">

                                    <div class="product-category">
                                        किराना
                                    </div>

                                    <h3>
                                        <a href="{{ url('/product-details/' . encrypt(3)) }}">
                                            दाल
                                        </a>
                                    </h3>

                                    <div class="product-rating">
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <i class="bx bxs-star"></i>
                                        <span>(18)</span>
                                    </div>

                                    <div class="product-price">
                                        <span>₹120</span>
                                    </div>

                                    <div class="product-stock">
                                        <span>उपलब्ध मात्रा:</span>
                                        <strong>30 किलोग्राम</strong>
                                    </div>


                                </div>

                            </div>
                        </div>




                    </div>


                    <!-- PAGINATION -->
                    <div class="pagination-area text-center mt-30">

                        <a href="#" class="prev page-numbers">
                            <i class="bx bx-chevron-left"></i>
                        </a>

                        <span class="page-numbers current">1</span>

                        <a href="#" class="page-numbers">2</a>

                        <a href="#" class="page-numbers">3</a>

                        <a href="#" class="next page-numbers">
                            <i class="bx bx-chevron-right"></i>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Blog Widget Area End -->
@endsection
