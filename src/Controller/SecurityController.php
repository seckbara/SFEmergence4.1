<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends Controller
{
    /**
     * @Route("/", name="security_login")
     * @param AuthenticationUtils $authenticationUtils
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function login(AuthenticationUtils $authenticationUtils, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(UtilisateurType::class, ['email' => $authenticationUtils->getLastUsername()]);
        $error = $authenticationUtils->getLastAuthenticationError();

//        $user = new Utilisateur();
//        $user->setRoles(['ROLE_ADMIN']);
//        $user->setNom("SECK");
//        $user->setPrenom("Bara");
//        $user->setEmail("baraseck@rocketmail.com");
//        $user->setPassword($encoder->encodePassword($user, "mamadou"));
//        $this->getDoctrine()->getManager()->persist($user);
//        $this->getDoctrine()->getManager()->flush();

        if ($this->getUser()){
            return $this->redirectToRoute('index_home');
        }

        return $this->render('Security/login.html.twig', [
            'form' => $form->createView(),
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {

    }
}