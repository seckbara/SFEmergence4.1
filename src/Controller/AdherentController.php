<?php
/**
 * Created by PhpStorm.
 * User: seck
 * Date: 17/11/2018
 * Time: 15:52
 */

namespace App\Controller;


use App\Adherent\AdherentRequest;
use App\Adherent\AdherentRequestHandler;
use App\Form\AdherentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdherentController extends  Controller
{
    /**
     * @Route("/add", name="adherent_add")
     * @param Request $request
     * @param AdherentRequestHandler $adherentRequestHandler
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function add(Request $request, AdherentRequestHandler $adherentRequestHandler)
    {
        $adherent = new AdherentRequest();
        $form = $this->createForm(AdherentType::class, $adherent)->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $photo = $adherent->getNom();
//            $photo->move()
            //$adherent = $adherentRequestHandler->handle($adherent);
        }
        return $this->render("Adherent/adherent.html.twig", [
            'form' => $form->createView(),
            'adherent' => $adherent
        ]);
    }
}