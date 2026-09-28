
@extends('public_layouts.main_layout')

@push('css')
<style>
    .wishlist-area {
        background: #fff;
    }

    .wishlist-box {
        background: #fff;
        border: 1px solid #e8e8e8;
        border-radius: 10px;
        overflow: hidden;
    }

    .wishlist-title-box {
        padding: 20px 25px;
        border-bottom: 1px solid #e8e8e8;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .wishlist-title-box h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 600;
        color: #222;
    }

    .wishlist-title-box p {
        margin: 5px 0 0;
        color: #777;
        font-size: 14px;
    }

    .wishlist-count {
        background: #f5f5f5;
        padding: 7px 14px;
        border-radius: 30px;
        font-size: 13px;
        color: #555;
    }

    .wishlist-table-wrapper {
        overflow-x: auto;
    }

    .wishlist-table {
        width: 100%;
        min-width: 850px;
        border-collapse: collapse;
        margin: 0;
    }

    .wishlist-table thead {
        background: #f8f8f8;
    }

    .wishlist-table thead th {
        padding: 15px 18px;
        font-size: 14px;
        font-weight: 600;
        color: #333;
        border-bottom: 1px solid #e8e8e8;
        white-space: nowrap;
    }

    .wishlist-table tbody td {
        padding: 18px;
        vertical-align: middle;
        border-bottom: 1px solid #eeeeee;
    }

    .wishlist-table tbody tr:last-child td {
        border-bottom: none;
    }

    .wishlist-product {
        display: flex;
        align-items: center;
        gap: 14px;
        min-width: 240px;
    }

    .wishlist-product-image {
        width: 75px;
        height: 75px;
        border-radius: 7px;
        background: #f7f7f7;
        overflow: hidden;
        flex-shrink: 0;
    }

    .wishlist-product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .wishlist-product-info h5 {
        margin: 0 0 5px;
        font-size: 15px;
        font-weight: 600;
        color: #222;
    }

    .wishlist-product-info span {
        font-size: 12px;
        color: #888;
    }

    .wishlist-price {
        font-size: 15px;
        font-weight: 600;
        color: #222;
        white-space: nowrap;
    }

    .wishlist-old-price {
        display: block;
        margin-top: 3px;
        color: #999;
        font-size: 12px;
        text-decoration: line-through;
        font-weight: 400;
    }

    .quantity-box {
        display: flex;
        align-items: center;
        width: 105px;
        height: 38px;
        border: 1px solid #ddd;
        border-radius: 5px;
        overflow: hidden;
    }

    .quantity-btn {
        width: 32px;
        height: 38px;
        border: none;
        background: #f8f8f8;
        color: #333;
        font-size: 17px;
        cursor: pointer;
    }

    .quantity-btn:hover {
        background: #eee;
    }

    .quantity-input {
        width: 41px;
        height: 38px;
        border: none;
        text-align: center;
        font-size: 14px;
        font-weight: 500;
        outline: none;
        background: #fff;
    }

    .wishlist-total {
        font-size: 15px;
        font-weight: 700;
        color: #222;
        white-space: nowrap;
    }

    .add-cart-btn {
        border: none;
        background: #ff4b2b;
        color: #fff;
        padding: 10px 17px;
        border-radius: 5px;
        font-size: 13px;
        font-weight: 500;
        white-space: nowrap;
        transition: all 0.3s ease;
    }

    .add-cart-btn:hover {
        background: #444;
        color: #fff;
    }

    .add-cart-btn i {
        font-size: 17px;
        vertical-align: middle;
        margin-right: 3px;
    }

    .remove-wishlist-btn {
        width: 35px;
        height: 35px;
        border: 1px solid #e5e5e5;
        background: #fff;
        color: #e63946;
        border-radius: 5px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 18px;
        transition: all 0.3s ease;
    }

    .remove-wishlist-btn:hover {
        background: #e63946;
        color: #fff;
        border-color: #e63946;
    }

    .wishlist-footer {
        padding: 20px 25px;
        border-top: 1px solid #e8e8e8;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .continue-shopping {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        color: #333;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
    }

    .continue-shopping:hover {
        color: #000;
    }

    .clear-wishlist-btn {
        border: 1px solid #ddd;
        background: #fff;
        color: #555;
        padding: 9px 16px;
        border-radius: 5px;
        font-size: 13px;
        cursor: pointer;
    }

    .clear-wishlist-btn:hover {
        border-color: #e63946;
        color: #e63946;
    }

    /* Empty Wishlist */
    .empty-wishlist {
        text-align: center;
        padding: 70px 20px;
        border: 1px solid #e8e8e8;
        border-radius: 10px;
    }

    .empty-wishlist-icon {
        width: 75px;
        height: 75px;
        margin: 0 auto 18px;
        border-radius: 50%;
        background: #f8f8f8;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #e63946;
        font-size: 35px;
    }

    .empty-wishlist h4 {
        font-size: 21px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #222;
    }

    .empty-wishlist p {
        color: #777;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .shop-btn {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        padding: 10px 20px;
        background: #222;
        color: #fff;
        border-radius: 5px;
        text-decoration: none;
        font-size: 14px;
    }

    .shop-btn:hover {
        background: #444;
        color: #fff;
    }

    @media (max-width: 767px) {

        .wishlist-title-box {
            padding: 17px;
        }

        .wishlist-title-box h3 {
            font-size: 19px;
        }

        .wishlist-footer {
            padding: 17px;
        }
    }
</style>
@endpush


@section('main_content')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-title text-center">

                <h3>विशलिस्ट</h3>

                <ul>
                    <li>
                        <a href="{{ url('/') }}">होम</a>
                    </li>

                    <li>विशलिस्ट</li>
                </ul>

            </div>
        </div>
    </div>
    <!-- Inner Banner End -->


    <!-- Wishlist Area -->
    <div class="wishlist-area pt-100 pb-70">

        <div class="container">

            <div class="wishlist-box">

                <!-- Header -->
                <div class="wishlist-title-box">

                    <div>
                       

                        <p>
                            आपके पसंदीदा उत्पाद
                        </p>
                    </div>

                    <span class="wishlist-count">
                        3 उत्पाद
                    </span>

                </div>


                <!-- Wishlist Table -->
                <div class="wishlist-table-wrapper">

                    <table class="wishlist-table">

                        <thead>
                            <tr>
                             
                                <th>उत्पाद</th>

                                <th>कीमत</th>

                                <th>मात्रा</th>

                                <th>कुल</th>

                                <th>कार्ट में जोड़ें</th>

                                <th>हटाएं</th>

                            </tr>
                        </thead>


                        <tbody>

                            <!-- Product 1 -->
                            <tr>

                                <td>
                                    <div class="wishlist-product">

                                        <div class="wishlist-product-image">
                                            <img src="{{ asset('user_assets/images/product/product1.jpg') }}"
                                                alt="प्रीमियम वॉल पेंट">
                                        </div>

                                        <div class="wishlist-product-info">

                                            <h5>
                                                प्रीमियम वॉल पेंट
                                            </h5>

                                            <span>
                                                पेंट एवं रंग
                                            </span>

                                        </div>

                                    </div>
                                </td>


                                <td>
                                    <div class="wishlist-price">
                                        ₹549
                                        <span class="wishlist-old-price">
                                            ₹699
                                        </span>
                                    </div>
                                </td>


                                <td>

                                    <div class="quantity-box">

                                        <button type="button"
                                            class="quantity-btn">
                                            −
                                        </button>

                                        <input type="text"
                                            class="quantity-input"
                                            value="1"
                                            readonly>

                                        <button type="button"
                                            class="quantity-btn">
                                            +
                                        </button>

                                    </div>

                                </td>


                                <td>
                                    <div class="wishlist-total">
                                        ₹549
                                    </div>
                                </td>


                                <td>

                                    <button type="button"
                                        class="add-cart-btn">

                                        <i class='bx bx-cart'></i>
                                        कार्ट में जोड़ें

                                    </button>

                                </td>


                                <td>

                                    <button type="button"
                                        class="remove-wishlist-btn"
                                        title="विशलिस्ट से हटाएं">

                                        <i class='bx bx-trash'></i>

                                    </button>

                                </td>

                            </tr>


                            <!-- Product 2 -->
                            <tr>

                                <td>
                                    <div class="wishlist-product">

                                        <div class="wishlist-product-image">
                                            <img src="{{ asset('user_assets/images/product/product2.jpg') }}"
                                                alt="इंटीरियर वॉल कलर">
                                        </div>

                                        <div class="wishlist-product-info">

                                            <h5>
                                                इंटीरियर वॉल कलर
                                            </h5>

                                            <span>
                                                पेंट एवं रंग
                                            </span>

                                        </div>

                                    </div>
                                </td>


                                <td>
                                    <div class="wishlist-price">
                                        ₹699

                                        <span class="wishlist-old-price">
                                            ₹849
                                        </span>
                                    </div>
                                </td>


                                <td>

                                    <div class="quantity-box">

                                        <button type="button"
                                            class="quantity-btn">
                                            −
                                        </button>

                                        <input type="text"
                                            class="quantity-input"
                                            value="1"
                                            readonly>

                                        <button type="button"
                                            class="quantity-btn">
                                            +
                                        </button>

                                    </div>

                                </td>


                                <td>
                                    <div class="wishlist-total">
                                        ₹699
                                    </div>
                                </td>


                                <td>

                                    <button type="button"
                                        class="add-cart-btn">

                                        <i class='bx bx-cart'></i>
                                        कार्ट में जोड़ें

                                    </button>

                                </td>


                                <td>

                                    <button type="button"
                                        class="remove-wishlist-btn"
                                        title="विशलिस्ट से हटाएं">

                                        <i class='bx bx-trash'></i>

                                    </button>

                                </td>

                            </tr>


                            <!-- Product 3 -->
                            <tr>

                                <td>
                                    <div class="wishlist-product">

                                        <div class="wishlist-product-image">
                                            <img src="{{ asset('user_assets/images/product/product3.jpg') }}"
                                                alt="एक्सटीरियर प्रोटेक्शन पेंट">
                                        </div>

                                        <div class="wishlist-product-info">

                                            <h5>
                                                एक्सटीरियर प्रोटेक्शन पेंट
                                            </h5>

                                            <span>
                                                पेंट एवं रंग
                                            </span>

                                        </div>

                                    </div>
                                </td>


                                <td>
                                    <div class="wishlist-price">
                                        ₹899

                                        <span class="wishlist-old-price">
                                            ₹1,099
                                        </span>
                                    </div>
                                </td>


                                <td>

                                    <div class="quantity-box">

                                        <button type="button"
                                            class="quantity-btn">
                                            −
                                        </button>

                                        <input type="text"
                                            class="quantity-input"
                                            value="1"
                                            readonly>

                                        <button type="button"
                                            class="quantity-btn">
                                            +
                                        </button>

                                    </div>

                                </td>


                                <td>
                                    <div class="wishlist-total">
                                        ₹899
                                    </div>
                                </td>


                                <td>

                                    <button type="button"
                                        class="add-cart-btn">

                                        <i class='bx bx-cart'></i>
                                        कार्ट में जोड़ें

                                    </button>

                                </td>


                                <td>

                                    <button type="button"
                                        class="remove-wishlist-btn"
                                        title="विशलिस्ट से हटाएं">

                                        <i class='bx bx-trash'></i>

                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- Footer -->
                <div class="wishlist-footer">

                    <a href="{{ url('/product') }}"
                        class="continue-shopping">

                        <i class='bx bx-left-arrow-alt'></i>
                        खरीदारी जारी रखें

                    </a>

                    <button type="button"
                        class="clear-wishlist-btn">

                        सभी हटाएं

                    </button>

                </div>

            </div>

        </div>

    </div>
    <!-- Wishlist Area End -->

@endsection
