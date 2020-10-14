<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

            <!-- bootstrap css cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

      

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
                    <!-- start header section -->
        <header>
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
                <a class="navbar-brand" href="#">
                    <img src="/C:\Users\USER\Desktop\bootstrap4\m.png" alt="logo" style="width: 60px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/About')}}">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog.page')}}">Blog</a></li>
                </ul>
                </div>
            </nav>
        </header>
        <!-- End header section -->

            <div class="main-section">

                            <!-- Start contact section -->
            <div class="contact-section mt-3 mb-3">
                <div class="title">
                    <h3 class="text-center font-weight-bold">Contact Me</h3>
                </div>              
                 <form action="/action_page.php" class="was-validated">
                  <div class="form-group">
                    <label for="uname">Username:</label>
                    <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-check-inline">
                    <lable class="form-check-label">
                        <input type="checkbox" class="form-check-input">Bangladesh
                    </lable>
                  </div>
                  <div class="form-check-inline">
                    <lable class="form-check-label">
                        <input type="checkbox" class="form-check-input">India
                    </lable>
                  </div>
                  <div class="form-check-inline">
                    <lable class="form-check-label">
                        <input type="checkbox" class="form-check-input">Pakistan
                    </lable>
                  </div>
                   <input type="range" class="form-control-range">
                    <input type="file" class="form-control-file border">                  
                  <div class="form-group">
                      <label for="comment" required>Comment:</label>
                      <textarea class="form-control" rows="5" id="comment" required></textarea>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                  </div>                                   
                  <div class="form-group form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Check this checkbox to continue.</div>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form> 
            </div>
            <!-- End contact Section -->
            </div>
        </div>
            <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
