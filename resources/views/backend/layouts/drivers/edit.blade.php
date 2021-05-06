@extends('backend.master')


@section('title')
Brand-Edit
@stop


@section('content')

<div class="row">
    <div class="col-8 offset-2">
        <div class="card ">
            <div class="card-header bg-info">
              <p class="text-light font-weight-bold text-center">  Driver Update Form.</p>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.driver.update',$driver->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  id="name" name="name"   value="{{ $driver->name }}">
                        @error('name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email Address</label>
                      <input type="email" class="form-control @error('name')is-invalid @enderror" id="email" name="email"   value="{{ $driver->email }}">
                      @error('email') <span class="text-danger font-italic">{{ $message }}</span> @enderror


                    </div>
                    <div class="form-group">
                        <label for="image">Upload Photo</label>
                       <input type="file" name="image" id="image" class=" form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact Number</label>
                        <input type="number"class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $driver->phone }}">
                        @error('phone') <span class="text-danger text-italic">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="nid_number">NID Number</label>
                        <input type="number"class="form-control @error('nid_number') is-invalid @enderror" id="nid_number" name="nid_number" value="{{ $driver->nid_number }}">
                        @error('nid_number') <span class="text-danger text-italic">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ $driver->address }}</textarea>
                        @error('address') <span class="text-danger text-italic">{{ $message }}</span>@enderror
                    </div>



                <div class="card-footer bg-info text-right">
                    <a href="{{ route('admin.driver.list') }}" class="btn btn-secondary text-light" data-bs-dismiss="modal">Back</a>
                    <button type="submit"  class="btn btn-secondary">Update</button>
                </div>

            </form>
            </div>

          </div>

      </div>
</div>
@stop
