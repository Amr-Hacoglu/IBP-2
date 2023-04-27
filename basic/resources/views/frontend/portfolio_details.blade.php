@extends('frontend.main_master')
@section('main')

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb__wrap">
            <div class="container custom-container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="breadcrumb__wrap__content">
                            <h2 class="title">{{ $portfolio->portfolio_name }}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $portfolio->portfolio_name }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__wrap__icon">
                <ul>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon01.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon02.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon03.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon04.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon05.png') }}" alt=""></li>
                    <li><img src="{{ asset('frontend/assets/img/icons/breadcrumb_icon06.png') }}" alt=""></li>
                </ul>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-details-area -->
        <section class="services__details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="services__details__thumb">
                            <img src=" {{ asset($portfolio->portfolio_image) }} " alt="">
                        </div>
                        <div class="services__details__content">
                            <h2 class="title">{{ $portfolio->portfolio_title }}</h2>
                            <p> {!! $portfolio->portfolio_description !!} </p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-details-area-end -->

        <!-- contact-area -->

        <!-- contact-area-end -->

    </main>

@endsection
