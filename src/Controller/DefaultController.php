<?php

namespace App\Controller;

use stdClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        //Data Binding
        $variable_en_php = "valeur de la variable PHP";


        // Déclaration du tableau $fruits utilisié sur la boucle sur un tableau"
        $fruits = [
            "Pommes",
            "Poires",
            "Kiwis",
        ];

        //Déclaration de l'objet $user utilisé sur la "boucle sur un tableau"
        $users = [
        [        'firstname' => "Bruce",
                'lastname' => "Wayne",
        ],

        [
            'firstname' => "Clark",
            'lastname' => "Kent",
        ],
    ];

        return $this->render('default/index.html.twig', [
            'color' => "red",
            'fruits' => $fruits,
            'users' => $users,
            'variable_pour_twig' => $variable_en_php,
        ]);
    }
}
