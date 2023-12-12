<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link href="../css/vendor/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendor/fontawesome.css">
    <link rel="stylesheet" href="css/vendor/brands.css">
    <link rel="stylesheet" href="css/vendor/regular.css">
    <link rel="stylesheet" href="css/vendor/solid.css">
    <link rel="stylesheet" href="css/vendor/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/logotni.png">
    <title>Apk Bangsis - {{ $title }}</title>
</head>

<body>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper-script.js"></script>
    <script src="js/submit-form.js"></script>
    <script src="js/vendor/isotope.pkgd.min.js"></script>

    <!-- Header -->
    @include('partials.banner')
    @include('partials.navbar')
    
    <div class="container">
        @yield('container')
    </div>
    

    <script src="js/vendor/fslightbox.js"></script>
    <script src="js/masonry.js"></script>
</body>

</html>