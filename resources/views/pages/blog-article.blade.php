@extends('layout')

@section('pageTitle')
    Blog Pizza Mircea
@endsection

@section ('linkBlog')
    active
@endsection

@section('content')
    <section class="article">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
                <li>Marketing Ideas for Pizza Owners</li>
            </ul>
        </div>

        <div class="separator">
            <div class="line"></div>
            <h2>Marketing Ideas for Pizza Owners</h2>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="article_item">
                <p class="article_category">Category: <span>Marketing</span></p>
                <p class="article_data">Data: <span>15/09/2020</span></p>
                <p class="article_paragraf">Coupons</p>
                <p class="article_text">The coupon efforts of one pizza parlor helped increase yearly sales by
                    $200,000 in a very small town, according to Pizza Marketing Quarterly. Coupons can bring
                    customers to a business, but as Jennifer Wiebe of Speedline Solutions found through extensive
                    interviewing, there's no standard coupon that works across the board. Some areas will respond
                    better to a buy-one, get-one free offer while others will respond to a discount offer. The key
                    to successful couponing is to test what works best in your area. Print fliers with different
                    types of coupons and gauge which ones customers use the most. Send the fliers directly to
                    mailboxes or hang them on doors.</p>
                <p class="article_paragraf">Charity Joint Ventures</p>
                <p class="article_text">Find a local charity that you can work with. The charity refers customers to
                    you by sending out special fliers to its members. In turn, you donate a portion of sales to the
                    charity. For example, you could work with the Houston YMCA or a school district in your area.
                </p>
                <p class="article_paragraf">Community Events</p>
                <p class="article_text">Have a presence at events in your community to increase awareness about your
                    pizza brand. Become a sponsor of a summer music festival, for example, and sell your pizza
                    inside the venue. Join an event that focuses on local restaurants, such as the Houston Taste of
                    the Nation event. Give out free samples along with coupons for their next purchases.</p>
                <p class="article_paragraf">Social Media Marketing</p>
                <p class="article_text">Take your marketing online to get more customers. Ask customers to sign up
                    for a mailing list that will make them eligible for special deals and coupons. When they opt
                    into receiving e-mail, advertisements can be sent to them regularly. Build a profile for your
                    pizza business on social networking websites and ask customers to "friend" you. When a customer
                    does this, all of his friends see that he did that and may click through to your profile. Offer
                    special deals on the profile and remind customers that it's a good time to buy pizza.</p>
                <p class="article_paragraf">Magnets</p>
                <p class="article_text">There's stiff competition in areas such as Houston, Dallas and Austin. You
                    may need to work harder to get potential customers to remember your offers. One way is to give
                    away magnets that have your shop's phone number and address listed. Customers are likely to keep
                    magnets, and when they want a pizza, your number will be front and center.</p>
            </div>
            <a class="back" href="/blog">Back</a>
        </div>

    </section>
@endsection