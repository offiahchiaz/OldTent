<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Short Term Rental, Apartments, Homes | @yield('title', 'Tent')</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css-new/sb-admin-2.min.css" rel="stylesheet">
        <link href="css-new/custom-css.css" rel="stylesheet">

    </head>
    <body class="bg-gradient-primary">
        
        <main class="py-4">
            @yield('content')
        </main>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js-new/sb-admin-2.min.js"></script>

        <script>
            function userFunction() {
                // Get the checkbox
                const radioMember = document.getElementById("member");
                const radioHost = document.getElementById("host");
                // Get the output text
                const textMember = document.getElementById("displayMember");
                const textHost = document.getElementById("displayHost");
    
                // If the checkbox is checked, display the output text
                if (radioMember.checked == true) {
                    textMember.style.display = "block";
                    textHost.style.display = "none";
                } else if (radioHost.checked == true) {
                    textHost.style.display = "block";
                    textMember.style.display = "none";
                } else {
                    textMember.style.display = "none";
                    textHost.style.display = "none";
                }
            }
    
        </script>
    </body>
</html>    