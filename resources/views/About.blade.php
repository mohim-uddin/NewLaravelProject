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
                    <li class="nav-item"><a class="nav-link" href="#">About Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Me</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                </ul>
                </div>
            </nav>
        </header>
        <!-- End header section -->

            <div class="main-section">
                            <!-- Start about section -->
                <div class="about-section mt-2">
                    <div class="jumbotron pt-2">
                        <div class="title">
                            <h3 class="text-center font-weight-bold">About Me</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <img class="img-fluid rounded-circle" style="width:200px; height:200px;" src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                            </div>
                            <div class="col-lg-9">
                                Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Eos magni officia non vel error in sequi exercitationem itaque enim?up btn-group-vertical"
                                    <button class="d-block bg-success mb-3" data-toggle="collapse" data-target="#demo">Learn More</button>
                                        <div id="demo" class="collapse">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio quasi enim sapiente nam eius quidem, blanditiis rem dolorem porro? Impedit.  
                                        </div> 
                                    <button class="btn btn-outline-dark btn-sm mb-2">download cv</button>   
                                    <div class="alert alert-success alert-dismissible">
                                        you miss somethings!!
                                        <a href="#">Click here</a>
                                        <button class="close" data-dismiss="alert">&times;</button>
                                    </div>  
                            </div>

            
                        </div>

                    </div>
                </div>
                <!-- End about section -->
            </div>
        </div>
            <!-- bootstrap js cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>
