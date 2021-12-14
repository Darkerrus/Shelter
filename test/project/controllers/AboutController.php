<?php

namespace Project\Controllers;

use \Core\Controller;

class AboutController extends Controller
{
    public function about() {
        $this->title = 'О приюте';
        return $this->render('page/about', [
            'h2' => 'О приюте',
        ]);

    }

}