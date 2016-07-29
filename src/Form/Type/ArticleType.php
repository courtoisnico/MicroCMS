<?php
/**
 * Created by PhpStorm.
 * User: ncourtois
 * Date: 27/07/2016
 * Time: 11:39
 */

namespace MicroCMS\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('content', 'textarea');
    }

    public function getName()
    {
        return 'article';
    }
}