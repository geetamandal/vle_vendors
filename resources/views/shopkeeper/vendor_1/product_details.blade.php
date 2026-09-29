@extends('shopkeeper.layout_1.main_layout')
<style>
     /* =========================================
    PRODUCT DETAILS AREA
========================================= */

.product-details-area {
    padding-top: 70px;
    padding-bottom: 80px;
    background: #f8fbff;
}


/* =========================================
   MAIN PRODUCT BOX
========================================= */

.product-details-box {
    background: #fff;
    padding: 40px;
    border-radius: 14px;
    border: 1px solid #edf1f5;
    box-shadow: 0 6px 28px rgba(0, 0, 0, 0.06);
}


/* =========================================
   PRODUCT IMAGE
========================================= */

.product-details-image {
    display: flex;
    align-items: center;
    justify-content: center;
}

.product-main-image {
    width: 100%;
    min-height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 35px;
    background: #f8fbff;
    border: 1px solid #e7eef5;
    border-radius: 12px;
}

.product-main-image img {
    width: 100%;
    max-width: 420px;
    height: 390px;
    object-fit: contain;
}


/* =========================================
   PRODUCT CONTENT
========================================= */

.product-details-content {
    padding-left: 10px;
}

.product-category {
    display: inline-block;
    margin-bottom: 10px;
    padding: 6px 12px;
    background: #eef5ff;
    color: #1769aa;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
}

.product-details-content h1 {
    margin: 0 0 12px;
    color: #222;
    font-size: 32px;
    font-weight: 700;
}


/* =========================================
   RATING
========================================= */

.product-rating {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
}

.rating-stars {
    display: flex;
    gap: 3px;
}

.rating-stars i {
    color: #f5b301;
    font-size: 14px;
}

.product-rating span {
    color: #777;
    font-size: 13px;
}


/* =========================================
   PRICE
========================================= */

.product-price {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 18px;
}

.product-price strong {
    color: #1769aa;
    font-size: 28px;
    font-weight: 700;
}

.product-price del {
    color: #999;
    font-size: 15px;
}

.product-price span {
    padding: 5px 9px;
    background: #eef5ff;
    color: #1769aa;
    border-radius: 4px;
    font-size: 11px;
    font-weight: 600;
}


/* =========================================
   DESCRIPTION
========================================= */

.product-description {
    margin-bottom: 22px;
    color: #666;
    font-size: 14px;
    line-height: 1.8;
}


/* =========================================
   PRODUCT INFO
========================================= */

.product-info-list {
    border-top: 1px solid #edf1f5;
    border-bottom: 1px solid #edf1f5;
    margin-bottom: 22px;
}

.product-info-list > div {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 11px 0;
    border-bottom: 1px solid #f0f2f5;
}

.product-info-list > div:last-child {
    border-bottom: none;
}

.product-info-list span {
    color: #777;
    font-size: 13px;
}

.product-info-list strong {
    color: #333;
    font-size: 13px;
    font-weight: 600;
}

.product-info-list .available {
    color: #1769aa;
}


/* =========================================
   QUANTITY
========================================= */

.product-quantity-area {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 22px;
}

.product-quantity-area label {
    margin: 0;
    color: #333;
    font-size: 13px;
    font-weight: 600;
}

.product-quantity {
    display: flex;
    align-items: center;
    overflow: hidden;
    border: 1px solid #d9e7f5;
    border-radius: 6px;
}

.product-quantity button {
    width: 35px;
    height: 35px;
    border: none;
    background: #eef5ff;
    color: #1769aa;
    font-size: 19px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-quantity button:hover {
    background: #1769aa;
    color: #fff;
}

.product-quantity input {
    width: 42px;
    height: 35px;
    border: none;
    outline: none;
    text-align: center;
    color: #333;
    font-size: 14px;
    font-weight: 600;
}


/* =========================================
   ACTION BUTTONS
========================================= */

.product-action-buttons {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 25px;
}

.add-cart-btn,
.buy-now-btn {
    min-height: 48px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 12px 22px;
    border-radius: 7px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.3s ease;
}


/* Add Cart */

.add-cart-btn {
    background: #1769aa;
    color: #fff;
    border: 1px solid #1769aa;
}

.add-cart-btn:hover {
    background: #0d558d;
    border-color: #0d558d;
    color: #fff;
}


/* Buy Now */

.buy-now-btn {
    background: #fff;
    color: #1769aa !important;
    border: 1px solid #1769aa;
}

.buy-now-btn:hover {
    background: #1769aa;
    color: #fff !important;
}


/* =========================================
   PRODUCT BENEFITS
========================================= */

.product-benefits {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 18px;
    padding-top: 18px;
    border-top: 1px solid #edf1f5;
}

.product-benefits > div {
    display: flex;
    align-items: center;
    gap: 7px;
}

.product-benefits i {
    color: #1769aa;
    font-size: 18px;
}

.product-benefits span {
    color: #666;
    font-size: 11px;
}


/* =========================================
   DESCRIPTION BOX
========================================= */

.product-description-box {
    margin-top: 30px;
    padding: 30px;
    background: #fff;
    border: 1px solid #edf1f5;
    border-radius: 12px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
}

.description-heading {
    padding-bottom: 15px;
    margin-bottom: 18px;
    border-bottom: 1px solid #edf1f5;
}

.description-heading h3 {
    margin: 0;
    color: #222;
    font-size: 20px;
    font-weight: 600;
}

.description-content p {
    margin: 0 0 12px;
    color: #666;
    font-size: 14px;
    line-height: 1.8;
}

.description-content p:last-child {
    margin-bottom: 0;
}


/* =========================================
   TABLET
========================================= */

@media (max-width: 991px) {

    .product-details-area {
        padding-top: 60px;
        padding-bottom: 65px;
    }

    .product-details-box {
        padding: 30px;
    }

    .product-details-content {
        padding-left: 0;
    }

    .product-main-image {
        min-height: 380px;
    }

    .product-main-image img {
        height: 320px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 767px) {

    .product-details-area {
        padding-top: 50px;
        padding-bottom: 55px;
    }

    .product-details-box {
        padding: 20px 15px;
        border-radius: 10px;
    }

    .product-main-image {
        min-height: 300px;
        padding: 20px;
    }

    .product-main-image img {
        height: 270px;
    }

    .product-details-content h1 {
        font-size: 25px;
    }

    .product-price strong {
        font-size: 25px;
    }

    .product-action-buttons {
        flex-direction: column;
        width: 100%;
    }

    .add-cart-btn,
    .buy-now-btn {
        width: 100%;
    }

    .product-benefits {
        gap: 12px;
    }

    .product-description-box {
        padding: 20px 15px;
    }

}


/* =========================================
   SMALL MOBILE
========================================= */

@media (max-width: 480px) {

    .product-main-image {
        min-height: 260px;
    }

    .product-main-image img {
        height: 230px;
    }

    .product-details-content h1 {
        font-size: 22px;
    }

    .product-rating {
        flex-wrap: wrap;
    }

    .product-info-list > div {
        gap: 10px;
    }

    .product-benefits {
        flex-direction: column;
        align-items: flex-start;
    }

}
</style>

@section('main_content')

    <!--===== HERO START =======-->
    <div class="vl-hero-inner-area parallaxie"
        style="background-image: url(img/hero/about-us-inr-herothumb.png); background-position: center; background-size: cover; background-repeat: no-repeat;">

        <div class="container">
            <div class="row">
                <div class="col-xl-6">

                    <div class="inner-hero-info">

                        <h2>उत्पाद विवरण</h2>

                        <div class="space16"></div>

                        <ul>
                            <li>
                                <a href="{{ url('/1/index-1') }}">
                                    होम
                                </a>
                            </li>

                            <li>
                                <img src="{{ asset('vendor_assets/img/icon/arrow-right-inner.html') }}"
                                    alt="">
                            </li>

                            <li>
                                <a class="aboutus_titlefix"
                                    href="{{ url('/1/product-details') }}">
                                    उत्पाद विवरण
                                </a>
                            </li>
                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--===== HERO END =======-->


    <!--===== PRODUCT DETAILS START =======-->

    <section class="product-details-area">

        <div class="container">

            <div class="product-details-box">

                <div class="row align-items-center g-5">

                    <!-- Product Image -->
                    <div class="col-lg-6">

                        <div class="product-details-image">

                            <div class="product-main-image">

                                <img src="{{ asset('vendor_assets/img/products/product4-img1.png') }}"
                                    alt="जैविक अनानास">

                            </div>

                        </div>

                    </div>


                    <!-- Product Information -->
                    <div class="col-lg-6">

                        <div class="product-details-content">

                            <span class="product-category">
                                ताज़े फल
                            </span>

                            <h1>
                                जैविक अनानास
                            </h1>

                            <!-- Rating -->
                            <div class="product-rating">

                                <div class="rating-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>

                                <span>
                                    4.8 (24 समीक्षाएँ)
                                </span>

                            </div>


                            <!-- Price -->
                            <div class="product-price">

                                <strong>₹120</strong>

                                <del>₹150</del>

                                <span>20% बचत</span>

                            </div>


                            <!-- Description -->
                            <p class="product-description">
                                ताज़ा और प्राकृतिक जैविक अनानास, सीधे स्थानीय विक्रेता
                                से प्राप्त किया गया। स्वादिष्ट, रसीला और आपकी रोज़मर्रा
                                की जरूरतों के लिए बिल्कुल उपयुक्त।
                            </p>


                            <!-- Product Info -->
                            <div class="product-info-list">

                                <div>
                                    <span>उत्पाद कोड</span>
                                    <strong>FR-PINE-003</strong>
                                </div>

                                <div>
                                    <span>उपलब्धता</span>
                                    <strong class="available">
                                        उपलब्ध
                                    </strong>
                                </div>

                                <div>
                                    <span>मात्रा</span>
                                    <strong>1 नग</strong>
                                </div>

                            </div>


                            <!-- Quantity -->
                            <div class="product-quantity-area">

                                <label>
                                    मात्रा
                                </label>

                                <div class="product-quantity">

                                    <button type="button"
                                        onclick="decreaseProductQty()">
                                        −
                                    </button>

                                    <input type="text"
                                        id="productQty"
                                        value="1"
                                        readonly>

                                    <button type="button"
                                        onclick="increaseProductQty()">
                                        +
                                    </button>

                                </div>

                            </div>


                            <!-- Buttons -->
                            <div class="product-action-buttons">

                                <button type="button"
                                    class="add-cart-btn"
                                    onclick="addProductToCart()">

                                    <i class='bx bx-cart'></i>

                                    कार्ट में जोड़ें

                                </button>


                                <a href="{{ url('/1/checkout-1') }}"
                                    class="buy-now-btn">

                                    अभी खरीदें

                                    <i class='bx bx-right-arrow-alt'></i>

                                </a>

                            </div>


                            <!-- Benefits -->
                            <div class="product-benefits">

                                <div>
                                    <i class='bx bx-check-shield'></i>
                                    <span>सुरक्षित खरीदारी</span>
                                </div>

                                <div>
                                    <i class='bx bx-package'></i>
                                    <span>तेज़ डिलीवरी</span>
                                </div>

                                <div>
                                    <i class='bx bx-leaf'></i>
                                    <span>ताज़ा उत्पाद</span>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!--===== PRODUCT DESCRIPTION =====-->

            <div class="product-description-box">

                <div class="description-heading">

                    <h3>उत्पाद के बारे में</h3>

                </div>

                <div class="description-content">

                    <p>
                        हमारा जैविक अनानास स्थानीय विक्रेता से प्राप्त किया जाता है
                        और गुणवत्ता एवं ताज़गी का विशेष ध्यान रखा जाता है।
                        यह प्राकृतिक रूप से स्वादिष्ट और रसीला होता है।
                    </p>

                    <p>
                        उत्पाद की पैकिंग इस प्रकार की जाती है कि आपको ताज़ा और
                        अच्छी गुणवत्ता वाला उत्पाद प्राप्त हो।
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!--===== PRODUCT DETAILS END =======-->


    <script>
        function increaseProductQty() {

            let input = document.getElementById('productQty');

            let qty = parseInt(input.value) || 1;

            if (qty < 10) {
                qty++;
            }

            input.value = qty;
        }


        function decreaseProductQty() {

            let input = document.getElementById('productQty');

            let qty = parseInt(input.value) || 1;

            if (qty > 1) {
                qty--;
            }

            input.value = qty;
        }


        function addProductToCart() {

            let qty = document.getElementById('productQty').value;

            Swal.fire({
                icon: 'success',
                title: 'कार्ट में जोड़ दिया गया!',
                text: qty + ' नग जैविक अनानास आपके कार्ट में जोड़ दिया गया है।',
                confirmButtonText: 'ठीक है',
                confirmButtonColor: '#1769aa'
            });

        }
    </script>

@endsection