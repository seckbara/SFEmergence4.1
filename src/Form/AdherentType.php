<?php
namespace App\Form;


use App\Adherent\AdherentRequest;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdherentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class ,
                [
                    'required' => true,
                    'label' => 'Nom',
                    'attr' => [
                        'placeholder' => 'Veuillez saisir votre nom'
                    ]
                ])
            ->add('prenom', TextType::class ,
                [
                    'required' => true,
                    'label' => 'Prenom',
                    'attr' => [
                        'placeholder' => 'Veuillez saisir votre prenom'
                    ]
                ])
            ->add('date_naissance', TextType::class ,
                [
                    'required' => true,
                    'label' => 'date de naissance',
                    'attr' => [
                        'class' => 'datepicker'
                    ]
                ])
            ->add('sexe', CheckboxType::class, [
                'required' => false,
                'attr' => [
                    'data-toggle' => 'toggle',
                    'data-on' => 'Homme',
                    'data-off' => 'Femme'
                ]
            ])
            ->add('telephone', TextType::class ,
                [
                    'label' => 'Numéro',
                    'attr' => [
                        'placeholder' => 'Veuillez saisir votre numéro'
                    ]
                ])
            ->add('adresse', TextType::class ,
                [
                    'label' => 'Adresse',
                    'attr' => [
                        'placeholder' => 'Veuillez saisir votre adresse'
                    ]
                ])
            ->add('email', EmailType::class ,
                [
                    'label' => 'Email',
                    'attr' => [
                        'placeholder' => 'Veuillez saisir votre adresse email'
                    ]
                ])
            ->add('nume_secu', TextType::class ,
                [
                    'label' => 'Numéro de sécurité social',
                    'attr' => [
                        'placeholder' => 'Veuillez saisir votre numéro de sécurité social'
                    ]
                ])
            ->add('document', FileType::class, [
                    'required' => true,
                    'label' => 'Charger le certificat',
                    'attr' => [
                        'class' => 'dropify'
                    ]
                ])
            ->add('commentaire', CKEditorType::class, [
                    'required' => true,
                    'label' => 'Ajouter un commentaire',
                    'config' => [
                        'toolbar' => 'standard'
                    ]
                ])
            ->add('photo', FileType::class , [
                    'required' => true,
                    'label' => 'Charger la photo',
                    'attr' => [
                        'class' => 'dropify'
                    ]
                ])
            ->add('certificat', CheckboxType::class, [
                'required' => false,
                'attr' => [
                    'data-toggle' => 'toggle',
                    'data-on' => 'Oui',
                    'data-off' => 'Non'
                ]
            ])
            ->add('situation', ChoiceType::class, [
                'choices'  => [
                    'Etudiant' => "Etudiant",
                    'Salarié' => "Salarié",
                    'Retraité' => "Retraité",
                ],
                'attr' => [
                    'class' => 'select2'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter cet adherent',
                'attr' => [
                    'class' => 'btn btn-success btn-lg btn-block'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
           'data_class' => AdherentRequest::class
        ]);
    }

}