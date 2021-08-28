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
<!--
        <div class="container">
            <ul class="breadcrumb">
                <li>Home</li>
            </ul>
        </div>
-->
@yield('discounts')

<!--        <section class="discounts">
            <div class="separator">
                <div class="line"></div>
                <h2>Discounts</h2>
                <div class="line"></div>
            </div>

            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="/image/slider/1.png">
                </div>

                <div class="mySlides fade">
                    <img src="/image/slider/2.png">
                </div>

                <div class="mySlides fade">
                    <img src="/image/slider/3.png">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
        </section>
-->

@yield('popular-selection')
<!--
        <section class="popular-selection">
            <div class="separator">
                <div class="line"></div>
                <h2>Pizza</h2>
                <div class="line"></div>
            </div>
            <div class="container">
                <div class="popular-selection_list">
                    <div class="popular-selection_item">
                        <p class="popular-selection_item-title">Marinara</p>
                        <p class="popular-selection_item-category">Category: <span>Vegetarian pizza</span></p>
                        <img src="/image/pizza/marinara.png">
                        <p class="popular-selection_item-ingredients">Ingredients: <span>pomodoro sauce, olive oil,
                                oregano</span></p>
                        <div class="popular-selection_item-details">
                            <div class="item-details_left">
                                <p class="item-details_details">Weight: <span>280</span>g</p>
                                <p class="item-details_details">Calories: <span>467</span></p>
                                <p class="item-details_details">Popularity: <span>20</span></p>
                            </div>
                            <div class="item-details_right">
                                <p class="item-details_details">Proteins: <span>17</span></p>
                                <p class="item-details_details">Fats: <span>7</span></p>
                                <p class="item-details_details">Carbohydrates: <span>84</span></p>
                            </div>
                        </div>
                        <p class="popular-selection_item-price">Price: <span>32</span> calins</p>
                    </div>

                    <div class="popular-selection_item">
                        <p class="popular-selection_item-title">Lenten</p>
                        <p class="popular-selection_item-category">Category: <span>Vegetarian pizza</span></p>
                        <img src="/image/pizza/lenten.png">
                        <p class="popular-selection_item-ingredients">Ingredients: <span>pomodoro sauce, zucchini,
                                pickled artichoke, tajas olives, bell peppers, sun-dried tomatoes, dried olives, olive
                                oil, basil</span></p>
                        <div class="popular-selection_item-details">
                            <div class="item-details_left">
                                <p class="item-details_details">Weight: <span>460</span>g</p>
                                <p class="item-details_details">Calories: <span>681</span></p>
                                <p class="item-details_details">Popularity: <span>12</span></p>
                            </div>
                            <div class="item-details_right">
                                <p class="item-details_details">Proteins: <span>22</span></p>
                                <p class="item-details_details">Fats: <span>21</span></p>
                                <p class="item-details_details">Carbohydrates: <span>101</span></p>
                            </div>
                        </div>
                        <p class="popular-selection_item-price">Price: <span>71</span> calins</p>
                    </div>

                    <div class="popular-selection_item">
                        <p class="popular-selection_item-title">Pollo grigliato e pesto</p>
                        <p class="popular-selection_item-category">Category: <span>Non-vegetarian pizza</span></p>
                        <img src="/image/pizza/grigliato.png">
                        <p class="popular-selection_item-ingredients">Ingredients: <span>tomato sauce, mozzarella,
                                roasted peppers, red onion, chicken breast, pesto sauce</span></p>
                        <div class="popular-selection_item-details">
                            <div class="item-details_left">
                                <p class="item-details_details">Weight: <span>500</span>g</p>
                                <p class="item-details_details">Calories: <span>1024</span></p>
                                <p class="item-details_details">Popularity: <span>126</span></p>
                            </div>
                            <div class="item-details_right">
                                <p class="item-details_details">Proteins: <span>53</span></p>
                                <p class="item-details_details">Fats: <span>51</span></p>
                                <p class="item-details_details">Carbohydrates: <span>89</span></p>
                            </div>
                        </div>
                        <p class="popular-selection_item-price">Price: <span>76</span> calins</p>
                    </div>

                    <div class="popular-selection_item">
                        <p class="popular-selection_item-title">Siciliana</p>
                        <p class="popular-selection_item-category">Category: <span>Seafood pizza</span></p>
                        <img src="/image/pizza/siciliana.png">
                        <p class="popular-selection_item-ingredients">Ingredients: <span>tomato sauce, mozzarella,
                                anchovies, capers, oregano</span></p>
                        <div class="popular-selection_item-details">
                            <div class="item-details_left">
                                <p class="item-details_details">Weight: <span>390</span>g</p>
                                <p class="item-details_details">Calories: <span>839</span></p>
                                <p class="item-details_details">Popularity: <span>43</span></p>
                            </div>
                            <div class="item-details_right">
                                <p class="item-details_details">Proteins: <span>41</span></p>
                                <p class="item-details_details">Fats: <span>39</span></p>
                                <p class="item-details_details">Carbohydrates: <span>82</span></p>
                            </div>
                        </div>
                        <p class="popular-selection_item-price">Price: <span>63</span> calins</p>
                    </div>

                    <div class="popular-selection_item">
                        <p class="popular-selection_item-title">Four cheese</p>
                        <p class="popular-selection_item-category">Category: <span>Non-vegetarian pizza</span></p>
                        <img src="/image/pizza/four-cheese.png">
                        <p class="popular-selection_item-ingredients">Ingredients: <span>mozzarella, gorgonzola,
                                taleggio, smoked scamorza</span></p>
                        <div class="popular-selection_item-details">
                            <div class="item-details_left">
                                <p class="item-details_details">Weight: <span>380</span>g</p>
                                <p class="item-details_details">Calories: <span>902</span></p>
                                <p class="item-details_details">Popularity: <span>8</span></p>
                            </div>
                            <div class="item-details_right">
                                <p class="item-details_details">Proteins: <span>44</span></p>
                                <p class="item-details_details">Fats: <span>43</span></p>
                                <p class="item-details_details">Carbohydrates: <span>83</span></p>
                            </div>
                        </div>
                        <p class="popular-selection_item-price">Price: <span>78</span> calins</p>
                    </div>

                    <div class="popular-selection_item">
                        <p class="popular-selection_item-title">Trentina</p>
                        <p class="popular-selection_item-category">Category: <span>Non-vegetarian pizza</span></p>
                        <img src="/image/pizza/trentina.png">
                        <p class="popular-selection_item-ingredients">Ingredients: <span>tomato sauce, mozzarella,
                                speck, rocket, grana padano cheese</span></p>
                        <div class="popular-selection_item-details">
                            <div class="item-details_left">
                                <p class="item-details_details">Weight: <span>410</span>g</p>
                                <p class="item-details_details">Calories: <span>1254</span></p>
                                <p class="item-details_details">Popularity: <span>10</span></p>
                            </div>
                            <div class="item-details_right">
                                <p class="item-details_details">Proteins: <span>42</span></p>
                                <p class="item-details_details">Fats: <span>84</span></p>
                                <p class="item-details_details">Carbohydrates: <span>82</span></p>
                            </div>
                        </div>
                        <p class="popular-selection_item-price">Price: <span>80</span> calins</p>
                    </div>

                </div>
            </div>

        </section>
-->
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