@extends('public_layouts.main_layout')
@push('css')
    <style>
        .cart-area {
            background: #f8f9fa;
        }

        .cart-box {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
        }

        .cart-header {
            padding: 25px 25px 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .cart-header h3 {
            margin: 0 0 5px;
            font-size: 23px;
            font-weight: 700;
        }

        .cart-header p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        .cart-count {
            background: #fff1ec;
            color: #ff4d23;
            padding: 7px 13px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }


        /* Cart Item */

        .cart-item {
            display: grid;
            grid-template-columns: minmax(250px, 1fr) 75px 115px 75px 35px;
            align-items: center;
            gap: 15px;
            padding: 20px 25px;
            border-bottom: 1px solid #eee;
        }

        .cart-product {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .cart-product-image {
            width: 85px;
            height: 85px;
            flex-shrink: 0;
            border: 1px solid #eee;
            border-radius: 6px;
            background: #fafafa;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .cart-product-info h4 {
            margin: 0 0 5px;
            font-size: 16px;
            font-weight: 600;
        }

        .cart-product-info p {
            margin: 0 0 4px;
            color: #777;
            font-size: 13px;
        }

        .cart-product-code {
            font-size: 12px;
            color: #999;
        }


        .cart-price,
        .cart-total {
            font-size: 15px;
            font-weight: 600;
            color: #333;
        }

        .cart-total {
            color: #ff4d23;
        }


        /* Quantity */

        .cart-quantity {
            display: flex;
            align-items: center;
            height: 38px;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .cart-quantity button {
            width: 32px;
            height: 100%;
            border: 0;
            background: #f8f8f8;
            color: #333;
            cursor: pointer;
        }

        .cart-quantity button:hover {
            background: #ff4d23;
            color: #fff;
        }

        .cart-quantity input {
            width: 38px;
            height: 100%;
            border: 0;
            outline: 0;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            background: #fff;
        }


        /* Remove */

        .cart-remove {
            width: 32px;
            height: 32px;
            border: 0;
            background: #fff1f1;
            color: #dc3545;
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .cart-remove:hover {
            background: #dc3545;
            color: #fff;
        }


        /* Footer */

        .cart-footer {
            padding: 20px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .continue-shopping {
            color: #ff4d23;
            font-weight: 600;
            font-size: 14px;
        }

        .continue-shopping i {
            vertical-align: middle;
            font-size: 18px;
        }

        .clear-cart-btn {
            border: 0;
            background: transparent;
            color: #dc3545;
            font-size: 14px;
            cursor: pointer;
        }


        /* =========================
               CART SUMMARY
            ========================= */

        .cart-summary {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 25px;
        }

        .summary-header {
            margin-bottom: 20px;
        }

        .summary-header h3 {
            margin: 0;
            font-size: 21px;
            font-weight: 700;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .summary-row span {
            color: #666;
        }

        .summary-row strong {
            color: #333;
        }

        .summary-row .discount {
            color: #198754;
        }

        .summary-row .free-delivery {
            color: #198754;
            font-size: 13px;
        }

        .summary-divider {
            border-top: 1px solid #eee;
            margin: 20px 0;
        }

        .summary-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .summary-total span {
            font-size: 16px;
            font-weight: 600;
        }

        .summary-total strong {
            font-size: 23px;
            color: #ff4d23;
        }


        /* Coupon */

        .coupon-area {
            margin-bottom: 20px;
        }

        .coupon-area label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .coupon-input {
            display: flex;
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
        }

        .coupon-input input {
            width: 100%;
            border: 0;
            outline: 0;
            padding: 11px 12px;
            font-size: 13px;
        }

        .coupon-input button {
            border: 0;
            background: #333;
            color: #fff;
            padding: 0 15px;
            font-size: 13px;
            cursor: pointer;
        }

        .coupon-input button:hover {
            background: #ff4d23;
        }


        /* Checkout */

        .checkout-btn {
            width: 100%;
            min-height: 50px;
            background: #ff4d23;
            color: #fff !important;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 15px;
            font-weight: 600;
            transition: .3s;
        }

        .checkout-btn:hover {
            background: #222;
            color: #fff !important;
        }

        .checkout-btn i {
            font-size: 20px;
        }


        /* Secure Payment */

        .secure-payment {
            margin-top: 20px;
            padding-top: 18px;
            border-top: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .secure-payment>i {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #eef8f1;
            color: #198754;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .secure-payment strong,
        .secure-payment span {
            display: block;
        }

        .secure-payment strong {
            font-size: 13px;
        }

        .secure-payment span {
            font-size: 11px;
            color: #888;
            margin-top: 2px;
        }


        /* Benefits */

        .cart-benefits {
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }

        .benefit-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .benefit-item:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .benefit-item:first-child {
            padding-top: 0;
        }

        .benefit-icon {
            width: 38px;
            height: 38px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #fff1ec;
            color: #ff4d23;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .benefit-item strong,
        .benefit-item span {
            display: block;
        }

        .benefit-item strong {
            font-size: 13px;
            margin-bottom: 2px;
        }

        .benefit-item span {
            font-size: 11px;
            color: #888;
        }


        /* =========================
               MOBILE
            ========================= */

        @media (max-width: 991px) {

            .cart-item {
                grid-template-columns: 1fr auto;
                gap: 15px;
            }

            .cart-product {
                grid-column: 1 / 3;
            }

            .cart-price {
                grid-column: 1;
            }

            .cart-quantity {
                grid-column: 2;
                grid-row: 2;
            }

            .cart-total {
                grid-column: 1;
                grid-row: 3;
            }

            .cart-remove {
                grid-column: 2;
                grid-row: 3;
                justify-self: end;
            }
        }


        @media (max-width: 575px) {

            .cart-area {
                padding-top: 60px;
            }

            .cart-header {
                padding: 20px;
            }

            .cart-item {
                padding: 18px;
            }

            .cart-product-image {
                width: 70px;
                height: 70px;
            }

            .cart-product-info h4 {
                font-size: 14px;
            }

            .cart-footer {
                padding: 18px;
                gap: 10px;
                flex-wrap: wrap;
            }

            .cart-summary {
                padding: 20px;
            }

            .summary-total strong {
                font-size: 20px;
            }
        }
    </style>
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{ __('word.cart') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{ __('word.home') }}</a>
                    </li>
                    <li> {{ __('word.cart') }}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->


    <!-- Cart Area -->
    <div class="cart-area pt-100 pb-70">
        <div class="container">

            <div class="row g-4">

                <!-- Cart Items -->
                <div class="col-lg-8">

                    <div class="cart-box">

                        <div class="cart-header">
                            <div>
                                <h3> {{ __('word.your_cart') }}</h3>
                                <p>{{ __('word.select') }}</p>
                            </div>

                            <span class="cart-count">
                                3 {{ __('word.product') }}
                            </span>
                        </div>


                        <!-- Cart Item 1 -->
                        <div class="cart-item">

                            <div class="cart-product">

                                <div class="cart-product-image">
                                    <img src="{{ asset('user_assets/images/products/product-1.jpg') }}" alt="प्रीमियम चावल">
                                </div>

                                <div class="cart-product-info">
                                    <h4>{{ __('word.primium') }}</h4>

                                    <p>5 {{ __('word.kg') }}</p>

                                    <span class="cart-product-code">
                                       {{ __('word.code') }} : TK-RICE-001
                                    </span>
                                </div>

                            </div>


                            <div class="cart-price">
                                ₹499
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
                                ₹499
                            </div>


                            <button type="button" class="cart-remove" onclick="removeCartItem(this)" title="हटाएं">
                                <i class='bx bx-trash'></i>
                            </button>

                        </div>


                        <!-- Cart Item 2 -->
                        <div class="cart-item">

                            <div class="cart-product">

                                <div class="cart-product-image">
                                    <img src="{{ asset('user_assets/images/products/product-2.jpg') }}" alt="बासमती चावल">
                                </div>

                                <div class="cart-product-info">
                                    <h4>   {{ __('word.basmati') }}</h4>

                                    <p>5    {{ __('word.kg') }}</p>

                                    <span class="cart-product-code">
                                          {{ __('word.code') }}: TK-RICE-002
                                    </span>
                                </div>

                            </div>


                            <div class="cart-price">
                                ₹599
                            </div>


                            <div class="cart-quantity">

                                <button type="button" onclick="decreaseCartQty(2)">
                                    <i class='bx bx-minus'></i>
                                </button>

                                <input type="text" id="cartQty2" value="1" readonly>

                                <button type="button" onclick="increaseCartQty(2)">
                                    <i class='bx bx-plus'></i>
                                </button>

                            </div>


                            <div class="cart-total">
                                ₹599
                            </div>


                            <button type="button" class="cart-remove" onclick="removeCartItem(this)" title="हटाएं">
                                <i class='bx bx-trash'></i>
                            </button>

                        </div>


                       


                        <!-- Continue Shopping -->
                        <div class="cart-footer">

                            <a href="{{ url('/') }}" class="continue-shopping">
                                <i class='bx bx-left-arrow-alt'></i>
                                {{ __('word.continue') }}
                            </a>

                            <button type="button" class="clear-cart-btn" onclick="clearCart()">
                                <i class='bx bx-trash'></i>
                                {{ __('word.empty') }}
                            </button>

                        </div>

                    </div>

                </div>


                <!-- Cart Summary -->
                <div class="col-lg-4">

                    <div class="cart-summary">

                        <div class="summary-header">
                            <h3> {{ __('word.order') }}</h3>
                        </div>


                        <div class="summary-row">
                            <span> {{ __('word.p_price') }}</span>
                            <strong>₹1,647</strong>
                        </div>


                        <div class="summary-row">
                            <span> {{ __('word.discount') }}</span>
                            <strong class="discount">- ₹150</strong>
                        </div>


                        <div class="summary-row">
                            <span> {{ __('word.d_charge') }}</span>
                            <strong class="free-delivery">
                               {{ __('word.free') }}
                            </strong>
                        </div>


                        <div class="summary-divider"></div>


                        <div class="summary-total">
                            <span> {{ __('word.amount') }}</span>
                            <strong>₹1,497</strong>
                        </div>

                        <!-- Checkout -->
                        <a href="{{ url('/checkout') }}" class="checkout-btn">
                            {{ __('word.p_check') }}
                            <i class='bx bx-right-arrow-alt'></i>
                        </a>

                        <div class="secure-payment">

                            <i class='bx bx-lock-alt'></i>

                            <div>
                                <strong> {{ __('word.secure') }}</strong>
                                <span> {{ __('word.s_complete') }}</span>
                            </div>

                        </div>

                    </div>
                    <!-- Benefits -->
                    <div class="cart-benefits">

                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class='bx bx-package'></i>
                            </div>

                            <div>
                                <strong>  {{ __('word.s_pack') }}</strong>
                                <span> {{ __('word.secorely') }}</span>
                            </div>
                        </div>


                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class='bx bx-truck'></i>
                            </div>

                            <div>
                                <strong>{{ __('word.tej_d') }}</strong>
                                <span>{{ __('word.doorstep') }}</span>
                            </div>
                        </div>


                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <i class='bx bx-check-shield'></i>
                            </div>

                            <div>
                                <strong> {{ __('word.guarantee') }}</strong>
                                <span> {{ __('word.h_quality') }}</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- Cart Area End -->
@endsection
@push('js')
    <script>
        function increaseCartQty(id) {

            let input = document.getElementById('cartQty' + id);

            let qty = parseInt(input.value) || 1;

            qty++;

            input.value = qty;
        }


        function decreaseCartQty(id) {

            let input = document.getElementById('cartQty' + id);

            let qty = parseInt(input.value) || 1;

            if (qty > 1) {
                qty--;
                input.value = qty;
            }
        }


        function removeCartItem(button) {

            const item = button.closest('.cart-item');

            if (item) {
                item.remove();
            }
        }


        function clearCart() {

            const items = document.querySelectorAll('.cart-item');

            items.forEach(function(item) {
                item.remove();
            });
        }
    </script>
@endpush
