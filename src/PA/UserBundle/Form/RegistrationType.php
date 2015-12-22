<?php
namespace PA\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$builder
            ->add('email', 'email', array('label' => 'Adresse Mail :', 'translation_domain' => 'FOSUserBundle'))
            ->add('username', null, array('label' => 'Pseudo :', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de Passe :'),
                'second_options' => array('label' => 'Confirmation :'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
			->add('submit','submit',array('label' => 'M\'inscrire !'));
        ;
		
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}