<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function edugames(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    }

    public function kidsgames(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    }

    public function story(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    }

    public function songs(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    }
}
