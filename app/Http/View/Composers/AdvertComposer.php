<?php


namespace App\Http\View\Composers;


use App\Advert;
use Illuminate\View\View;

class AdvertComposer
{

    public function compose(View $view)
    {
        $adverts = Advert::orderBy('created_at', 'DESC')->get();

        $adverts = $adverts->each(function ($advert) {
            return $advert->load('image');
        });

        $view->with('adverts', $adverts);
    }

}
