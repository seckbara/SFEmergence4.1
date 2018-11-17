<?php
/**
 * Created by PhpStorm.
 * User: seck
 * Date: 17/11/2018
 * Time: 15:52
 */

namespace App\Controller;


use App\Entity\Adherent;
use App\Form\AdherentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AdherentController extends  Controller
{
    /**
     * @Route("/add", name="adherent_add")
     */
    public function add()
    {
        $adherent = new Adherent();
        $form = $this->createForm(AdherentType::class, $adherent);
        return $this->render("Adherent/adherent.html.twig", [
            'form' => $form->createView()
        ]);
    }
}