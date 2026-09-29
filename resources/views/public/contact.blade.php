@extends('public_layouts.main_layout')

@section('main-content')


	<!-- breadcrumb-section -->
	<div class="breadcrumb-wrap bg-mild position-relative" data-bg-src="{{ asset('user_assets/img/bg/breadcumb-bg.png ')}}"
		style="padding: 120px 0;">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="breadcumb-content">
						<br><br><br><br>
						<h1 class="breadcumb-title">संपर्क करें</h1>
						<ul class="breadcumb-menu">
							<li><a href="index.html">मुख्य पृष्ठ</a></li>
							<li>संपर्क करें </li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- end breadcrumb section -->
	@if(session('success'))
		<script>
			Swal.fire({
				icon: 'success',
				title: 'सफल!',
				text: "{{ session('success') }}"
			});
		</script>
	@endif
	<!-- contact form -->
	<div class="overflow-hidden contact-area-1 position-relative z-index-common" id="contact-sec" style="margin-top:20px;">
		<div class="container">
			
			<div class="row gy-4">
				<div class="col-xl-4 col-md-6">
					<div class="contact-card th_fade_anim">
						<div class="box-icon"><i class="fal fa-headset"></i></div>
						<div class="box-content">
							<h3 class="box-title">हमें कॉल करें</h3>

							<p class="box-text">किसी भी समय सहायता के लिए संपर्क करें।</p>

							<a class="box-link" href="tel:07789-222222">07789-222222</a><br>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="contact-card th_fade_anim">
						<div class="box-icon" data-theme-color="#FFBF00"><i class="fal fa-envelope-open-text"></i></div>
						<div class="box-content">
							<h3 class="box-title"> ईमेल</h3>
							<p class="box-text">किसी भी प्रकार की जानकारी हेतु हमें ईमेल करें</p>
							<p class="box-link">Balodabazar[dot]cg@gov[dot]in</p><br>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-md-6">
					<div class="contact-card th_fade_anim">
						<div class="box-icon" data-theme-color="#743EF9"><i class="fal fa-map-location-dot"></i>
						</div>
						<div class="box-content">
							<h3 class="box-title"> पता</h3>

							<p>आवश्यक जानकारी एवं सेवाओं के लिए <br> में संपर्क करें।  </p>
							<p class="box-link">जिला प्रशासन, बस्तर, छत्तीसगढ़</p>
								
						</div>
					</div>
				</div>
			</div>
			<div class="contact-page-form-wrap space-top">
				<div class="contact-form contact-page-form">
					<form id="contactForm" method="POST">
						@csrf
						<h4 class="form-title">हमसे संपर्क करें!</h4>

						<div class="row">

							<div class="col-md-6 form-group style-border3">
								<input type="text" placeholder="आपका नाम" name="name" class="form-control">
								<i class="fal fa-user"></i>
							</div>

							<div class="col-md-6 form-group style-border3">
								<input type="text" placeholder="आपका ईमेल" name="email" class="form-control">
								<i class="fal fa-envelope"></i>
							</div>

							<div class="col-md-6 form-group style-border3">
								<input type="number" class="form-control" name="mobile" id="mobile"
									placeholder="मोबाइल नंबर">
								<i class="fal fa-phone-alt"></i>
							</div>

							<div class="col-md-6 form-group style-border3">
								<input type="text" name="subject" id="subject" class="form-control"
									placeholder="विषय लिखें">
								<i class="fal fa-pencil"></i>
							</div>

							<div class="col-12 form-group style-border3">
								<textarea name="message" id="message" cols="30" rows="3" class="form-control"
									placeholder="अपना संदेश लिखें..."></textarea>
								<i class="fal fa-pencil"></i>
							</div>
							<!-- CAPTCHA -->
							{{-- <div class="col-12 form-group style-border3">

								<div class="row align-items-center">

									<!-- LEFT: Input (col-6) -->
									<div class="col-md-6 col-12">
										<input type="text" id="captcha" name="captcha" class="form-control"
											placeholder="Captcha दर्ज करें" maxlength="6" required>
									</div>

									<!-- RIGHT: Image + Refresh -->
									<div
										class="col-md-6 col-12 d-flex">

										<img src="{{ url('/generate-captcha') }}" id="captchaImage" height="45"
											style="border:1px solid #ddd; border-radius:4px;">

										<button type="button" id="refreshCaptcha" class="btn btn-outline-secondary btn-sm">
											↻
										</button>

									</div>

								</div>

								<small id="captchaError" class="text-danger d-none">
									Invalid captcha
								</small>

							</div> --}}
							<div class="form-btn col-12">
								<button class="th-btn">
									संदेश भेजें
									<svg class="ms-2" width="16" height="16" viewBox="0 0 16 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_458_9379)">
											<path
												d="M14.0331 2.03512C12.5811 0.471411 1.65895 4.30197 1.66797 5.7005C1.6782 7.28644 5.93336 7.7743 7.11277 8.10524C7.82203 8.30417 8.01197 8.50817 8.1755 9.2519C8.91617 12.6202 9.28803 14.2955 10.1356 14.3329C11.4865 14.3926 15.4502 3.56117 14.0331 2.03512Z"
												fill="transparent" stroke="currentColor" stroke-width="1.5">
											</path>
											<path d="M7.66797 8.33333L10.0013 6" stroke="currentColor" stroke-width="1.5"
												stroke-linecap="round" stroke-linejoin="round"></path>
										</g>
										<defs>
											<clipPath id="clip0_458_9379">
												<rect width="16" height="16" fill="currentColor"></rect>
											</clipPath>
										</defs>
									</svg>
								</button>
							</div>

						</div>

						<p class="form-messages mb-0 mt-3"></p>
					</form>
				</div>
			</div>
		</div>
		<div class="contact-map space-top">
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15070.889223329892!2d81.9338685!3d19.20732755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a30175f8de4577d%3A0x1be335329e03552f!2sBastar%2C%20Chhattisgarh%20494223!5e0!3m2!1sen!2sin!4v1790668316803!5m2!1sen!2sin"
             width="600" height="450" style="border:0;" allowfullscreen=""
             loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe></div>
	</div>

	<!-- end contact form -->


@endsection

