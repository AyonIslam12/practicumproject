@extends('frontend.master')

@section('title')
Contact-Us
@stop

@section('content')
<section class="breadcrumb_section text-center clearfix">
<div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_06.jpg') }}">
    <div class="overlay">

     </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h1 class="page_title text-white pt-5">Contacts Us</h1>
 </div>
</div>

</section>
<!--main office-->


<section class="contact_form_section sec_ptb_100 clearfix bg-dark">
<div class="container">
    <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
        <h2 class="title_text mb-0">
            <span class="text-light">Send Us a Message</span>
        </h2>
    </div>
    <!--Validation Message-->
    <div class="row">
        <div class="col-md-12">
        @if(session('message'))
        <div class="text-center alert alert-{{ session('type') }}">
            <p class="text-center text-bolder">{{ session('message') }}</p>
        </div>
    @endif
        </div>
    </div>
    <form  action="{{ route('website.user.message') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form_item" data-aos="fade-up" data-aos-delay="500">
                    @error('message') <span class="text-warning font-weight-bold font-italic">{{ $message }}</span> @enderror
                    <textarea name="message" placeholder="Leave Your Message" class="form-control @error('message') is-invalid @enderror" ></textarea>

                </div>
            </div>

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
<section class="main_office_section sec_ptb_100 clearfix">
	<div class="container">
		<div class="row align-items-center justify-content-lg-between justify-content-sm-center">
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
				<div class="office_image" data-aos="fade-up" data-aos-delay="100">
					<img src="{{ asset('frontend/assets/images/about/img_01.jpg') }}" alt="image_not_found">
				</div>
			</div>

    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
	    <div class="office_info" data-aos="fade-up" data-aos-delay="300">
            <h3 class="item_title">Main Office:</h3>
            <ul class="ul_li_block clearfix">
                <li><i class="fas fa-map-marker-alt">

                </i> Sector 13, Uttara,Dhaka-1230</li>
                <li><i class="fas fa-clock"></i> WH: 9:00am - 9:30pm</li>
                <li><i class="fas fa-phone"></i> +880-1791205437</li>
                <li><i class="fas fa-envelope"></i>
                    <a href="#">mh.ayon222@gmail.com</a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    </div>
</section>

@endsection
