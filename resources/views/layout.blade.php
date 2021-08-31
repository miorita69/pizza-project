<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle', 'Pizza Mircea')</title>

    <link rel="stylesheet" href="/css/style.css" type="text/css">

    <!-- add icon link - default favicon -->
    <link rel="shortcut icon" href="/image/icons/favicon-16x16.png" type="image/x-icon">
    <!-- wideley used favicon -->
    <link rel="icon" href="/image/icons/favicon-32x32.png" sizes="32x32" type="image/png">
    <!-- for apple mobile devices -->
    <link rel="/apple-touch-icon-precomposed" href="image/icons/apple-touch-icon-152x152-precomposed.png"
        type="image/png" sizes="152x152">
    <link rel="/apple-touch-icon-precomposed" href="image/icons/apple-touch-icon-152x152-precomposed.png"
        type="image/png" sizes="120x120">
    <!-- google tv favicon -->
    <link rel="icon" href="/image/icons/favicon-googletv.png" sizes="96x96" type="image/png">
</head>
<body>

    @include('header')

    <main>
        @yield('content')

        @yield('breadcrumbs')

        @yield('discounts')

        @yield('popular-selection')
    </main>

    @include('footer')

    <script>

        function navFunction() {
            let x = document.getElementById("mainNav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        function burgerFunction(x) {
            x.classList.toggle("change");
        }




        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");

            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }



    </script>
</body>

</html>