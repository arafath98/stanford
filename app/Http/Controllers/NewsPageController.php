<?php

namespace App\Http\Controllers;

use App\News;

class NewsPageController extends Controller
{

    public function showNewsPage(){
        $news = News::get();

        $lines = floor( count($news) / 4);
        $left = count($news) - ( $lines * 4 );
        $toalNews = count($news);

        switch ($left) {
            case 1:
                $class = "col-12 col-sm-6 col-lg-4";
                break;
            case 2:
                $class = "col-12 col-sm-6";
                break;
            case 3:
                $class = "col-12 col-sm-6 col-lg-4";
                break;
            default:
                $class = "col";
                break;
        }


        $page_title = 'News';

        return view('frontend.pages.news', \get_defined_vars());
    }

}
