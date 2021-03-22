@extends('backend.master')

@section('title')
customer-edit
@stop

@section('content')
<div class="row">
    <div class="col-8 offset-2  bg-info">
        <div class="card bg-secondary">
            <div class="card-header bg-info  text-light text-center">
                Upadte Customer  Info
            </div>
            @if($errors->any())
            <div class="alert alert-danger mx-5 mt-2 mb-0">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>

            </div>
        @endif

        @if(session('message'))
        <div class="text-center alert alert-{{ session('type') }}">
            <p class="text-center text-bolder">{{ session('message') }}</p>
        </div>
        @endif

           <form action="{{ route('admin.customer.update',$customer->id) }} " method="post">
             @csrf
               @method('PUT')
               <div class="card-body ">
                <div class="form-group">
                    <label for="name"><span class="text-light"> Name</span></label>
                    <input type="text" class="form-control " id="name" name="name" value="{{ $customer->name }}"  placeholder="Enter Name">

                </div>
                <div class="form-group">
                  <label for="email"><span class="text-light "> Email Address</span></label>
                  <input type="email" class="form-control" id="email" name="email"  value="{{ $customer->email }}"  aria-describedby="emailHelp" placeholder="Enter email">

                </div>

                <div class="form-group">
                    <label for="age"><span class="text-light"> Age</span></label>
                    <input type="number" class="form-control" id="age" name="age"  value="{{ $customer->age }}" placeholder="Enter Age">

                </div>
                <div class="form-group">
                    <label for="nidnum"><span class="text-light"> NID Number</span></label>
                    <input type="number"class="form-control" id="nidnum" name="nid_num"  value="{{ $customer->nid_num }}"  placeholder="Enter NID Number">

                </div>

                <div class="form-group">
                    <label for="gender" ><span class="text-light"> Gender</span></label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" value="male" class="custom-control-input" {{ $customer->gender == 'male' ? 'checked': '' }}>
                        <label class="custom-control-label" for="male"><span class="text-light"> Male</span></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" value="female" class="custom-control-input" {{ $customer->gender == 'female' ? 'checked': '' }}>
                        <label class="custom-control-label" for="female"><span class="text-light"> Female</span></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="others" name="gender" value="others" class="custom-control-input" {{ $customer->gender == 'others' ? 'checked': '' }}>
                        <label class="custom-control-label" for="others"><span class="text-light"> Others</span></label>
                    </div>
                    @error('gender') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
                </div>

               {{--  <div class="form-group">
                    <label for="photo"><span class="text-light"> Photo</span></label>
                    <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo"  value="{{ old('photo') }}" >
                     @error('photo') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                </div> --}}

                <div class="form-group">
                    <label for="contact"><span class="text-light"> Contact Number</span></label>
                    <input type="number"class="form-control " id="contact" name="contact" value="{{ $customer->contact }}"  placeholder="Enter Contact Number">

                </div>
                <div class="form-group">
                    <label for="address"><span class="text-light"> Address</span></label>
                    <textarea name="address" id="address" cols="30" rows="5" placeholder="Enter Your Address" class="form-control " >{{ $customer->address }}</textarea>

                </div>

                <div class="form-group">
                    <label for="status" ><span class="text-light"> Status</span></label><br>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="active" name="status" value="active" class="custom-control-input" {{ $customer->status == 'active' ? 'checked': '' }}>
                        <label class="custom-control-label" for="active"><span class="text-light"> Active</span></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="inactive" name="status" value="inactive" class="custom-control-input" {{ $customer->status == 'inactive' ? 'checked': '' }}>
                        <label class="custom-control-label" for="inactive"><span class="text-light"> Inactive</span></label>
                    </div>

                    @error('status') <span class="text-danger font-italic d-block">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio text-right py-4">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
               </div>

           </form>

        </div>

    </div>

</div>

@stop
