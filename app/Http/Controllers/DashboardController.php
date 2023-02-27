<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $dataFeed = new DataFeed();
        return view('pages/dashboard/dashboard', compact('dataFeed'));
    }

    public function empat04()
    {
        return view('pages/utility/404');
    }

    public function blog()
    {
        return view('pages/blog/blog');
    }

    public function blogDetail()
    {
        return view('pages/blog/detail');
    }

    public function calendar()
    {
        return view('pages/calendar/calendar');
    }

    public function campaign()
    {
        return view('pages/campaign/campaign');
    }

    public function feed()
    {
        return view('pages/community/feed');
    }

    public function forum()
    {
        return view('pages/community/forum');
    }

    public function forumPost()
    {
        return view('pages/community/forum-post');
    }

    public function profile()
    {
        return view('pages/community/profile');
    }

    public function user()
    {
        return view('pages/community/users');
    }

    public function cart()
    {
        return view('pages/ecommerce/cart');
    }

    public function customer()
    {
        return view('pages/ecommerce/customers');
    }

    public function invoice()
    {
        return view('pages/ecommerce/invoices');
    }

    public function orders()
    {
        return view('pages/ecommerce/orders');
    }

    public function products()
    {
        return view('pages/ecommerce/products');
    }

    public function inbox()
    {
        return view('pages/inbox/inbox');
    }

    public function message()
    {
        return view('pages/message/message');
    }

    public function account()
    {
        return view('pages/settings/account');
    }

    public function billing()
    {
        return view('pages/settings/billing');
    }

    public function notification()
    {
        return view('pages/settings/notification');
    }

    public function plan()
    {
        return view('pages/settings/plan');
    }

    public function changelog()
    {
        return view('pages/utility/changelog');
    }

    public function faq()
    {
        return view('pages/utility/faq');
    }

    public function roadmap()
    {
        return view('pages/utility/roadmap');
    }
}
