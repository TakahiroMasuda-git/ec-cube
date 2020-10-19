<?php

namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

//https://doc4.ec-cube.net/customize_controller
class GetCategoriesController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/getCategories")
     */
    public function testMethod()
    {
        $categories->categories = [
            ["id"=>"7","name"=>"WOMAN"],
            ["id"=>"8","name"=>"MEN"],
            ["id"=>"9","name"=>"KIDS"]
        ];

        $jsonstr =  json_encode($categories);
        return new Response(
            $jsonstr,
            Response::HTTP_OK,
            array('Content-Type' => 'application/json; charset=utf-8')
        );
    }
}