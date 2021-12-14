<?php

namespace Project\Controllers;
use \Project\Models\Animals;
use \Core\Controller;

class AnimalsController extends Controller
{
    public function oneAnimal($params)
    {
        $this->title = 'Страница';
        $page = (new Animals()) -> getById($params['id']);
        return $this->render('page/oneAnimal', [
            'page' => $page,
            'h2' => $page['name'],
            'h1' => $page['kind'],
            'biography' => $page['biography'],
            'photo' => $page['img'],
        ]);
    }

    public function allAnimals()
    {
        $this->title = 'Список всех страниц';

        $pages = (new Animals()) -> getAll();
        return $this->render('page/allAnimals', [
            'pages' => $pages,
            'h1' => $this->title
        ]);
    }

}