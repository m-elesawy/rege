<!-- Footer Start Here -->
<footer>
    <!------------------- Footer Features Start Here ------------------->
	<!-- ✅ HTML Structure: لا تحتاج لتعديل -->
	<div class="theme-2-product-service">
		<div class="container">

			<!-- ✅ Desktop View (4 Columns Grid) -->
			<div class="d-lg-block d-none">
				<div class="row justify-content-center my-4">
					@foreach (helper::footer_features() as $feature)
					<div class="col-xl-3 col-md-6 col-sm-6">
						<div class="card border-0 bg-transparent">
							<div class="card-body d-flex gap-3 p-md-3 p-2">
								<div class="quality-icon col-3">
									{!! $feature->icon !!}
								</div>
								<div class="quality-content">
									<h3>{{ $feature->title }}</h3>
									<p class="m-0 text-muted fs-7">{{ $feature->description }}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>

			<!-- ✅ Mobile View (Carousel) -->
			<div class="footer-fiechar-slider owl-carousel owl-theme d-lg-none my-4">
				@foreach (helper::footer_features() as $feature)
				<div class="item">
					<div class="card border-0 bg-transparent">
						<div class="card-body d-flex justify-content-center gap-3 p-md-3 p-2">
							<div class="quality-icon col-3">
								{!! $feature->icon !!}
							</div>
							<div class="quality-content">
								<h3>{{ $feature->title }}</h3>
								<p class="m-0 text-muted fs-7">{{ $feature->description }}</p>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>

		</div>
	</div>

	<!-- ✅ JS Carousel Script -->
	<script>
		function initFooterCarousel() {
			const $slider = $('.footer-fiechar-slider');

			if (window.innerWidth < 992) {
				// إذا لم يتم تهيئته من قبل
				if (!$slider.hasClass('owl-loaded')) {
					$slider.owlCarousel({
						rtl: true,
						loop: true,
						margin: 10,
						nav: false,
						dots: true,
						autoplay: true,
						autoplayTimeout: 5000,       // ⏳ توقف بين السلايدات (5 ثواني)
						autoplaySpeed: 1500,         // 🌀 سرعة الحركة نفسها
						smartSpeed: 1500,            // 🌀 نعومة التنقل بين السلايدات
						responsive: {
							0: { items: 1 },
							480: { items: 1 },
							768: { items: 2 }
						}
					});
				}
			} else {
				// إزالة السلايدر على الشاشات الكبيرة
				if ($slider.hasClass('owl-loaded')) {
					$slider.trigger('destroy.owl.carousel');
					$slider.find('.owl-stage-outer').children().unwrap();
					$slider.removeClass("owl-center owl-loaded owl-text-select-on");
				}
			}
		}

		document.addEventListener("DOMContentLoaded", initFooterCarousel);
		window.addEventListener("resize", function () {
			initFooterCarousel();
		});
	</script>

    <!------------------- Footer Features End Here ------------------->
	<div class="d-lg-block d-none">
    <div class="footer pt-3">
        <div class="container">
            <div class="py-sm-5 py-4 border-bottom-primary">
                <div class="row justify-content-between g-4 footer-area py-4">
                    <div class="col-lg-4 left-side mt-3">
                        <a href="{{ route('home') }}">
                            <img src="{{ helper::image_path(@helper::appdata()->logo) }}" height="55" class="my-3"
                                alt="footer_logo">
                        </a>
                        <h1>{{ @helper::appdata()->footer_title }}</h1>
                        <p class="mb-0">{{ @helper::appdata()->footer_description }}</p>
                    </div>

                    <div class="col-lg-8 right-side">
                        <div class="row g-3">
                            <div class="col-md-4 col-lg-4 col-xl-4 col-6 mb-4 mb-sm-0">
                                <h4>{{ trans('labels.pages') }}</h4>
                                <ul>
                                    <li><a href="{{ route('about-us') }}"
                                            class="text-white">{{ trans('labels.about') }}</a>
                                    </li>
                                    <li><a href="{{ route('privacy-policy') }}"
                                            class="text-white">{{ trans('labels.privacy_policy') }}</a></li>
                                    <li><a href="{{ route('refund-policy') }}"
                                            class="text-white">{{ trans('labels.refund_policy') }}</a></li>
                                    <li><a href="{{ route('terms-conditions') }}"
                                            class="text-white">{{ trans('labels.terms_condition') }}</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4 col-6 mb-4 mb-sm-0">
                                <h4>{{ trans('labels.other') }}</h4>
                                <ul>
                                    <li><a href="{{ route('categories') }}"
                                            class="text-white">{{ trans('labels.menu') }}</a>
                                    </li>
                                    <li><a href="{{ route('faq') }}" class="text-white">{{ trans('labels.faq') }}</a>
                                    </li>
                                    <li><a href="{{ route('contact-us') }}"
                                            class="text-white">{{ trans('labels.help_contact_us') }}</a></li>
                                    <li><a href="{{ route('gallery') }}"
                                            class="text-white">{{ trans('labels.gallery') }}</a>
                                    </li>
                                    @if (@helper::checkaddons('blog'))
                                        <li><a href="{{ route('blogs') }}"
                                                class="text-white">{{ trans('labels.blogs') }}</a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="col-md-4 col-lg-4 col-xl-4 col-12 mb-4 mb-sm-0">
                                <h4>{{ trans('labels.help_contact_us') }}</h4>
                                <ul class="contact-detail">
                                    <a href="callto:{{ helper::appdata()->mobile }}">
                                        <li class="d-flex align-items-center text-white">
                                            <i
                                                class="fa-light fa-phone {{ session()->get('direction') == '2' ? 'ms-2' : 'me-2' }}"></i>
                                            <p class="mb-0">{{ helper::appdata()->mobile }}</p>
                                        </li>
                                    </a>
                                    <a href="mailto:{{ helper::appdata()->email }}">
                                        <li class="d-flex align-items-center text-white">
                                            <i
                                                class="fa-light fa-envelope {{ session()->get('direction') == '2' ? 'ms-2' : 'me-2' }}"></i>
                                            <p class="mb-0">{{ helper::appdata()->email }}</p>
                                        </li>
                                    </a>
                                </ul>
                                <div class="col-auto mt-3 d-flex flex-wrap gap-2">
                                    @foreach (helper::sociallinks() as $sociallink)
                                        <div class="footer-box">
                                            <a class="text-white " href="{{ $sociallink->link }}" target="_blank">
                                                {!! $sociallink->icon !!} </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary">
        <div class="container">
            <div
                class="d-flex flex-wrap gap-2 align-items-center justify-content-md-between justify-content-center text-center py-3">
                <p class="text-white fs-7 mb-0">{{ helper::appdata()->copyright }}</p>
                <div class="footer-card-image d-flex gap-2">
                    @foreach (helper::paymentlist() as $payment)
                        <div class="card-img">
                            <img src="{{ helper::image_path($payment->image) }}" class="h-100 w-100" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
	</div>
</footer>
<!-- Footer End here -->
