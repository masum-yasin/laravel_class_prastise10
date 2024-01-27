<?php

namespace App\View\Composer;

use App\Models\Category;
use Illuminate\View\View;

class FrontendComposer
{

    /**
     * Bind data to the view.
     *
     * @param  \Illuminate\View\View  $view
     * @return void
     */
    public function compose(View $view)
    {

        $categories = Category::all();
        // dd($categories);

        $view->with([
            'categories' => $categories
        ]);
    }
}
