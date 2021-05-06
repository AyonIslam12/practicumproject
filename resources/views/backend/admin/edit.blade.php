@extends('backend.master')

@section('title')
admin-profile
@stop


@section('content')


<div class="row">
    <div class="col-md-8 col-sm-12 offset-md-2">
        <div class="card ">
            <div class="card-header bg-success">
            <h4 class="text-light text-center font-weight-bold">Update Your Information</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('admin.profile.update',auth()->user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" value="{{ $adminEdit->name }}" class="form-control">
                      @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                    </div>
                  <div class="form-group">
                      <label for="phone">Contact Number</label>
                      <input type="number" name="phone" id="phone" value="0{{ $adminEdit->phone }}" class="form-control">
                      @error('phone') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                    </div>
                  <div class="form-group">
                      <label for="address">Your Address</label>
                     <textarea name="address" id="address" rows="3" class="form-control"  >{{ $adminEdit->address }}</textarea>
                     @error('address') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                    </div>
                  <div class="form-group">
                    <label for="image">Upload Photo</label>
                   <input type="file" name="image" id="image" class="form-control">
                </div>




            </div>
            <div class="card-footer bg-success">
              <a href="{{ route('admin.profile') }}" class="btn btn-secondary"> Back</a>
              <button type="submit" class="btn btn-secondary">Update</button>
            </div>
        </form>
          </div>

    </div>

</div>
@stop
