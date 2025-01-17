<?php

namespace App\View\Composers;

use Illuminate\View\View;

class CartComposer
{
    public function compose(View $view) {
        $view->with('cart_content', ['products_count' => random_int(1, 100), 'amount' => random_int(1, 100000)]);
    }
}
