<main class="mt-5">
	<div class="sidebar-menu-wrapper">
		<div class="mobile_sidebar_menu"><button type="button" class="close_btn">
			<i class="fal fa-times"></i>
		</button>
		<div class="about_content mb_60">
			<div class="brand_logo mb_15">
				<a href="{{ route('website.home') }}" >
					<img src="{{ asset('frontend/assets/images/logo/logo2.png')}}" srcset="assets/images/logo/logo_01_2x.png 2x" alt="logo_not_found">
				</a>
			</div>
		</div>
		<div class="menu_list mb_60 clearfix">
			<h3 class="title_text text-white">Menu List</h3>
			<ul class="ul_li_block clearfix">
			<li>
				<a href="{{ route('website.home') }}">Home</a>
			</li>
            <li>
                <a href="{{ route('website.car.list') }}">Our Cars</a>
            </li>
            <li>
                <a href="{{ route('website.services') }}">Our Service</a>
            </li>
            <li>
                <a href="{{ route('website.about') }}">About</a>
            </li>
            <li>
                <a href="{{ route('website.faq') }}">F.A.Q.</a>
            </li>
            <li>
                <a href="{{ route('website.contact') }}">Contact Us</a>
            </li>

		</ul>
	</div>

</div>
<div class="overlay">
</div>
</div>
