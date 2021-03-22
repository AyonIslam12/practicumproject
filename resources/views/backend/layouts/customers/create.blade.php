@extends('backend.master')

@section('title')
customer-create

@stop

@section('content')
<div class="row">
    <div class="col-6 offset-3 bg-secondary">

        <h3 class="text-center text-light py-4">Customer Add Form</h3>
        <form action="{{ route('admin.customer.store') }}" method="post" enctype="multipart/form-data">
            @if(session('message'))
            <div class="alert alert-{{ session('type') }}">
                <p class="text-center text-bolder">{{ session('message') }}</p>
            </div>
        @endif
            @csrf
            <div class="form-group">
                <label for="name"><span class="text-light"> Name</span></label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"  placeholder="Enter Name">
                @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="email"><span class="text-light "> Email Address</span></label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ old('email') }}"  aria-describedby="emailHelp" placeholder="Enter email">
               @error('email') <span class="text-danger  font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
              <label for="password"><span class="text-light"> Password</span></label>
              <input type="password" class="form-control @error('email') is-invalid @enderror" name="password"  value="{{ old('password') }}" id="password" placeholder="Password">
               @error('password') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="age"><span class="text-light"> Age</span></label>
                <input type="number" class="form-control @error('email') is-invalid @enderror" id="age" name="age"  value="{{ old('age') }}" placeholder="Enter Age">
                 @error('age') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="nidnum"><span class="text-light"> NID Number</span></label>
                <input type="number"class="form-control @error('nid_num') is-invalid @enderror" id="nidnum" name="nid_num"  value="{{ old('nid_num') }}"  placeholder="Enter NID Number">
                 @error('nid_num') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="gender" ><span class="text-light"> Gender</span></label><br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="male" name="gender" value="male" class="custom-control-input" >
                    <label class="custom-control-label" for="male"><span class="text-light"> Male</span></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="female" name="gender" value="female" class="custom-control-input" >
                    <label class="custom-control-label" for="female"><span class="text-light"> Female</span></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="others" name="gender" value="others" class="custom-control-input" >
                    <label class="custom-control-label" for="others"><span class="text-light"> Others</span></label>
                </div>
                @error('gender') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
            </div>

           <div class="form-group">
                <label for="photo"><span class="text-light"> Photo</span></label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo"  value="{{ old('photo') }}" >
                 @error('photo') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="contact"><span class="text-light"> Contact Number</span></label>
                <input type="number"class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact" value="{{ old('contact') }}"  placeholder="Enter Contact Number">
                 @error('contact') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="address"><span class="text-light"> Address</span></label>
                <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter Your Address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}"></textarea>
                 @error('address') <span class="text-danger font-italic">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="status" ><span class="text-light"> Status</span></label><br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="active" name="status" value="active" class="custom-control-input" >
                    <label class="custom-control-label" for="active"><span class="text-light"> Active</span></label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="inactive" name="status" value="inactive" class="custom-control-input" >
                    <label class="custom-control-label" for="inactive"><span class="text-light"> Inactive</span></label>
                </div>

                @error('status') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio text-center py-4">
                    <button type="submit" class="btn btn-success" > Add Customer</button>
                </div>
            </div>
          </form>

    </div>
</div>

@stop
