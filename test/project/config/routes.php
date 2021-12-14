<?php
	use \Core\Route;
	
	return [


        new Route('/index/', 'main', 'main'),

        new Route('/about/', 'about', 'about'),

        new Route('/contacts/', 'contacts', 'contacts'),

        new Route('/animals/', 'animals', 'allAnimals'),

        new Route('/animal/:id', 'animals', 'oneAnimal'),


    ];
	
