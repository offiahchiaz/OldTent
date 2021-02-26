{{-- New Design --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tent | Easier living solutions in Nigeria</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

        {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
        {{-- <link href="https://fonts.googleapis.com/css2?family=Eczar:wght@800&display=swap" rel="stylesheet">  --}}

    <!-- Custom styles for this template-->
    <link href="css-new/sb-admin-2.min.css" rel="stylesheet">
    <link href="css-new/custom-css.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4 fixed-top" style="padding-bottom: 15px;">
                    <div style="padding-left: 100px;">
                        <a class="navbar-brand" href="/"><h4>Tent</h4></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item no-arrow">
                            <a class="nav-link" style="color: #413e5f;" href="{{ url('/apartments') }}">Apartments</a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item no-arrow">
                                    <a class="nav-link" style="color: #413e5f;" href="{{ url('/home') }}">Home</a>
                                </li>
                                
                                @else
                                    <li class="nav-item no-arrow">
                                        <a  class="nav-link" style="color: #413e5f;" href="{{ route('login') }}">Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                    <li class="nav-item no-arrow">
                                        <a class="nav-link" style="color: #413e5f;" href="{{ route('register') }}">Register</a>
                                    </li>
                                    @endif
                            @endauth
                        @endif
                      </ul>
                    </div>
                  </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container" style="padding-top: 150px;">

                    <!-- Page Heading -->
                    {{-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> --}}

                    <div class="row mb-4">
                        <div class="col-md-8 mb-4 pr-10">
                           

                            <div>
                                <p id="welcome-p">
                                    Find the most<br>
                                    comfortable living spaces
                                    <span id="welcome-span">.</span>
                                </p>

                                <div class="input-group mb-3">
                                    <input type="text" id="search-text" class="form-control" placeholder="Where would you love to stay?" 
                                        aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                      <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                                    </div>
                                  </div>
                            </div>

                            <div id="user-testimonial">
                                <div id="profile-div"></div>
                                <p id="profile-review">Thoroughly enjoyed my Spleet space, ticks all the boxes. 😁</p>
                                <p id="profile-name">Ifeanyi</p>
                                <small id="member-designation">Tent member</small>
                            </div>


                        </div>
                        <div class="col-md-4">
                            <div id="welcome-div"></div>
                            {{-- <img class="rounded" src="{{ asset('img/welcome2.png')}}" alt="" width="400" height="600"> --}}
                            
                        </div>
                    </div>
                </div>
                <!-- /.container -->

                <div style="background: #fff; padding-top: 40px;">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-10 mb-4">
                                <p id="p-whyTent_subtitle">Why Tent</p>

                                <p id="p-whyTent_title">
                                    Vibrant cities.<br>
                                    Beautiful and move-in ready homes.
                                </p>

                                <p id="p-whyTent_text">
                                    We offer you access to premium residential solutions, with as little hassle as possible. We do<br> 
                                    what we can to help you get the best out of living in the city, no matter how short or long the<br> 
                                    space between your stay.
                                </p>
                            </div>

                            
                            
                           
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- End of Main Content -->

            {{-- <div class="container bg-white">
                <div class="row">
                    <p id="p-whyTent_subtitle">Why Tent</p>
                    <p id="p-whyTent_title">
                        Vibrant cities.<br>
                        Beautiful and move-in ready homes.
                    </p>
                    <p id="p-whyTent_text">
                        We offer you access to premium residential solutions, with as little hassle as possible. We do 
                        what we can to help you get the best out of living in the city, no matter how short or long the 
                        space between your stay.
                    </p>
                </div>
            </div> --}}

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js-new/sb-admin-2.min.js"></script>

</body>

</html>
