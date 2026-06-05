<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $featuredWorks = [
            [
                'image' => asset('assets/images/ecommerce.png'),
                'title' =>'E-commerce Website',
                'short_description' =>'A fully responsive online store with payment integration.'
            ],
            [
                'image' => asset('assets/images/mobileapp.png'),
                'title' =>'Mobile App Design',
                'short_description' =>'UI/UX design for a fitness tracking application.'
            ],
            [
                'image' =>asset('assets/images/corporate.png'),
                'title' =>'Corporate Website',
                'short_description' =>'A modern website for a financial services company.'
            ],
            [
                'image' =>asset('assets/images/seo.jpg'),
                'title' =>'SEO Services',
                'short_description' =>'A modern website for a financial services company.'
            ],
            [
                'image' =>asset('assets/images/marketing.jpg'),
                'title' =>'Degital Marketing',
                'short_description' =>'A modern website for a financial services company.'
            ],
            [
                'image' =>asset('assets/images/dataanalysis.png'),
                'title' =>'Data Analysis',
                'short_description' =>'A modern website for a financial services company.'
            ],
            
        ];

        return view('home', compact('featuredWorks'));
    }
}
