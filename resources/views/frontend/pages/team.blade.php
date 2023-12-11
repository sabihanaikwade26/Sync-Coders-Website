<!DOCTYPE html>
<html lang="en">

@include('inc.head')


<body>
  <!-- Cursor Animation -->
  <div class="cursor1"></div>
  <div class="cursor2"></div>


  <!-- Preloader -->
  <div class="preloader">
    <div class="loading">
      <div class="bar bar1"></div>
      <div class="bar bar2"></div>
      <div class="bar bar3"></div>
      <div class="bar bar4"></div>
      <div class="bar bar5"></div>
      <div class="bar bar6"></div>
      <div class="bar bar7"></div>
      <div class="bar bar8"></div>
    </div>
  </div>


  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Cursor</h2>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">mode</h2>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="light">light</button>
          <button data-mode="dark">dark</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Language Support</h2>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->



  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>



  <!-- Switcher Area Start -->
  <div class="switcher__area">
    <div class="switcher__icon">
      <button id="switcher_open"><i class="fa-solid fa-gear"></i></button>
      <button id="switcher_close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="switcher__items">
      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Cursor</h2>
        </div>
        <div class="switcher__btn">
          <select name="cursor-style" id="cursor_style">
            <option value="1">default</option>
            <option selected value="2">animated</option>
          </select>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">mode</h2>
        </div>
        <div class="switcher__btn mode-type wc-col-2">
          <button class="active" data-mode="light">light</button>
          <button data-mode="dark">dark</button>
        </div>
      </div>

      <div class="switcher__item">
        <div class="switch__title-wrap">
          <h2 class="switcher__title">Language Support</h2>
        </div>
        <div class="switcher__btn lang_dir wc-col-2">
          <button class="active" data-mode="ltr">LTR</button>
          <button data-mode="rtl">RTL</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Switcher Area End -->



  <!-- Scroll Smoother -->
  <div class="has-smooth" id="has_smooth"></div>


  <!-- Go Top Button -->
  <button id="scroll_top" class="scroll-top"><i class="fa-solid fa-arrow-up"></i></button>


  <!-- Header area start -->
  @include('inc.header')
  <!-- Header area end -->


  <!-- Offcanvas area start -->
  @include('inc.mobile')
  <!-- Offcanvas area end -->


  <div id="smooth-wrapper">
    <div id="smooth-content">
    <main>


        <!-- Team area start -->
        <section class="team__area-6">
          <div class="container line pt-120">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8 offset-xxl-4 offset-xl-4">
                <div class="sec-title-wrapper">
                  <h2 class="sec-title animation__char_come">Talented team </h2>
                  <p>We’re a diverse team that works as fancies attention to details,
                    enjoys beers on Friday nights and
                    aspires to design the dent in the universe.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper team__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/1.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Saymon D. Halk</h4>
                    <h5 class="team__member-role-6">Founder & CEO</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/2.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Jassica Oliver</h4>
                    <h5 class="team__member-role-6">Researcher</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/3.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Daniyel Adamson</h4>
                    <h5 class="team__member-role-6">Digital Marketer</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/4.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Hardiya Kethrine</h4>
                    <h5 class="team__member-role-6">Lead Designer</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/5.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Saymon D. Halk</h4>
                    <h5 class="team__member-role-6">Researcher</h5>
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/6.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Jassica Oliver</h4>
                    <h5 class="team__member-role-6">Lead Designer</h5>
                  </div>
                </a>
              </div>
              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/7.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Jassica Oliver</h4>
                    <h5 class="team__member-role-6">Lead Designer</h5>
                  </div>
                </a>
              </div>
              <div class="swiper-slide team__slide">
                <a href="{{ route('assets.team-details') }}">
                  <img src="{{asset('assets/imgs/team/8.jpg')}}" alt="Team Member">
                  <div class="team__info">
                    <h4 class="team__member-name-6">Jassica Oliver</h4>
                    <h5 class="team__member-role-6">Lead Designer</h5>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="container line pt-150">
            <div class="line-3"></div>
          </div>

          <div class="team__join-btn">
            <div class="btn_wrapper">
              <a href="{{ route('assets.contact') }}" class="wc-btn-primary btn-item btn-hover"><span></span> Join our <br>talented team
                <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </section>
        <!-- Team area end -->


        <section class="team__btm">
          <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper pt-130 pb-140 text-anim">
                  <h2 class="sec-title title-anim">Your digital products & services ensured by our talented team</h2>
                  <p>A hybrid team with hybrid culture. More than 20 people, including designers, engineers, creatives,
                    thinkers, creative table and media experts always looking from a new perspective.</p>
                </div>
              </div>
            </div>
          </div>
        </section>


        <!-- Counter area start -->
        <section class="counter__area">
          <div class="container g-0 line pt-110">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-12">
                <div class="counter__wrapper-2">
                  <div class="counter__item-2">
                    <h2 class="counter__number">25k</h2>
                    <p>Project <br>completed</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2">
                    <h2 class="counter__number">8k</h2>
                    <p>Happy <br>customers</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2">
                    <h2 class="counter__number">15</h2>
                    <p>Years <br>experiences</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2">
                    <h2 class="counter__number">98</h2>
                    <p>Awards <br>achievement</p>
                    <span class="counter__border"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Counter area end -->


        <!-- CTA area start -->
        <section class="cta__area">
          <div class="container line pt-130 pb-110">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content">
                  <p class="cta__sub-title">Work with us</p>
                  <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                  <div class="btn_wrapper">
                    <a href="contact.html" class="wc-btn-primary btn-item btn-hover"><span></span>Let’s talk us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- CTA area end -->

      </main>



      <!-- Footer area start -->
      @include('inc.footer')
      <!-- Footer area end -->


    </div>
  </div>



  <!-- All JS files -->
  @include('inc.scripts')


</body>

</html>