<?php
/**
 * Created by PhpStorm.
 * User: ncourtois
 * Date: 13/06/2016
 * Time: 14:45
 */

namespace MicroCMS\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('content', 'textarea');
    }

    public  function getName()
    {
        return 'comment';
    }
}