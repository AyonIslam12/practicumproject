@extends('frontend.master')

@section('title')
Update-Post
@stop


@section('content')

<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_10.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Update Your Post</h1>
        </div>
    </div>
    <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">

    </div>
</section>

<section class="account_section sec_ptb_100 clearfix">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
            <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
            <div class="account_tabs_menu clearfix" data-bg-color="#F2F2F2" data-aos="fade-up" data-aos-delay="100">
                <h3 class="list_title mb_15 text-center">Your Profile</h3>
                <ul class="ul_li_block nav" role="tablist">
                <li>
                    <a href="{{ route('website.user.profile.home') }}" class="user_thumbnail pb-5">
                        <img width="150px" class="rounded-circle m-auto" src="{{ asset('uploads/users/'.auth()->user()->image)}}" alt="thumbnail_not_found">
                    </a>
                    <a class="active" href="{{ route('website.user.profile.home') }}">
                        <i class="fas fa-user"></i>
                        {{ auth()->user()->name }}
                    </a>
                </li>
                <li>
                        <a  href="{{ route('website.user.booking.history') }}">
                            <i class="fas fa-history"></i>
                        Booking History
                    </a>
                </li>
                <li>
                    <a class="{{ request()->is('user/testimonials') ? 'active' : '' }}" href="{{ route('website.user.testimonials.show') }}">
                        <i class="fas fa-file-alt"></i>
                    My Testimonials
                </a>
             </li>
                <li>
                <a class="{{ request()->is('user/update-password') ? 'active' : '' }}" href="{{ route( 'website.user.edit.password') }}">
                    <i class="fas fa-key"></i>
                   Change Password
                </a>
                </li>
                <li>
                    <a href="{{ route('website.user.logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        Log Out
                         <img class="arrow" src="{{ asset('frontend/assets/images/icons/icon_02.png') }}" alt="icon_not_found">
                    </a>
                </li>
            </ul>
        </div>
    </div>
<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
    <div class="account_tab_content tab-content">
        <div id="admin_tab" class="tab-pane active">
            <div class="card ">
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
                <div class="card-header bg-info">
                  <p class="text-light font-weight-bold text-center">Update Your Post</p>
                </div>
                <div class="card-body">
                    <form action="{{ route('website.user.testimonials.update',$updateTestimonials->id) }}" method="post" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="message">Your Opinion</label>
                            @error('message') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
                           <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" rows="5">{{ $updateTestimonials->message }}</textarea>

                        </div>
                        <div class="form-group">
                            <label for="postdate">Post Date</label>
                            <input type="date" class="form-control " value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}"  id="postdate" name="postdate" >

                        </div>




                    <div class="card-footer bg-info text-right">
                        <a href="{{ route('website.user.testimonials.show') }}" class="btn btn-secondary"> Back</a>
                        <button type="submit"  class="btn btn-secondary">Update Post</button>
                    </div>

                </form>
                </div>

              </div>


    </div>


</div>
</div>
</div>
</div>
</section>
@stop
