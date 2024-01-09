<?php
namespace App\Controller;

use App\Repository\PizzaRepository;

class PizzaController extends \Core\Controller\Controller
{
    public function index()
    {

        $pizzaRepository = new PizzaRepository();
        $pizzas = $pizzaRepository->findAll();


        return $this->render("pizza/index",["pageTitle"=>"Les Pizzas de la mama","pizzas"=>$pizzas]);
    }


}