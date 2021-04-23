@extends('frontend.master')

@section('title')
Contact-Us
@stop

@section('content')
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_06.jpg">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Contacts Us</h1>
        </div>
        </div>
<div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
</div>
</section>



<section class="contact_form_section sec_ptb_100 clearfix bg-dark">
<div class="container">
    <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
        <h2 class="title_text mb-0">
            <span class="text-light">Send Us a Message</span>
        </h2>
    </div>
    <form id="contact_form" action="https://html.merku.love/rotors/mail.php" method="POST">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                    <input type="text" name="firstname" placeholder="First Name">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form_item" data-aos="fade-up" data-aos-delay="200">
                    <input type="text" name="lastname" placeholder="Last Name">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form_item" data-aos="fade-up" data-aos-delay="300">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="form_item" data-aos="fade-up" data-aos-delay="400">
                    <input type="tel" name="phone" placeholder="Phone Number">
                </div>
            </div>
        </div>
        <div class="form_item" data-aos="fade-up" data-aos-delay="500">
            <textarea name="message" placeholder="Leave Your Message"></textarea>
        </div>
        <div class="abtn_wrap text-center clearfix" data-aos="fade-up" data-aos-delay="600">
            <button type="submit" value="submit" class="custom_btn btn_width bg_default_red text-uppercase">
                Send a Message
                <img src="{{ asset('frontend/assets/images/icons/icon_01.png') }}" alt="icon_not_found">
            </button>
        </div>
    </form>
</div>
</section>

@endsection
