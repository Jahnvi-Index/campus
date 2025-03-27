@php
         $aboutpage=App\Models\About::find(1);
@endphp




<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/pic1.jfif')}}" alt="XD">
                        <img class="dark" src="{{ asset('frontend/img/icons/pic1.jfif') }}" alt="XD">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/pic2.jfif') }}" alt="Skeatch">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/pic2.jfif') }}" alt="Skeatch">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/partner_light06.png') }}" alt="Illustrator">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/partner_light06.png') }}" alt="Illustrator">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/pic4.jpeg') }}" alt="Hotjar">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/pic4.jpeg') }}" alt="Hotjar">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/pic6.png') }}" alt="Invision">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/pic6.png') }}" alt="Invision">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/pic7.png') }}" alt="Photoshop">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/pic7.png') }}" alt="Photoshop">
                    </li>
                    <li>
                        <img class="light" src="{{ asset('frontend/assets/img/icons/pic8.png') }}" alt="Figma">
                        <img class="dark" src="{{ asset('frontend/assets/img/icons/pic8.png') }}" alt="Figma">
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">About successfull person</span>
                        <h2 class="title">{{ $aboutpage->title }}</h2>
                    </div>
                    
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $aboutpage->short_title }}</p>
                        </div>
                  </div>
                    <p class="desc"> {{ $aboutpage->short_description }}</p>
                    {{-- <p class="desc">{{ $aboutpage->long_description }}</p> --}}

                  {{-- <a href="about.html" class="btn">Download my resume</a> --}}
                </div>
            </div>
        </div>
    </div>
</section>