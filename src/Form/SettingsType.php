<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Settings;
use Symfony\Component\Validator\Constraints\Blank;

/**
 * @author Michael Mifsud <info@tropotek.com>
 * @link http://www.tropotek.com/
 * @license Copyright 2019 Michael Mifsud
 */
class SettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siteTitle')
            ->add('siteShortTitle')
            ->add('siteEmail')
            ->add('emailSignature', TextareaType::class, ['constraints' => new Blank()])
            ->add('metaDescription', TextType::class, ['constraints' => new Blank()])
            ->add('metaKeywords', TextType::class, ['constraints' => new Blank()])
            ->add('globalJs', TextareaType::class, ['constraints' => new Blank()])
            ->add('globalCss', TextareaType::class, ['constraints' => new Blank()])
            ->add('save', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Settings::class,
        ]);
    }
}