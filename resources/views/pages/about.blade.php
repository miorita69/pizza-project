@extends('layout')

@section('pageTitle')
    About Pizza Mircea
@endsection

@section('content')
    <section class="about">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
        
        <div class="separator">
            <div class="line"></div>
            <h2>About Us</h2>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="about-panel">
                <div class="about-panel_left">
                    <img src="articles/about.png">
                </div>
                <div class="about-panel_right">
                    <p>Pizza Mircea is an author's, innovative dish, created and patented by the guru of Italian
                        cuisine, maestro Valentino Bontempi.</p>
                    <p>Born Italian, born in the Verona area, Valentino studied the history, culture and traditions
                        of Italian cuisine and the Roman Empire for many years. During this gastronomic "journey"
                        Valentino drew attention to the unusual hearty and simple flatbread, popular during the
                        Roman Empire. Unfortunately, its recipe and name have been lost. But for a real maestro,
                        nothing is impossible. So, Valentino found out that the ancient miracle of gastronomy Roman
                        peasants made from crushed grain, salt and aromatic herbs and spices, and baked it on hot
                        coals. It turned out to be a kind of crispy cake. The original mixture consisted of barley,
                        oats and millet. Later, wild wheat was added. This simple dish was treated to priests and
                        monks: everything that the peasants were rich with was laid out on the most tender crispy
                        cake: vegetables, fruits, meat, and it turned out to be an excellent, pleasing to God, light
                        lunch.</p>
                    <p>Since the recipe and the name of the historical dish have not survived, Valentino, inspired
                        by history, created his own original recipe, which was named PIZZA Mircea®.</p>
                </div>
            </div>
        </div>
    </section>
@endsection