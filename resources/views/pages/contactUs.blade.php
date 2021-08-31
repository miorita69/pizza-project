@extends('layout')

@section('pageTitle')
    Contact Us Pizza Mircea
@endsection

@section ('linkContact')
    active
@endsection

@section('content')
    <section class="contact">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
        
        <div class="separator">
            <div class="line"></div>
            <h2>Contact Us</h2>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="contact-container">

                <div class="contact-container__left">
                    <div class="separator">
                        <div class="line"></div>
                        <h3>Get in touch</h3>
                        <div class="line"></div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form action="/store-contact-info" method="POST" name="contact-form">

                        <label class="contact-form__label" for="email">Email:</label>
                        <input class="contact-form__input" type="email" id="email" required="required" placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <label class="contact-form__label" for="name">Name:</label>
                        <input class="contact-form__input" type="text" id="name" required="required" placeholder="Nume">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <label class="contact-form__label" for="departament">Departament:</label>
                        <select class="contact-form__input" type="text" id="departament" placeholder="Nume">
                            <option value="">Selecteaza un departament</option>
                            <option value="administrative">Administrativ</option>
                            <option value="acounting">Contabilitate</option>
                            <option value="depTechnical">Departamentul tehnic</option>
                            <option value="depLogistic">Departamentul logistic</option>
                        </select>

                        <label class="contact-form__label" for="message">Message:</label>
                        <textarea  class="contact-form__input" id="message" name="message" rows="10" cols="30"></textarea>

                        <input class="contact-form__input-terms" type="checkbox" id="readTerms" value="1">
                        <label class="contact-form__label-terms" for="readTerms">Am citit mesajul</label>
                        @error('readTerms')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                        <button class="contact-form__button" type="submit">Trimite mesaj</button>
                    </form>
                </div>

                <div class="contact-container__right">

                    <div class="separator">
                        <div class="line"></div>
                        <h3>Contact details</h3>
                        <div class="line"></div>
                    </div>

                    <p class="contact-details"><span>Adress:</span> 11, street Miorita, mun.Chisinau, MD-2028, Republic of Moldova</p>
                    <p class="contact-details"><span>Phone:</span> (+022) 108 108, +062 108 108</p>
                    <p class="contact-details"><span>Email:</span> contact@pizza-mircea.com</p>
                    <p class="contact-details"><span>Web:</span> www.pizza-mircea.com</p>


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1924.3904571308733!2d28.81817663488841!3d46.99117257159619!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97e94c4f3b66f%3A0x6b186de6b232e505!2zU3RyYWRhIE1pb3JpxaNhIDExLCBDaGnImWluxIN1LCBNb2xkb3Zh!5e0!3m2!1sen!2s!4v1630339552452!5m2!1sen!2s" 
                        width="300" height="225" style="border:1px solid lightgrey;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>

            </div>

        </div>
    </section>
@endsection