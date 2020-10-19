<?php

namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GetCategoriesController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/getCategories")
     */
    public function testMethod()
    {
        $categories = [
            '7'=>'WOMAN',
            '8'=>'MEN',
            '9'=>'KIDS'
        ];

        $jsonstr =  json_encode($categories);
        return new Response(
            $jsonstr,
            Response::HTTP_OK,
            array('Content-Type' => 'application/json; charset=utf-8')
        );
    }
}