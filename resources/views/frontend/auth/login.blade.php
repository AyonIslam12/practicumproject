@extends('frontend.master')

@section('content')


<section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-8 offset-2">
            <h3 class="text-center text-primary text-uppercase">User Login</h3>

          <form action="#" class="bg-light p-5 contact-form">

            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="Enter Your Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Enter Your Password">
            </div>

            <div class="form-group">

              <button type="submit" class="btn btn-primary btn-lg ">Login</button>
              <span class=" d-inline"> If you haven't any account yet go to ?  <a href="" data-toggle="modal" data-target="#userregistration">Registration</a></span>
            </div>

          </form>

        </div>
      </div>
       <!-- Modal -->
  <div class="modal fade" id="userregistration" tabindex="-1" role="dialog" aria-labelledby="userregistrationTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title text-light" id="userregistrationTitle">User Registration Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
        <div class="modal-body">
             <div class="form-group">
                 <label for="name">Name:</label>
                 <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
             </div>
             <div class="form-group">
                 <label for="email">Email:</label>
                 <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
             </div>
             <div class="form-group">
                 <label for="password">Password:</label>
                 <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
             </div>
        </div>
        <div class="modal-footer bg-secondary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Register</button>
        </div>
    </form>
      </div>
    </div>
  </div>

    </div>
  </section>



@endsection
