<?php

namespace Project\Controllers;

use \Core\Controller;

class MainController extends Controller
{
    public function main() {
        $this->title = 'Приют "Добрые ручки"';
        return $this->render('main/index', [
            'h2' => 'Помогите бездомным животным',
            ]);

    }

}