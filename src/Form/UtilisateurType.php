<?php
/**
 * Created by PhpStorm.
 * User: seck
 * Date: 01/12/2018
 * Time: 15:15
 */

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class,
            [
                'label' => 'Votre adresse email'
            ])
            ->add('password', PasswordType::class,
                [
                    'label' => 'Votre mots de passe'
                ])
            ->add('submit', SubmitType::class, [
                'label' => 'Se connecter'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null
        ]);
    }

    public function getBlockPrefix()
    {
        return 'app_login';
    }


}