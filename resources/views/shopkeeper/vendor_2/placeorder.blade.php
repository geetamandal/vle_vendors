@extends('shopkeeper.layout_2.main_layouts')

@push('css')
<style>
    .order-success-box {
        max-width: 750px;
        margin: 0 auto;
        background: #fff;
        padding: 45px 35px;
        border-radius: 15px;
        text-align: center;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
    }

    .order-success-icon {
        width: 80px;
        height: 80px;
        margin: 0 auto 25px;
        border-radius: 50%;
        background: #eaf7ef;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #198754;
        font-size: 38px;
    }

    .order-success-box h2 {
        margin-bottom: 12px;
    }

    .order-success-box p {
        margin-bottom: 8px;
        color: #666;
    }

    .order-number {
        margin: 25px 0;
        padding: 15px;
        background: #f7f7f7;
        border-radius: 8px;
        font-weight: 600;
    }

    .order-details {
        text-align: left;
        margin-top: 30px;
        border-top: 1px solid #ddd;
        padding-top: 25px;
    }

    .order-detail-row {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #eee;
    }

    .order-detail-row:last-child {
        border-bottom: 0;
    }

    .order-actions {
        margin-top: 30px;
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    @media (max-width: 575px) {
        .order-success-box {
            padding: 30px 20px;
        }

        .order-detail-row {
            gap: 15px;
        }
    }
</style>
@endpush

@section('main_content')

<!--===== HERO START =======-->
<div class="vl-hero-inner-area parallaxie"
    style="background-image:url(assets/img/hero/about-us-inr-herothumb.png)">

    <div class="container">
        <div class="row">

            <div class="col-xl-6">
                <div class="inner-hero-info">

                    <h2>ऑर्डर सफल</h2>

                    <div class="space16"></div>

                    <ul>
                        <li>
                            <a href="{{ url('/2/index-2') }}">होम</a>
                        </li>

                        <li>
                            <img src="assets/img/icon/arrow-right-inner.html" alt="">
                        </li>

                        <li>
                            <a class="aboutus_titlefix" href="#">
                                ऑर्डर सफल
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</div>
<!--===== HERO END =======-->


<!--===== ORDER SUCCESS START =======-->
<div class="vl-contact-inr-area sp1">

    <div class="container">

        <div class="order-success-box">

            <div class="order-success-icon">
                <i class="fa-solid fa-check"></i>
            </div>

            <h2>ऑर्डर सफलतापूर्वक प्लेस हो गया!</h2>

            <p>
                आपका ऑर्डर सफलतापूर्वक प्राप्त हो गया है।
            </p>

            <p>
                आपके ऑर्डर की जानकारी जल्द ही उपलब्ध कराई जाएगी।
            </p>

            <div class="order-number">
                ऑर्डर नंबर: #ORD-20260928
            </div>

            <div class="order-details">

                <div class="order-detail-row">
                    <span>उत्पाद राशि</span>
                    <strong>₹440</strong>
                </div>

                <div class="order-detail-row">
                    <span>डिलीवरी शुल्क</span>
                    <strong>₹40</strong>
                </div>

                <div class="order-detail-row">
                    <span>भुगतान का तरीका</span>
                    <strong>कैश ऑन डिलीवरी</strong>
                </div>

                <div class="order-detail-row">
                    <span>कुल राशि</span>
                    <strong>₹480</strong>
                </div>

            </div>

            <div class="order-actions">

                <a href="{{ url('2/product-2') }}" class="btn-home6">
                    खरीदारी जारी रखें
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="{{ url('/2/index-2') }}" class="btn-home6">
                    होम पर जाएँ
                    <i class="fa-solid fa-house"></i>
                </a>

            </div>

        </div>

    </div>

</div>
<!--===== ORDER SUCCESS END =======-->

@endsection