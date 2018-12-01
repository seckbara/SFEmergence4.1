<?php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends  Controller
{
    /**
     * @Route("/home", name="index_home")
     */
    public function home()
    {
        return $this->render("index/home.html.twig");
    }
}