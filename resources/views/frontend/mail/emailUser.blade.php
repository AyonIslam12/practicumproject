<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Email Notification</title>
  </head>
  <body>
    <div class="row">
        <div class="col-12 ">
            <div class="">
                <div class="titile bg-success text-light">
                    <h3 class="text-success">Your Account Created Successfully,Now You Can Login Sarkar Car Rental Website...</h3>
                </div>
                <h4>Your Given Information :</h4>
                <div class="booking-image">

                    <td> <img width="150px" class="img-thumbnail" src="{{ asset('uploads/users/'.$userData->image) }}" alt="No-Image"></td>

                </div>
                <p class="list_title mb_30"><span class="font-weight_bolder">Name : </span>  {{ $userData->name}}</p>
                <p class="list_title mb_30"><span class="font-weight_bolder">Email : </span>  {{ $userData->email}}</p>
                <p class="list_title mb_30"><span class="font-weight_bolder">Contact Number : </span>  {{ $userData->phone}}</p>
                <p class="list_title mb_30"><span class="font-weight_bolder">Address : </span>  {{ $userData->address}}</p>

               </div>


        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
