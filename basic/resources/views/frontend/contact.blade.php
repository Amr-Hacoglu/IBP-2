@extends('frontend.main_master')
@section('main')

@section('title')
Contact | EasyLearning Website
@endsection

 <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Contact us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
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

            <!-- contact-map -->
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6002.8463984217005!2d32.6522504!3d41.2125472!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40835335ca55f4a3%3A0x58c149eab8f0a954!2zS2FyYWLDvGssIEthcmFiw7xrIE1lcmtlei9LYXJhYsO8aw!5e0!3m2!1sen!2str!4v1682609136727!5m2!1sen!2str%22%20width=%22600%22%20height=%22450%22%20style=%22border:0;%22%20allowfullscreen=%22%22%20loading=%22lazy%22%20referrerpolicy=%22no-referrer-when-downgrade"
                    allowfullscreen loading="lazy"></iframe>
            </div>
            <!-- contact-map-end -->

            <!-- contact-area -->
            <div class="contact-area">
                <div class="container">
                <form method="post" action="{{ route('store.message') }}" class="contact__form">
    	        @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input  name="name" type="text" placeholder="Enter your name*">
                        </div>
                        <div class="col-md-6">
                            <input name="email" type="email" placeholder="Enter your mail*">
                        </div>
                        <div class="col-md-6">
                            <input  name="subject" type="text" placeholder="Enter your subject*">
                        </div>
                        <div class="col-md-6">
                            <input  name="phone" type="text" placeholder="Your Phone*">
                        </div>
                    </div>
                    <textarea name="message" id="message" placeholder="Enter your massage*"></textarea>
                    <button type="submit" class="btn">send massage</button>
                </form>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- contact-info-area -->

            <!-- contact-info-area-end -->

            <!-- contact-area -->

            <!-- contact-area-end -->

        </main>









@endsection
