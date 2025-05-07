@extends('web.layout.default')
@section('page_title')
    | {{ trans('labels.our_branches') }}
@endsection
@section('content')
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <nav class="text-dark breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li
                            class="breadcrumb-item {{ session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : '' }}">
                            <a class="text-dark fw-600" href="{{ URL::to('/') }}">{{ trans('labels.home') }}</a>
                        </li>
                        <li
                            class="breadcrumb-item {{ session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : '' }}">
                            <a class="text-muted" href="javascript:void(0)">{{ trans('labels.our_branches') }}</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
	<section>
        <div class="testimonials-wrapper">
            <div class="container">
                                    <div class="row g-4 my-5">
                                                    <div class="col-md-4 col-6">
                                <div class="team-card rounded-4 overflow-hidden">
                                    <div class="member-img overflow-hidden position-relative">
                                        <img src="http://localhost/foodefy/storage/app/public/admin-assets/images/about/team-67db14bdb048b.jpg" class="img-circle img-responsive">
                                        <div class="team-social">
                                                                                            <div class="icons">
                                                    <a href="https://www.google.com/" target="_blank">
                                                        <i class="fa-brands fa-facebook-f text-white"></i>
                                                    </a>
                                                </div>
                                                                                                                                        <div class="icons">
                                                    <a href="https://www.google.com/" target="_blank">
                                                        <i class="fa-brands fa-youtube text-white"></i>
                                                    </a>
                                                </div>
                                                                                                                                        <div class="icons">
                                                    <a href="https://www.google.com/" target="_blank">
                                                        <i class="fa-brands fa-instagram text-white"></i>
                                                    </a>
                                                </div>
                                                                                                                                        <div class="icons">
                                                    <a href="https://www.google.com/" target="_blank">
                                                        <i class="fa-brands fa-twitter text-white"></i>
                                                    </a>
                                                </div>
                                                                                    </div>
                                    </div>
                                    <div class="member-details">
                                        <span class="member-name">222222</span>
                                        <p class="mb-0 fs-7 fw-500">صضثقثصقثصقصثق</p>
                                    </div>
                                </div>
                            </div>
                                            </div>
                            </div>
        </div>
    </section>

    @include('web.subscribeform')
@endsection