<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $articles;

    public function __construct()
    {
        $this->articles=[
            [
                'id' => 1,
                'name' => 'Marketing Ideas for Pizza Owners',
                'category' => 'Pizza Restaurant',
                'created_at' => '15/09/2020',
                'short_description' => 'Proper marketing can bring in more customers, but it also can be costly. To start an effective marketing campaign, you will need to balance the cost with the return on investment. Think about your customer base and what types of marketing might appeal to them. The more buzz you can create about your pizza, the more pies you will sell. ',
            ],
            [
                'id' => 2,
                'name' => 'How to Market a Fast-Food Restaurant',
                'category' => 'Fast-Food Restaurant',
                'created_at' => '12/02/2021',
                'short_description' => 'A fast-food restaurant relies on a high volume of repeat business. To effectively market such a business requires quick delivery of a competitively priced product and the ability to serve customers in a timely and friendly manner. If your fast-food business is part of a franchise, you should be able to take advantage of group or co-op advertising to market your restaurant.',
            ],
            [
                'id' => 3,
                'name' => 'Inexpensive Advertising Ideas for a Bakery Cafe',
                'category' => 'Fast-Food Restaurant',
                'created_at' => '05/03/2021',
                'short_description' => 'Whether you offer the tastiest donuts in the county, or the freshest coffee in town, your community needs to know about it. This is made possible through advertising. Television, newspaper and radio advertising can outstretch your budget more than you would like. Fortunately, thanks to the evolution of the Internet and social media you can now reach out to potential customers in a variety of inexpensive ways.',
            ],
            [
                'id' => 4,
                'name' => 'What Can Help Bring in Business for a Pizza Restaurant?',
                'category' => 'Pizza Restaurant',
                'created_at' => '23/04/2021',
                'short_description' => "Your restaurant may have the best pizza this side of the Mississippi. Unfortunately, customers won't know it until you get them in the door. If you want to bring in more local customers, try connecting with other small businesses. Attend community business meetings and look for opportunities to cross-promote with other successful businesses.",
            ],
            [
                'id' => 5,
                'name' => 'How a Restaurant Can Reach a Large Target Market',
                'category' => 'Clasic Restaurant',
                'created_at' => '18/05/2021',
                'short_description' => "Although a passion for food might lead you into the restaurant business, that alone won't make for a successful business. The number restaurants in the United States has seen a decline in recent years, but the New York Times reports that over 550,000 restaurants were operating in 2010. If you want to turn a profit and stand out from the crowd, you'll need to appeal to a specific demographic through selective advertising techniques and a favorable location.",
            ],
            [
                'id' => 6,
                'name' => 'Grassroots Marketing Ideas for Restaurants',
                'category' => 'Clasic Restaurant',
                'created_at' => '09/07/2021',
                'short_description' => "Grassroots marketing campaigns rely on unconventional advertising methods that reach potential consumers on a personal level. Instead of relying on traditional media channels, the business goes directly to the customers to get their attention and encourages word-of-mouth to expand the client base. As a restaurant owner, becoming involved in the community and making patrons feel connected to the restaurant plays into the grassroots campaign.",
            ],
        ];
    }


    public function index()
    {
        return view ('pages/blog-list',['articles'=>$this->articles]); 
        
    }
    public function show(int $articleId)
    {
        $article = null;
        foreach ($this->articles as $articleItem) {
            if ($articleItem['id'] === $articleId) {
                $article = $articleItem;
            }
        }

        if (!$article) {
            abort(404);
            throw new NotFoundHttpException('Article not found !!');
        };

        return view('pages/blog-article', ['article' => $article]);
    }

}
