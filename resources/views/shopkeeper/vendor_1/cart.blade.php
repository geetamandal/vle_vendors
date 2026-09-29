@extends('shopkeeper.layout_1.main_layout')
<style>
    .cart-area {
        padding-top: 70px !important;
        padding-bottom: 70px !important;
    }

    .cart-box {
        background: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
        margin-bottom: 30px;
    }

    .cart-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .cart-header h3 {
        margin: 0;
        font-size: 24px;
        font-weight: 600;
        color: #222;
    }

    .cart-header p {
        margin: 5px 0 0;
        color: #777;
        font-size: 14px;
    }

    .cart-count {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #eef5ff;
        color: #4f78f8;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 600;
    }

    .cart-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 20px 0;
        border-bottom: 1px solid #eee;
    }

    .cart-item:last-child {
        border-bottom: none;
    }

    .cart-product {
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
    }

    .cart-product-image {
        width: 90px;
        height: 90px;
        border-radius: 10px;
        overflow: hidden;
        background: #f7f7f7;
        flex-shrink: 0;
    }

    .cart-product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cart-product-info h5 {
        margin: 0 0 6px;
        font-size: 17px;
        font-weight: 600;
        color: #222;
    }

    .cart-product-info p {
        margin: 0 0 4px;
        font-size: 13px;
        color: #777;
    }

    .cart-product-code {
        font-size: 12px;
        color: #999;
    }

    .cart-price {
        min-width: 90px;
        text-align: center;
    }

    .cart-price span {
        display: block;
        font-size: 13px;
        color: #999;
        margin-bottom: 4px;
    }

    .cart-price strong {
        font-size: 17px;
        color: #222;
    }

    .cart-quantity {
        display: flex;
        align-items: center;
        border: 1px solid #d9e7f5;
        border-radius: 6px;
        overflow: hidden;
        width: 105px;
    }

    .cart-quantity button {
        width: 34px;
        height: 34px;
        border: 0;
        background: #f1f7fd;
        color: #1769aa;
        font-size: 18px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .cart-quantity button:hover {
        background: #1769aa;
        color: #fff;
    }

    .cart-quantity input {
        width: 37px;
        height: 34px;
        border: 0;
        outline: none;
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        color: #333;
        background: #fff;
    }

    .cart-total {
        min-width: 90px;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        color: #1769aa;
    }

    .cart-remove {
        border: 0;
        background: transparent;
        color: #dc3545;
        font-size: 18px;
        cursor: pointer;
        padding: 5px;
        transition: all 0.3s ease;
    }

    .cart-remove:hover {
        color: #b02a37;
        transform: scale(1.08);
    }

    .cart-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
        padding-top: 20px;
        margin-top: 10px;
        border-top: 1px solid #eee;
    }

    .continue-shopping {
        color: #1769aa;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .continue-shopping:hover {
        color: #0d1820;
    }

    .clear-cart-btn {
        border: 1px solid #dc3545;
        background: transparent;
        color: #dc3545;
        padding: 9px 18px;
        border-radius: 6px;
        font-size: 13px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .clear-cart-btn:hover {
        background: #dc3545;
        color: #fff;
    }

    .cart-summary {
        background: #fff;
        border-radius: 12px;
        padding: 30px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
    }

    .cart-summary h4 {
        margin: 0 0 25px;
        font-size: 21px;
        font-weight: 600;
        color: #222;
    }

    .summary-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        font-size: 14px;
        color: #666;
    }

    .summary-row strong {
        color: #222;
        font-weight: 600;
    }

    .discount {
        color: #10161b !important;
        font-weight: 600;
    }

    .free-delivery {
        color: #0c0e0f !important;
        font-weight: 600;
    }

    .summary-total {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-top: 18px;
        margin-top: 12px;
        border-top: 1px solid #eee;
    }

    .summary-total span {
        font-size: 17px;
        font-weight: 600;
        color: #222;
    }

    .summary-total strong {
        font-size: 22px;
        font-weight: 700;
        color: #232628;
    }

    .checkout-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        margin-top: 22px;
        padding: 14px 20px;
        background: #4f78f8;
        color: #fff !important;
        border: none;
        border-radius: 7px;
        font-size: 15px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .checkout-btn:hover {
        background: #0d558d;
        color: #fff !important;
    }

    .secure-payment {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        margin-top: 15px;
        color: #777;
        font-size: 12px;
    }

    .secure-payment>i {
        color: #1769aa;
        font-size: 15px;
    }

    .cart-benefits {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-top: 25px;
    }

    .benefit-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 15px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 3px 15px rgba(0, 0, 0, 0.05);
    }

    .benefit-icon {
        width: 40px;
        height: 40px;
        min-width: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eef5ff;
        color: #1769aa;
        border-radius: 50%;
    }

    .benefit-item h6 {
        margin: 0 0 3px;
        font-size: 13px;
        font-weight: 600;
        color: #333;
    }

    .benefit-item p {
        margin: 0;
        font-size: 11px;
        color: #888;
    }
    .cart-area .btn-primary {
        background: #1769aa !important;
        border-color: #1769aa !important;
        color: #fff !important;
    }

    .cart-area .btn-primary:hover {
        background: #0d558d !important;
        border-color: #0d558d !important;
    }
    @media (max-width: 991px) {

        .cart-area {
            padding-top: 60px !important;
            padding-bottom: 60px !important;
        }

        .cart-box {
            padding: 25px 20px;
        }

        .cart-item {
            flex-wrap: wrap;
        }

        .cart-product {
            width: 100%;
        }

        .cart-price,
        .cart-quantity,
        .cart-total {
            min-width: auto;
        }

        .cart-benefits {
            grid-template-columns: 1fr;
        }
    }


    @media (max-width: 767px) {

        .cart-area {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }

        .cart-box,
        .cart-summary {
            padding: 20px 15px;
        }

        .cart-header {
            align-items: flex-start;
            gap: 10px;
        }

        .cart-header h3 {
            font-size: 20px;
        }

        .cart-count {
            font-size: 11px;
            padding: 6px 10px;
            white-space: nowrap;
        }

        .cart-item {
            gap: 12px;
            padding: 18px 0;
        }

        .cart-product-image {
            width: 70px;
            height: 70px;
        }

        .cart-product-info h5 {
            font-size: 15px;
        }

        .cart-product-info p {
            font-size: 12px;
        }

        .cart-price {
            text-align: left;
        }

        .cart-price strong {
            font-size: 15px;
        }

        .cart-total {
            font-size: 16px;
        }

        .cart-footer {
            flex-direction: column;
            align-items: stretch;
        }

        .continue-shopping {
            text-align: center;
        }

        .clear-cart-btn {
            width: 100%;
        }

        .cart-summary h4 {
            font-size: 19px;
        }

        .summary-total strong {
            font-size: 20px;
        }
    }


    @media (max-width: 480px) {

        .cart-area {
            padding-top: 45px !important;
        }

        .cart-header {
            flex-direction: column;
        }

        .cart-item {
            align-items: flex-start;
        }

        .cart-product {
            width: 100%;
        }

        .cart-price {
            margin-left: 85px;
        }

        .cart-quantity {
            margin-left: 85px;
        }

        .cart-total {
            margin-left: 85px;
        }

        .cart-remove {
            position: absolute;
            right: 15px;
        }

        .cart-box {
            position: relative;
        }
    }
</style>
@section('main_content')
    <!--===== HERO START =======-->
    <div class="vl-hero-inner-area parallaxie"
        style="background-image: url('{{ asset('vendor_assets/img/hero/about-us-inr-herothumb.png') }}'); background-position: center; background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="inner-hero-info">
                        <h2>मेरा कार्ट</h2>
                        <div class="space16"></div>
                        <ul>
                            <li>
                                <a href="{{ url('/1/index-1') }}">होम</a>
                            </li>
                            <li>
                                <img src="{{ asset('vendor_assets/img/icon/arrow-right-inner.html') }}" alt="">
                            </li>
                            <li>
                                <a class="aboutus_titlefix" href="{{ url('/1/cart') }}">मेरा कार्ट</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== HERO END =======-->


    <!-- Cart Area -->
    <div class="cart-area pt-100 pb-70">
        <div class="container">

            <div class="row g-4">

                <!-- Cart Items -->
                <div class="col-lg-8">

                    <div class="cart-box">

                        <!-- Cart Header -->
                        <div class="cart-header">
                            <div>
                                <h3>आपका कार्ट</h3>
                                <p>आपके द्वारा चुने गए ताज़े उत्पाद</p>
                            </div>

                            <span class="cart-count">
                                3 उत्पाद
                            </span>
                        </div>


                        <!-- Cart Item 1 -->
                        <div class="cart-item">

                            <div class="cart-product">

                                <div class="cart-product-image">
                                    <img src="{{ asset('vendor_assets/img/products/product4-img2-shadow.png ') }}" alt="ताज़ा आम">
                                </div>

                                <div class="cart-product-info">
                                    <h4>ताज़ा आम</h4>

                                    <p>1 किलोग्राम</p>

                                    <span class="cart-product-code">
                                        उत्पाद कोड: FR-MANGO-001
                                    </span>
                                </div>

                            </div>
                            <div class="cart-price">
                                ₹120
                            </div>


                            <div class="cart-quantity">

                                <button type="button" onclick="decreaseCartQty(1)">
                                    <i class='bx bx-minus'></i>
                                </button>

                                <input type="text" id="cartQty1" value="1" readonly>

                                <button type="button" onclick="increaseCartQty(1)">
                                    <i class='bx bx-plus'></i>
                                </button>

                            </div>


                            <div class="cart-total">
                                ₹120
                            </div>


                            <button type="button" class="cart-remove" onclick="removeCartItem(this)" title="हटाएं">
                                <i class='bx bx-trash'></i>
                            </button>

                        </div>

                        <!-- Cart Item 3 -->
                        <div class="cart-item">

                            <div class="cart-product">

                                <div class="cart-product-image">
                                    <img src="{{ asset('vendor_assets/img/products/product4-img1-shadow.png') }}" alt="ताज़ा अनानास">
                                </div>

                                <div class="cart-product-info">
                                    <h4>ताज़ा अनानास</h4>

                                    <p>1 नग</p>

                                    <span class="cart-product-code">
                                        उत्पाद कोड: FR-PINE-003
                                    </span>
                                </div>

                            </div>


                            <div class="cart-price">
                                ₹90
                            </div>


                            <div class="cart-quantity">

                                <button type="button" onclick="decreaseCartQty(3)">
                                    <i class='bx bx-minus'></i>
                                </button>

                                <input type="text" id="cartQty3" value="1" readonly>

                                <button type="button" onclick="increaseCartQty(3)">
                                    <i class='bx bx-plus'></i>
                                </button>

                            </div>


                            <div class="cart-total">
                                ₹90
                            </div>


                            <button type="button" class="cart-remove" onclick="removeCartItem(this)" title="हटाएं">
                                <i class='bx bx-trash'></i>
                            </button>

                        </div>


                        <!-- Continue Shopping -->
                        <div class="cart-footer">

                           

                            <button type="button" class="clear-cart-btn" onclick="clearCart()">
                                <i class='bx bx-trash'></i>
                                कार्ट खाली करें
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Cart Summary -->
                <div class="col-lg-4">

                    <div class="cart-summary">

                        <div class="summary-header">
                            <h3>ऑर्डर का सारांश</h3>
                        </div>


                        <div class="summary-row">
                            <span>उत्पादों का मूल्य</span>
                            <strong>₹390</strong>
                        </div>


                        <div class="summary-row">
                            <span>छूट</span>
                            <strong class="discount">- ₹40</strong>
                        </div>


                        <div class="summary-row">
                            <span>डिलीवरी शुल्क</span>
                            <strong class="free-delivery">
                                निःशुल्क
                            </strong>
                        </div>


                        <div class="summary-divider"></div>


                        <div class="summary-total">
                            <span>कुल राशि</span>
                            <strong>₹350</strong>
                        </div>


                        <!-- Checkout -->
                        <a href="{{ url('1/checkout-1') }}" class="checkout-btn">
                            ऑर्डर करने के लिए आगे बढ़ें
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>


                        <!-- Secure Payment -->
                        <div class="secure-payment">

                            <i class='bx bx-lock-alt'></i>

                            <div>
                                <strong>सुरक्षित भुगतान</strong>
                                <span>आपका भुगतान पूरी तरह सुरक्षित है</span>
                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>
    </div>
    <!-- Cart Area End -->
@endsection
