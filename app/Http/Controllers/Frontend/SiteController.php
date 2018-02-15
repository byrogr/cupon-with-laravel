<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function page($page = "index")
    {
        $view = 'frontend/' . $page;
        return response()->view($view);
    }
}
