<?php

namespace Project\Controllers;

use \Core\Controller;

class ContactsController extends Controller
{
    public function contacts() {
        $this->title = 'Контакты';
        return $this->render('page/contacts', [
            'h2' => 'Как нас найти?',
        ]);

    }


}