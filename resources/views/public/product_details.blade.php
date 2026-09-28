@extends('public_layouts.main_layout')
@push('css')
   <style>
.product-details-image{padding-right:25px}
.product-main-image{width:100%;height:430px;background:#fff;border:1px solid #eee;display:flex;align-items:center;justify-content:center;padding:25px;margin-bottom:20px}
.product-main-image img,.product-thumbnail img,.related-product-image img{width:100%;height:100%;object-fit:contain}

.product-thumbnail-list{display:flex;gap:15px}
.product-thumbnail{width:85px;height:85px;padding:8px;border:1px solid #eee;cursor:pointer;background:#fff}
.product-thumbnail.active{border-color:#ff4d23}

.product-details-content h2{font-size:30px;margin-bottom:12px}
.product-rating{margin-bottom:15px}
.product-rating i,.related-rating i,.review-stars i{color:#ffb400;font-size:16px}
.product-rating span{color:#777;font-size:13px;margin-left:8px}
.product-price{margin-bottom:20px}
.current-price{font-size:25px;font-weight:700;color:#ff4d23}
.old-price{font-size:15px;color:#999;text-decoration:line-through;margin-left:10px}

.product-short-description{border-top:1px solid #eee;border-bottom:1px solid #eee;padding:20px 0;margin-bottom:20px}
.product-short-description p{margin:0;line-height:1.8;color:#666}
.product-availability{margin-bottom:20px}
.in-stock{color:#198754;margin-left:8px}

.product-cart-area{display:flex;align-items:center;gap:15px;margin-bottom:15px}
.quantity-box{display:flex;height:45px;border:1px solid #ddd}
.quantity-box button{width:40px;border:0;background:#f8f8f8;font-size:18px}
.quantity-box input{width:45px;border:0;text-align:center;outline:0}
.product-cart-area .default-btn{border:0}

.product-meta{border-top:1px solid #eee;padding-top:18px}
.product-meta p{margin-bottom:8px;font-size:14px}
.product-share{display:flex;align-items:center;gap:8px;margin-top:18px}
.product-share span{font-weight:600;margin-right:5px}
.product-share a{width:30px;height:30px;border:1px solid #eee;display:flex;align-items:center;justify-content:center;color:#555;border-radius:50%}

.product-description-area{border:1px solid #eee}
.product-tab-list{display:flex;border-bottom:1px solid #eee}
.product-tab-btn{padding:15px 30px;border:0;background:#fff;font-weight:600;cursor:pointer}
.product-tab-btn.active{background:#ff4d23;color:#fff}
.product-tab-content{display:none;padding:25px 30px}
.product-tab-content.active{display:block}
.product-tab-content h4{margin-bottom:15px}
.product-tab-content p{color:#666;line-height:1.8}
.product-tab-content ul{padding-left:20px}
.product-tab-content li{margin-bottom:8px}

.product-review-item{border-bottom:1px solid #eee;padding:15px 0}
.review-user{display:flex;align-items:center;gap:12px;margin-bottom:10px}
.review-user h5{margin-bottom:3px}
.review-avatar{width:45px;height:45px;border-radius:50%;background:#ff4d23;color:#fff;display:flex;align-items:center;justify-content:center;font-weight:600}
.product-review-item p{margin-bottom:0}

.related-product-area .section-title{margin-bottom:30px}
.related-product-area .section-title span{color:#ff4d23;font-size:12px}
.related-product-area .section-title h2{font-size:25px}
.related-product-card{border:1px solid #eee;background:#fff;transition:.3s;margin-bottom:30px}
.related-product-card:hover{transform:translateY(-4px)}
.related-product-image{height:220px;background:#fafafa;padding:20px}
.related-product-content{padding:18px;text-align:center}
.related-product-content h3{font-size:17px;margin-bottom:8px}
.related-product-content h3 a{color:#222}
.related-rating{margin-bottom:8px}
.related-price{color:#ff4d23;font-weight:600}
.related-price del{color:#999;font-size:13px;margin-left:5px}

@media(max-width:767px){
.product-details-image{padding-right:0;margin-bottom:30px}
.product-main-image{height:350px}
.product-details-content h2{font-size:24px}
.product-cart-area{flex-wrap:wrap}
.product-description-area{margin-top:35px}
}
</style>
@endpush
@section('main_content')
    <!-- Inner Banner -->
    <div class="inner-banner inner-bg3">
        <div class="container">
            <div class="inner-title text-center">
                <h3> {{ __('word.p_info') }}</h3>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">{{ __('word.home') }}</a>
                    </li>
                    <li>{{ __('word.p_info') }} </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Blog Details Area -->
    <div class="product-details-area pt-100 pb-70">
        <div class="container">

            <!-- Product Details -->
            <div class="row align-items-start">

                <!-- Product Images -->
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-image">

                        <!-- Main Image -->
                        <div class="product-main-image">
                            <img id="mainProductImage" src="{{ asset('user_assets/images/product/p1.png') }}"
                                alt="उत्पाद का नाम">
                        </div>

                        <!-- Thumbnail Images -->
                        <div class="product-thumbnail-list">

                            <div class="product-thumbnail active"
                                onclick="changeProductImage(this, '{{ asset('user_assets/images/products/product-1.jpg') }}')">
                                <img src="{{ asset('user_assets/images/products/product-1.jpg') }}" alt="उत्पाद चित्र">
                            </div>

                            <div class="product-thumbnail"
                                onclick="changeProductImage(this, '{{ asset('user_assets/images/products/product-2.jpg') }}')">
                                <img src="{{ asset('user_assets/images/products/product-2.jpg') }}" alt="उत्पाद चित्र">
                            </div>

                            <div class="product-thumbnail"
                                onclick="changeProductImage(this, '{{ asset('user_assets/images/products/product-3.jpg') }}')">
                                <img src="{{ asset('user_assets/images/products/product-3.jpg') }}" alt="उत्पाद चित्र">
                            </div>

                        </div>
                    </div>
                </div>


                <!-- Product Information -->

                <div class="col-lg-6 col-md-6">
                    <div class="product-details-content">

                        <h2>{{ __('word.primium') }}</h2>

                        <!-- Rating -->
                        <div class="product-rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <span>(5 ग्राहक समीक्षा)</span>
                        </div>

                        <!-- Price -->
                        <div class="product-price">
                            <span class="current-price">₹499</span>
                            <span class="old-price">₹699</span>
                        </div>

                        <!-- Short Description -->
                        <div class="product-short-description">
                            <p>
                               {{ __('word.p_description') }}
                            </p>
                        </div>

                        <!-- Availability -->
                        <div class="product-availability">
                            <strong>  {{ __('word.avail') }}:</strong>
                            <span class="in-stock"> {{ __('word.stock') }}</span>
                        </div>

                        <!-- Quantity + Add Cart -->
                        <div class="product-cart-area">

                            <div class="quantity-box">
                                <button type="button" onclick="decreaseQty()">-</button>

                                <input type="text" id="productQuantity" value="1" readonly>

                                <button type="button" onclick="increaseQty()">+</button>
                            </div>

                           <button type="button" class="default-btn" onclick="addToCart()">
     {{ __('word.add_to_cart') }}
    <i class='bx bx-cart'></i>
</button>

                        </div>

                        <!-- Product Information -->
                        <div class="product-meta">

                            <p>
                                <strong> {{ __('word.category') }}:</strong>
                                {{ __('word.grocery') }}
                            </p>

                            <p>
                                <strong> {{ __('word.p_code') }}:</strong>
                                TK-RICE-001
                            </p>

                            <p>
                                <strong>{{ __('word.packing') }}:</strong>
                                5 {{ __('word.kg') }}
                            </p>

                            <p>
                                <strong>{{ __('word.quantity') }}:</strong>
                                25 पैक
                            </p>

                        </div>

                       
                    </div>
                </div>


            </div><br>


            <!-- Description / Reviews -->
            <div class="product-description-area mt-50">

                <div class="product-tab-list">

                    <button type="button" class="product-tab-btn active" onclick="showProductTab('description', this)">
                        {{ __('word.detail') }}
                    </button>

                  

                </div>


                <!-- Description -->
                <div id="description" class="product-tab-content active">

                    <h4> {{ __('word.p_info') }}</h4>

                    <p>
                        {{ __('word.p1_details') }}
                    </p>

                    <p>
                       {{ __('word.p2_details') }}
                    </p>

                    <ul>
                        <li> {{ __('word.material') }}</li>
                        <li> {{ __('word.design') }}</li>
                        <li> {{ __('word.easy') }}</li>
                        <li> {{ __('word.durable') }}</li>
                    </ul>

                </div>


             
            </div>


            <!-- Related Products -->
            <div class="related-product-area mt-70">

                <div class="section-title text-center">
                    <span>{{ __('word.related') }}</span>
                    <h2>{{ __('word.rel_p') }}</h2>
                </div>

                <div class="row">

                    <!-- Product 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="related-product-card">

                            <div class="related-product-image">
                                <a href="#">
                                    <img src="{{ asset('user_assets/images/product/') }}" alt="उत्पाद">
                                </a>
                            </div>

                            <div class="related-product-content">

                                <h3>
                                    <a href="#">
                                        प्रीमियम उत्पाद
                                    </a>
                                </h3>

                                <div class="related-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="related-price">
                                    ₹399
                                    <del>₹599</del>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- Product 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="related-product-card">

                            <div class="related-product-image">
                                <a href="#">
                                    <img src="{{ asset('user_assets/images/product/') }}" alt="उत्पाद">
                                </a>
                            </div>

                            <div class="related-product-content">

                                <h3>
                                    <a href="#">
                                        दैनिक उपयोग उत्पाद
                                    </a>
                                </h3>

                                <div class="related-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="related-price">
                                    ₹599
                                    <del>₹799</del>
                                </div>

                            </div>

                        </div>
                    </div>


                    <!-- Product 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="related-product-card">

                            <div class="related-product-image">
                                <a href="#">
                                    <img src="{{ asset('user_assets/images/products/product-6.jpg') }}" alt="उत्पाद">
                                </a>
                            </div>

                            <div class="related-product-content">

                                <h3>
                                    <a href="#">
                                        विशेष उत्पाद
                                    </a>
                                </h3>

                                <div class="related-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>

                                <div class="related-price">
                                    ₹699
                                    <del>₹899</del>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- Blog Details Area End -->
@endsection
@push('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function changeProductImage(element, image) {

            document.getElementById('mainProductImage').src = image;

            document.querySelectorAll('.product-thumbnail').forEach(function(item) {
                item.classList.remove('active');
            });

            element.classList.add('active');
        }


        function increaseQty() {

            let input = document.getElementById('productQuantity');

            let quantity = parseInt(input.value);

            input.value = quantity + 1;
        }


        function decreaseQty() {

            let input = document.getElementById('productQuantity');

            let quantity = parseInt(input.value);

            if (quantity > 1) {
                input.value = quantity - 1;
            }
        }


        function showProductTab(tabId, button) {

            document.querySelectorAll('.product-tab-content').forEach(function(tab) {
                tab.classList.remove('active');
            });

            document.querySelectorAll('.product-tab-btn').forEach(function(btn) {
                btn.classList.remove('active');
            });

            document.getElementById(tabId).classList.add('active');

            button.classList.add('active');
        }
    </script>
    <script>
    function addToCart() {
        Swal.fire({
            icon: 'success',
            title: 'कार्ट में जोड़ दिया गया!',
            text: 'प्रीमियम चावल आपके कार्ट में सफलतापूर्वक जोड़ दिया गया है।',
            confirmButtonText: 'ठीक है',
            confirmButtonColor: '#ff4d23'
        });
    }
</script>
@endpush
