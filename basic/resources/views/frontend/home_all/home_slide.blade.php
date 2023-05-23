
@php
    $homeslide = App\Models\HomeSlide::find(1);
@endphp

<section class="banner">
    <div class="container custom-container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="banner__img text-center text-xxl-end">
                    <img src="{{ $homeslide->home_slide  }}" alt=""> {{--take the image from database and display it on the page--}}
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="banner__content">
                    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $homeslide->title  }}</h2> {{--take the title from database and display it on the page--}}
                    <p class="wow fadeInUp" data-wow-delay=".4s">{{ $homeslide->short_title  }}</p> {{--take the shortTitle from database and display it on the page--}}
                </div>
            </div>
        </div>
    </div>
    <div class="scroll__down">
        <a href="#aboutSection" class="scroll__link">Scroll down</a>
    </div>
    <div class="banner__video">
        <a href="https://www.linkedin.com/in/amr-haco%C4%9Flu-55324a256/">
            <img src="{{ asset('frontend/assets/img/linkedin.png') }}" alt="Linked-in" style="width: 150px;">
        </a>
    </div>
</section>
