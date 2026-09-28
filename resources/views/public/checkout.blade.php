@extends('public_layouts.main_layout')
@push('css')
   <style>
.checkout-area {
    background: #fafafa;
}

.checkout-box,
.checkout-summary,
.checkout-benefits {
    background: #fff;
    border: 1px solid #e8e8e8;
    border-radius: 8px;
}

.checkout-box {
    padding: 28px;
}

.checkout-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eeeeee;
}

.checkout-header h3 {
    font-size: 21px;
    margin-bottom: 5px;
    color: #172b4d;
}

.checkout-header p {
    margin: 0;
    font-size: 13px;
    color: #777;
}

.checkout-step {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: #ff4b2b;
    font-weight: 600;
}

.checkout-step span {
    width: 30px;
    height: 30px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #ff4b2b;
    color: #fff;
    font-size: 13px;
}

.checkout-section {
    margin-bottom: 28px;
}

.checkout-section h5,
.payment-section h5,
.different-address-box h5 {
    font-size: 16px;
    color: #172b4d;
    margin-bottom: 18px;
    font-weight: 600;
}

.checkout-section h5 i,
.different-address-box h5 i {
    color: #ff4b2b;
    margin-right: 7px;
    vertical-align: middle;
}

.checkout-section label,
.coupon-box label {
    display: block;
    font-size: 13px;
    font-weight: 600;
    color: #333;
    margin-bottom: 7px;
}

.checkout-section label span {
    color: #ff4b2b;
}

.checkout-section .form-control,
.checkout-section .form-select {
    height: 46px;
    border: 1px solid #e1e1e1;
    border-radius: 4px;
    background: #fafafa;
    padding: 0 14px;
    font-size: 13px;
    box-shadow: none;
}

.checkout-section textarea.form-control {
    height: auto;
    padding: 12px 14px;
    resize: none;
}

.checkout-section .form-control:focus,
.checkout-section .form-select:focus {
    border-color: #ff4b2b;
    background: #fff;
    box-shadow: none;
}

.text-danger {
    font-size: 11px;
    display: block;
    margin-top: 4px;
}

.different-address {
    margin-top: 5px;
    padding-top: 18px;
    border-top: 1px solid #eeeeee;
}

.custom-check {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    color: #555;
    cursor: pointer;
}

.custom-check input {
    accent-color: #ff4b2b;
}

.different-address-box {
    display: none;
    margin-top: 20px;
    padding: 18px;
    background: #fafafa;
    border: 1px solid #eeeeee;
    border-radius: 5px;
}

.different-address-box textarea {
    width: 100%;
    border: 1px solid #ddd;
    padding: 12px;
    font-size: 13px;
    resize: none;
}

.checkout-summary {
    padding: 22px;
}

.summary-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 17px;
    border-bottom: 1px solid #eeeeee;
}

.summary-header h3 {
    margin: 0;
    font-size: 19px;
    color: #172b4d;
}

.summary-header span {
    font-size: 12px;
    color: #777;
    background: #f5f5f5;
    padding: 5px 9px;
    border-radius: 3px;
}
.summary-product {
    display: flex;
    gap: 12px;
    padding: 15px 0;
    border-bottom: 1px solid #f0f0f0;
}

.summary-product-image {
    width: 58px;
    height: 58px;
    flex: 0 0 58px;
    border-radius: 5px;
    overflow: hidden;
    border: 1px solid #eeeeee;
}

.summary-product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.summary-product-info {
    flex: 1;
    position: relative;
    padding-right: 5px;
}

.summary-product-info h5 {
    font-size: 13px;
    color: #333;
    margin: 2px 0 4px;
    font-weight: 600;
}

.summary-product-info span {
    display: block;
    color: #888;
    font-size: 11px;
}

.summary-product-info strong {
    display: block;
    font-size: 13px;
    color: #222;
    margin-top: 5px;
}
.coupon-box {
    padding: 17px 0;
}

.coupon-input {
    display: flex;
}

.coupon-input input {
    height: 40px;
    flex: 1;
    min-width: 0;
    border: 1px solid #ddd;
    border-right: 0;
    padding: 0 11px;
    font-size: 12px;
    outline: none;
}

.coupon-input button {
    border: 0;
    background: #ff4b2b;
    color: #fff;
    padding: 0 15px;
    font-size: 12px;
    font-weight: 600;
}

.summary-divider {
    height: 1px;
    background: #eeeeee;
    margin: 15px 0;
}

.summary-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 12px;
}

.summary-row span {
    color: #666;
    font-size: 13px;
}

.summary-row strong {
    color: #333;
    font-size: 13px;
}

.summary-row .discount {
    color: #2e9b5f;
}

.free-delivery {
    color: #2e9b5f !important;
}

.summary-total {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.summary-total span {
    color: #222;
    font-size: 15px;
    font-weight: 600;
}

.summary-total strong {
    color: #ff4b2b;
    font-size: 20px;
}
.payment-section {
    margin-top: 25px;
}

.payment-option {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px;
    border: 1px solid #e5e5e5;
    border-radius: 5px;
    margin-bottom: 10px;
    cursor: pointer;
    transition: .2s;
}

.payment-option:hover,
.payment-option.active {
    border-color: #ff4b2b;
    background: #fff8f6;
}

.payment-option input {
    display: none;
}

.payment-radio {
    width: 16px;
    height: 16px;
    border: 1px solid #bbb;
    border-radius: 50%;
    position: relative;
    flex: 0 0 16px;
}

.payment-option input:checked + .payment-radio {
    border-color: #ff4b2b;
}

.payment-option input:checked + .payment-radio::after {
    content: "";
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #ff4b2b;
    left: 3px;
    top: 3px;
}

.payment-option strong {
    display: block;
    font-size: 12px;
    color: #333;
}

.payment-option small {
    display: block;
    color: #888;
    font-size: 10px;
    margin-top: 2px;
}
.place-order-btn {
    width: 100%;
    height: 46px;
    border: 0;
    border-radius: 4px;
    background: #ff4b2b;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    margin-top: 10px;
    transition: .2s;
}

.place-order-btn:hover {
    background: #e94326;
}

.place-order-btn i {
    margin-left: 5px;
    vertical-align: middle;
}

.secure-checkout {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 17px;
    padding-top: 15px;
    border-top: 1px solid #eeeeee;
}

.secure-checkout > i {
    font-size: 25px;
    color: #2e9b5f;
}

.secure-checkout strong {
    display: block;
    font-size: 12px;
    color: #333;
}

.secure-checkout span {
    display: block;
    font-size: 10px;
    color: #888;
    margin-top: 2px;
}

.checkout-benefits {
    margin-top: 15px;
    padding: 8px 18px;
}

.checkout-benefit {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 13px 0;
    border-bottom: 1px solid #eeeeee;
}

.checkout-benefit:last-child {
    border-bottom: 0;
}

.checkout-benefit > i {
    font-size: 25px;
    color: #ff4b2b;
}

.checkout-benefit strong {
    display: block;
    font-size: 12px;
    color: #333;
}

.checkout-benefit span {
    display: block;
    font-size: 10px;
    color: #888;
    margin-top: 2px;
}

@media (max-width: 767px) {

    .checkout-box {
        padding: 18px;
    }
    .checkout-header {
        align-items: flex-start;
    }
    .checkout-header h3 {
        font-size: 18px;
    }
    .checkout-step {
        font-size: 11px;
    }
    .checkout-summary {
        padding: 18px;
    }

}
   </style>
@endpush
@section('main_content')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-title text-center">
                <h3>चेकआउट</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">होम</a>
                    </li>
                    <li>चेकआउट</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->
    <div class="checkout-area pt-100 pb-70">
        <div class="container">

            <div class="row g-4">

                <!-- Billing Details -->
                <div class="col-lg-8">

                    <div class="checkout-box">

                        <div class="checkout-header">
                            <div>
                                <h3>बिलिंग विवरण</h3>
                                <p>अपना डिलीवरी पता और संपर्क जानकारी दर्ज करें</p>
                            </div>

                            <div class="checkout-step">
                                <span>1</span>
                                विवरण
                            </div>
                        </div>
                        <form id="checkoutForm">

                            <!-- Personal Details -->
                            <div class="checkout-section">

                                <h5>
                                    <i class='bx bx-user'></i>
                                    व्यक्तिगत जानकारी
                                </h5>

                                <div class="row g-3">

                                    <!-- First Name -->
                                    <div class="col-md-6">
                                        <label>
                                             नाम <span>*</span>
                                        </label>

                                        <input type="text"
                                            name="first_name"
                                            class="form-control"
                                            placeholder="अपना पहला नाम दर्ज करें">

                                        <small class="text-danger error-first_name"></small>
                                    </div>
                                    <!-- Mobile -->
                                    <div class="col-md-6">
                                        <label>
                                            मोबाइल नंबर <span>*</span>
                                        </label>

                                        <input type="text"
                                            name="mobile"
                                            maxlength="10"
                                            class="form-control"
                                            placeholder="10 अंकों का मोबाइल नंबर">

                                        <small class="text-danger error-mobile"></small>
                                    </div>


                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label>
                                            ईमेल पता
                                        </label>

                                        <input type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="अपना ईमेल पता दर्ज करें">

                                        <small class="text-danger error-email"></small>
                                    </div>

                                </div>

                            </div>
                            <!-- Address Details -->
                            <div class="checkout-section">

                                <h5>
                                    <i class='bx bx-map'></i>
                                    डिलीवरी पता
                                </h5>

                                <div class="row g-3">

                                    <!-- Address -->
                                    <div class="col-12">
                                        <label>
                                            पूरा पता <span>*</span>
                                        </label>

                                        <input type="text"
                                            name="address"
                                            class="form-control"
                                            placeholder="मकान नंबर, गली, मोहल्ला आदि">

                                        <small class="text-danger error-address"></small>
                                    </div>
                                    <!-- City -->
                                    <div class="col-md-6">
                                        <label>
                                            शहर <span>*</span>
                                        </label>

                                        <input type="text"
                                            name="city"
                                            class="form-control"
                                            placeholder="शहर का नाम">

                                        <small class="text-danger error-city"></small>
                                    </div>
                                    <!-- State -->
                                    <div class="col-md-6">
                                        <label>
                                            राज्य <span>*</span>
                                        </label>

                                        <select name="state" class="form-select">
                                            <option value="">राज्य चुनें</option>
                                            <option value="छत्तीसगढ़">छत्तीसगढ़</option>
                                            <option value="मध्य प्रदेश">मध्य प्रदेश</option>
                                            <option value="महाराष्ट्र">महाराष्ट्र</option>
                                            <option value="ओडिशा">ओडिशा</option>
                                            <option value="उत्तर प्रदेश">उत्तर प्रदेश</option>
                                            <option value="अन्य">अन्य</option>
                                        </select>

                                        <small class="text-danger error-state"></small>
                                    </div>
                                    <!-- Pincode -->
                                    <div class="col-md-6">
                                        <label>
                                            पिन कोड <span>*</span>
                                        </label>

                                        <input type="text"
                                            name="pincode"
                                            maxlength="6"
                                            class="form-control"
                                            placeholder="6 अंकों का पिन कोड">

                                        <small class="text-danger error-pincode"></small>
                                    </div>
                                    <!-- Landmark -->
                                    <div class="col-md-6">
                                        <label>
                                            नज़दीकी स्थान
                                        </label>

                                        <input type="text"
                                            name="landmark"
                                            class="form-control"
                                            placeholder="नज़दीकी स्थान / लैंडमार्क">

                                    </div>

                                </div>

                            </div>
                            <!-- Additional Note -->
                            <div class="checkout-section">

                                <h5>
                                    <i class='bx bx-note'></i>
                                    अतिरिक्त जानकारी
                                </h5>

                                <label>
                                    ऑर्डर संबंधी जानकारी
                                </label>

                                <textarea name="note"
                                    class="form-control"
                                    rows="4"
                                    placeholder="डिलीवरी से संबंधित कोई विशेष निर्देश हो तो यहां लिखें..."></textarea>

                            </div>
                            <!-- Different Address -->
                            <div class="different-address">

                                <label class="custom-check">
                                    <input type="checkbox" id="differentAddress">

                                    <span class="checkmark"></span>

                                    बिलिंग पते से अलग डिलीवरी पता देना है
                                </label>

                            </div>
                            <!-- Delivery Address -->
                            <div class="different-address-box" id="differentAddressBox">

                                <h5>
                                    <i class='bx bx-home'></i>
                                    वैकल्पिक डिलीवरी पता
                                </h5>

                                <textarea class="form-control"
                                    name="delivery_address"
                                    rows="3"
                                    placeholder="पूरा डिलीवरी पता दर्ज करें"></textarea>

                            </div>

                        </form>

                    </div>

                </div>
                <!-- Order Summary -->
                <div class="col-lg-4">

                    <div class="checkout-summary">

                   
                        <div class="summary-row">
                            <span>उत्पाद मूल्य</span>
                            <strong>₹1,647</strong>
                        </div>


                        <div class="summary-row">
                            <span>डिस्काउंट</span>
                            <strong class="discount">- ₹150</strong>
                        </div>


                        <div class="summary-row">
                            <span>डिलीवरी शुल्क</span>
                            <strong class="free-delivery">निःशुल्क</strong>
                        </div>


                        <div class="summary-divider"></div>


                        <div class="summary-total">
                            <span>कुल राशि</span>
                            <strong>₹1,497</strong>
                        </div>


                        <!-- Payment -->
                        <div class="payment-section">

                            <h4>भुगतान का तरीका</h4>

                            <label class="payment-option active">

                                <input type="radio"
                                    name="payment_method"
                                    value="cod"
                                    checked>

                                <span class="payment-radio"></span>

                                <div>
                                    <strong>कैश ऑन डिलीवरी</strong>
                                    <small>डिलीवरी के समय भुगतान करें</small>
                                </div>
                            </label>
                        </div>
                        <!-- Place Order -->
                        <button type="button"
                            class="place-order-btn"
                            onclick="placeOrder()">

                            ऑर्डर प्लेस करें
                            <i class='bx bx-right-arrow-alt'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
   function placeOrder() {

    // Clear cart
    localStorage.removeItem('cart');
    localStorage.removeItem('cartItems');
    sessionStorage.removeItem('cart');
    sessionStorage.removeItem('cartItems');

    // Success Message
    Swal.fire({
        icon: 'success',
        title: 'ऑर्डर सफलतापूर्वक प्लेस हो गया!',
        text: 'आपका ऑर्डर सफलतापूर्वक दर्ज हो गया है।',
        confirmButtonText: 'ठीक है',
        confirmButtonColor: '#ff4b2b',
        allowOutsideClick: false
    }).then(() => {

        // Redirect to Home
        window.location.href = "{{ url('/') }}";

    });
}
   </script>
@endpush