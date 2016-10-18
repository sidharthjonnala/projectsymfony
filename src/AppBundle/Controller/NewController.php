<?php
/**
 * Created by PhpStorm.
 * User: Sidharth
 * Date: 10/14/16
 * Time: 7:42 PM
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class NewController
{

    
    public function  showAction($myClass)
    {
        return new Response($myClass.' is new class');

    }

}