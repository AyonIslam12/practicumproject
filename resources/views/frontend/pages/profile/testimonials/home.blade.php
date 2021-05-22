@extends('frontend.master')

@section('title')
Testimonials-Site
@stop


@section('content')

<!--Start-->
<section class="breadcrumb_section text-center clearfix">
    <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="{{ asset('frontend/assets/images/breadcrumb/bg_10.jpg') }}">
        <div class="overlay">

        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <h1 class="page_title text-white pt-5">Your Testimonials History</h1>
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
                        <a class="{{ request()->is('user/profile') ? 'active' : '' }}" href="{{ route('website.user.profile.home') }}">
                            <i class="fas fa-user"></i>
                           {{ auth()->user()->name }}
                        </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('user/booking/history') ? 'active' : '' }}" href="{{ route('website.user.booking.history') }}">
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
    <div class="account_tab_content ">
        <div class="account_info_list" data-aos="fade-up" data-aos-delay="500">
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
           <div class="row">
           <div class="col-md-8">
            <h2 class="list_title mb_30">  My Testimonials:</h2>

           </div>
            <div class="col-md-4 pb-3">
                <!-- Button trigger modal -->
                 <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#exampleModal">
                    Add Post
                 </button>
                </div>
            <hr class="mt-0" data-aos="fade-up" data-aos-delay="100">
           </div>

        <div class="row">
            @if(count($posts) > 0)


            @foreach ($posts  as $post )
            <div class="col-8">


             <ul class="ul_li_block clearfix"><li>

                 <li>
                    <span class="font-weight-bold text-dark "> Your Opinion:</span>
                    <span class="text-muted d-inline text-justify">{{ $post->message }}</span>
                 </li>
                 <li>
                     <span class="font-weight-bold text-dark">Post Date:</span>
                     <span>{{ date("Y-M-d",strtotime($post->postdate)) }}</span>
                </li>
                <div class="action-button">
                    <a class="btn btn-outline-success" href="{{ route('website.user.testimonials.edit',$post->id) }}"><i class="fas fa-user-edit"></i></a>
                    <a class="btn btn-outline-danger delete" href="{{ route('website.user.testimonials.delete',$post->id ) }}"><i class="far fa-trash-alt "></i></a>

                </div>
             </ul>


            </div>
            <hr class="mt-5 " data-aos="fade-up" data-aos-delay="100">
            @endforeach
            @else
            <div class="bg-dark rounded">
                <span class="text-light p-2 ">You didn't post yet.</span>

            </div>

            @endif

           </div>
     </div>
</div>
</div>
</div>
</div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Post Your Testimonials</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form action="{{ route('website.user.testimonials.post') }}" method="post">
            @csrf
            <div class="form-group">
              <label for="message">Your Opinions</label>
              <textarea name="message" id="message" cols="30" rows="3" placeholder="Enter Your Opinions" class="form-control @error('message') is-invalid @enderror"></textarea>
              @error('message') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="postdate">Post Date</label>
             <input type="date" name="postdate" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" id="postdate" class="form-control @error('postdate') is-invalid @enderror">
             @error('postdate') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>
      </div>
    </div>
  </div>


  @push('js')

<script>

@if($errors->any())
$('#exampleModal').modal('show')
@elseif ($errors->any())
$('#exampleModal').modal('hide')


@endif
</script>

@endpush



@endsection
