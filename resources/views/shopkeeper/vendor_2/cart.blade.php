@extends('shopkeeper.layout_2.main_layouts')

@push('css')
<style>
    .cart-page {
        --ck-accent: #6366F1;
        --ck-accent-soft: #EEF0FF;
        --ck-ink: #1F2430;
        --ck-muted: #6B7280;
        --ck-line: #E5E7EB;
        --ck-surface: #FFFFFF;
        --ck-bg: #F6F7FB;
        --ck-danger: #DC2626;
        background: var(--ck-bg);
    }

    /* ---------- Cart list card ---------- */
    .cart-list {
        background: var(--ck-surface);
        border: 1px solid var(--ck-line);
        border-radius: 16px;
        padding: 32px;
        box-shadow: 0 1px 2px rgba(16, 24, 40, .04);
    }

    .cart-list-head {
        display: flex;
        align-items: baseline;
        justify-content: space-between;
        gap: 12px;
        padding-bottom: 18px;
        border-bottom: 1px solid var(--ck-line);
    }

    .cart-list-head h2 {
        margin: 0;
        font-size: 26px;
        color: var(--ck-ink);
    }

    .cart-list-head span {
        font-size: 14px;
        color: var(--ck-muted);
    }

    .cart-list-sub {
        margin: 12px 0 4px;
        color: var(--ck-muted);
        font-size: 15px;
    }

    /* ---------- Item row ---------- */
    .cart-item-box {
        display: grid;
        grid-template-columns: 88px 1fr auto 90px;
        align-items: center;
        gap: 20px;
        padding: 20px 0;
        border-bottom: 1px solid var(--ck-line);
    }

    .cart-item-box:last-of-type {
        border-bottom: 0;
    }

    .cart-item-thumb {
        width: 88px;
        height: 88px;
        overflow: hidden;
        border-radius: 12px;
        border: 1px solid var(--ck-line);
    }

    .cart-item-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .cart-item-content h3 {
        margin: 0 0 4px;
        font-size: 17px;
        line-height: 1.4;
    }

    .cart-item-content h3 a {
        color: var(--ck-ink);
    }

    .cart-item-content h3 a:hover {
        color: var(--ck-accent);
    }

    .cart-item-price {
        font-size: 14px;
        color: var(--ck-muted);
    }

    .cart-remove {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 10px;
        padding: 0;
        border: 0;
        background: none;
        color: var(--ck-muted);
        font-size: 13px;
        cursor: pointer;
    }

    .cart-remove:hover,
    .cart-remove:focus-visible {
        color: var(--ck-danger);
    }

    /* ---------- Quantity stepper ---------- */
    .cart-quantity {
        display: inline-flex;
        align-items: center;
        border: 1px solid #D1D5DB;
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .cart-quantity button {
        width: 38px;
        height: 40px;
        border: 0;
        background: #fff;
        color: var(--ck-ink);
        font-size: 18px;
        cursor: pointer;
        transition: background .15s;
    }

    .cart-quantity button:hover {
        background: var(--ck-accent-soft);
    }

    .cart-quantity button:focus-visible {
        outline: 2px solid var(--ck-accent);
        outline-offset: -2px;
    }

    .cart-quantity input {
        width: 44px;
        height: 40px;
        text-align: center;
        border: 0;
        border-left: 1px solid var(--ck-line);
        border-right: 1px solid var(--ck-line);
        background: #fff;
        color: var(--ck-ink);
        font-weight: 600;
        padding: 0;
    }

    .cart-item-total {
        text-align: right;
        font-weight: 700;
        font-size: 18px;
        color: var(--ck-ink);
    }

    .cart-list-foot {
        padding-top: 22px;
        border-top: 1px solid var(--ck-line);
    }

    /* ---------- Empty state ---------- */
    .cart-empty {
        display: none;
        text-align: center;
        padding: 50px 10px 30px;
    }

    .cart-empty i {
        font-size: 42px;
        color: #C7C9F5;
        margin-bottom: 16px;
    }

    .cart-empty h3 {
        color: var(--ck-ink);
        margin-bottom: 6px;
    }

    .cart-empty p {
        color: var(--ck-muted);
        margin-bottom: 22px;
    }

    .cart-list.is-empty .cart-empty {
        display: block;
    }

    .cart-list.is-empty .cart-list-foot,
    .cart-list.is-empty .cart-list-sub {
        display: none;
    }

    /* ---------- Summary ---------- */
    .cart-summary {
        background: var(--ck-surface);
        border: 1px solid var(--ck-line);
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(16, 24, 40, .06);
        position: sticky;
        top: 100px;
    }

    .cart-summary h3 {
        margin: 0 0 18px;
        font-size: 22px;
        color: var(--ck-ink);
    }

    .cart-summary-row {
        display: flex;
        justify-content: space-between;
        padding: 8px 0;
        color: var(--ck-muted);
        font-size: 15px;
    }

    .cart-summary-row span:last-child {
        color: var(--ck-ink);
        font-weight: 500;
    }

    .cart-summary-row.cart-summary-total {
        align-items: baseline;
        border-top: 1px dashed #CBD0D8;
        margin-top: 10px;
        padding-top: 18px;
        font-size: 20px;
        font-weight: 700;
        color: var(--ck-ink);
    }

    .cart-summary-row.cart-summary-total span:last-child {
        font-weight: 700;
    }

    .cart-summary .btn-home6 {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        width: 100%;
        text-align: center;
    }

    .cart-summary .btn-home6.is-disabled {
        opacity: .5;
        pointer-events: none;
    }

    .cart-summary-note {
        margin: 16px 0 0;
        font-size: 13px;
        color: var(--ck-muted);
        text-align: center;
    }

    @media (max-width: 991px) {
        .cart-summary {
            position: static;
            margin-top: 30px;
        }
    }

    @media (max-width: 767px) {
        .cart-list,
        .cart-summary {
            padding: 20px;
        }

        .cart-list-head h2 {
            font-size: 22px;
        }

        .cart-item-box {
            grid-template-columns: 72px 1fr;
            gap: 14px 16px;
        }

        .cart-item-thumb {
            width: 72px;
            height: 72px;
        }

        .cart-quantity {
            grid-column: 1 / 2;
            justify-self: start;
        }

        .cart-item-total {
            grid-column: 2 / 3;
            align-self: center;
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

                    <h2>कार्ट</h2>

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
                                कार्ट
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

</div>
<!--===== HERO END =======-->


<!--===== CART START =======-->
<div class="team-details-inner-info sp1 cart-page">

    <div class="container">

        <div class="row">

            <!-- CART ITEMS -->
            <div class="col-xl-8 col-lg-7">

                <div class="cart-list" id="cartList">

                    <div class="cart-list-head">
                        <h2>आपकी कार्ट</h2>
                        <span id="cartCount">3 उत्पाद</span>
                    </div>

                    <p class="cart-list-sub">
                        अपने चुने हुए उत्पादों की जानकारी देखें और ऑर्डर पूरा करें।
                    </p>


                    <!-- PRODUCT 1 -->
                    <div class="cart-item-box" data-price="120">

                        <div class="cart-item-thumb">
                            <img src="{{ asset('vendor_assets/img/products/product6-imgs(1).png') }}"
                                alt="ताज़ी जैविक सब्ज़ियाँ">
                        </div>

                        <div class="cart-item-content">
                            <h3><a href="#">ताज़ी जैविक सब्ज़ियाँ</a></h3>
                            <div class="cart-item-price">₹120 प्रति नग</div>
                            <button type="button" class="cart-remove" data-remove>
                                <i class="fa-solid fa-trash"></i> हटाएँ
                            </button>
                        </div>

                        <div class="cart-quantity">
                            <button type="button" data-step="-1" aria-label="मात्रा घटाएँ">−</button>
                            <input type="text" value="1" readonly aria-label="मात्रा">
                            <button type="button" data-step="1" aria-label="मात्रा बढ़ाएँ">+</button>
                        </div>

                        <div class="cart-item-total" data-line-total>₹120</div>

                    </div>


                    <!-- PRODUCT 2 -->
                    <div class="cart-item-box" data-price="180">

                        <div class="cart-item-thumb">
                            <img src="{{ asset('vendor_assets/img/products/product6-imgs(2).png') }}"
                                alt="मिश्रित जैविक सब्ज़ियाँ">
                        </div>

                        <div class="cart-item-content">
                            <h3><a href="#">मिश्रित जैविक सब्ज़ियाँ</a></h3>
                            <div class="cart-item-price">₹180 प्रति नग</div>
                            <button type="button" class="cart-remove" data-remove>
                                <i class="fa-solid fa-trash"></i> हटाएँ
                            </button>
                        </div>

                        <div class="cart-quantity">
                            <button type="button" data-step="-1" aria-label="मात्रा घटाएँ">−</button>
                            <input type="text" value="1" readonly aria-label="मात्रा">
                            <button type="button" data-step="1" aria-label="मात्रा बढ़ाएँ">+</button>
                        </div>

                        <div class="cart-item-total" data-line-total>₹180</div>

                    </div>


                    <!-- PRODUCT 3 -->
                    <div class="cart-item-box" data-price="140">

                        <div class="cart-item-thumb">
                            <img src="{{ asset('vendor_assets/img/products/product6-imgs(3).png') }}"
                                alt="ताज़े स्थानीय फल एवं सब्ज़ियाँ">
                        </div>

                        <div class="cart-item-content">
                            <h3><a href="#">ताज़े स्थानीय फल एवं सब्ज़ियाँ</a></h3>
                            <div class="cart-item-price">₹140 प्रति नग</div>
                            <button type="button" class="cart-remove" data-remove>
                                <i class="fa-solid fa-trash"></i> हटाएँ
                            </button>
                        </div>

                        <div class="cart-quantity">
                            <button type="button" data-step="-1" aria-label="मात्रा घटाएँ">−</button>
                            <input type="text" value="1" readonly aria-label="मात्रा">
                            <button type="button" data-step="1" aria-label="मात्रा बढ़ाएँ">+</button>
                        </div>

                        <div class="cart-item-total" data-line-total>₹140</div>

                    </div>


                    <!-- EMPTY STATE -->
                    <div class="cart-empty">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <h3>आपकी कार्ट खाली है</h3>
                        <p>ताज़ी सब्ज़ियाँ और फल चुनकर कार्ट में जोड़ें।</p>
                        <a href="{{ url('2/product-2') }}" class="btn-home6">
                            उत्पाद देखें
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>


                    <div class="cart-list-foot">
                        <a href="{{ url('2/product-2') }}" class="btn-home6">
                            खरीदारी जारी रखें
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>

                </div>

            </div>


            <!-- CART SUMMARY -->
            <div class="col-xl-4 col-lg-5">

                <div class="cart-summary">

                    <h3>ऑर्डर सारांश</h3>

                    <div class="cart-summary-row">
                        <span>उत्पाद</span>
                        <span id="sumSubtotal">₹440</span>
                    </div>

                    <div class="cart-summary-row">
                        <span>डिलीवरी शुल्क</span>
                        <span id="sumDelivery">₹40</span>
                    </div>

                    <div class="cart-summary-row">
                        <span>छूट</span>
                        <span id="sumDiscount">₹0</span>
                    </div>

                    <div class="cart-summary-row cart-summary-total">
                        <span>कुल राशि</span>
                        <span id="sumTotal">₹480</span>
                    </div>

                    <div class="space24"></div>

                    <a href="{{ url('2/checkout-2') }}" class="btn-home6" id="checkoutBtn">
                        ऑर्डर करें
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                    <p class="cart-summary-note">डिलीवरी का पता और भुगतान अगले पेज पर चुनें।</p>

                </div>

            </div>

        </div>

    </div>

</div>
<!--===== CART END =======-->

<script>
    (function () {
        var DELIVERY_FEE = 40;
        var DISCOUNT = 0;
        var list = document.getElementById('cartList');

        function money(n) {
            return '₹' + n.toLocaleString('en-IN');
        }

        function recalc() {
            var rows = list.querySelectorAll('.cart-item-box');
            var subtotal = 0;

            rows.forEach(function (row) {
                var qty = parseInt(row.querySelector('.cart-quantity input').value, 10);
                var line = qty * parseInt(row.dataset.price, 10);
                row.querySelector('[data-line-total]').textContent = money(line);
                subtotal += line;
            });

            var empty = rows.length === 0;
            var delivery = empty ? 0 : DELIVERY_FEE;

            list.classList.toggle('is-empty', empty);
            document.getElementById('cartCount').textContent = rows.length + ' उत्पाद';
            document.getElementById('sumSubtotal').textContent = money(subtotal);
            document.getElementById('sumDelivery').textContent = money(delivery);
            document.getElementById('sumDiscount').textContent = money(DISCOUNT);
            document.getElementById('sumTotal').textContent = money(subtotal + delivery - DISCOUNT);
            document.getElementById('checkoutBtn').classList.toggle('is-disabled', empty);
        }

        list.addEventListener('click', function (e) {
            var stepBtn = e.target.closest('[data-step]');
            var removeBtn = e.target.closest('[data-remove]');

            if (stepBtn) {
                var input = stepBtn.parentNode.querySelector('input');
                var next = parseInt(input.value, 10) + parseInt(stepBtn.dataset.step, 10);
                input.value = Math.min(99, Math.max(1, next));
                recalc();
            }

            if (removeBtn) {
                removeBtn.closest('.cart-item-box').remove();
                recalc();
            }
        });

        recalc();
    })();
</script>

@endsection