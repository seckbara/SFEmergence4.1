<?php

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
            $adherent = $adherentRequestHandler->handle($adherent);
            if(null != $adherent){
                $this->addFlash('notice', "L'adherent a bien été ajouté");
            }
            else{
                $this->addFlash('error', "Une erreur est survénu");
                $this->redirectToRoute('adherent_add');
            }
        }
        return $this->render("Adherent/adherent.html.twig", [
            'form' => $form->createView(),
        ]);
    }
}