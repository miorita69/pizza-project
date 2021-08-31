@extends('layout')

@section('pageTitle')
    Home Pizza Mircea
@endsection

@section ('linkHome')
    active
@endsection

@section('breadcrumbs')
    <div class="container">
        <ul class="breadcrumb">
            <li>Home</li>
        </ul>
    </div>
@endsection

@section('discounts')
    <section class="discounts">
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
@endsection

@section('popular-selection')
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
@endsection
