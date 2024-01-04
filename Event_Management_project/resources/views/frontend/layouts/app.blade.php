<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Eventiz - Event Conference HTML Templates</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="frontend/assets/images/favicon.png">
    <!-- Bootstrap core CSS -->
    <link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="frontend/assets/css/style.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="frontend/assets/css/plugin.css" rel="stylesheet" type="text/css">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="fonts/line-icons.css" type="text/css">
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"></div>
</div>
<!-- Preloader Ends -->
    

    <!-- header starts -->
    @include('frontend.layouts.header')
    <!-- header ends -->


   @yield('content')

    <!-- footer starts -->
   @include('frontend.layouts.footer')
    <!-- footer ends -->

    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    


    <!-- *Scripts* -->
    <script src="frontend/assets/js/jquery-3.5.1.min.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/plugin.js"></script>
    <script src="frontend/assets/js/main.js"></script>
    <script src="frontend/assets/js/custom-nav.js"></script>
</body>

</html>