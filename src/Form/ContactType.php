<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder'=>'Entrez votre prénom',
                    'class' => 'form-custom form__input mt-2 mb-2'
                ]
            ])
            ->add('lastname', TextType::class, [
                'label'=>'Nom',
                'attr' => [
                    'placeholder' => 'Entrez votre nom',
                    'class' => 'form-custom  form__input mt-2 mb-2'
                ]
            ])
            ->add('email',EmailType::class, [
                'label'=>'E-Mail',
                'attr' => [
                    'placeholder'=>'Entrez votre e-mail',
                    'class' => 'form-custom form__input mt-2 mb-2'
                ]
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Message',
                'attr' => [
                    'rows' => 6,
                    'placeholder' => 'Veuillez saisir votre message',
                    'class' => 'form-custom form__input__text mt-2 mb-2',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
                'attr' => [
                    'class' => 'bouton btn__secondary',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults([
        ]);
    }
}