<?php

namespace Customize\Controller;

use Eccube\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

//https://doc4.ec-cube.net/customize_controller
class GetProductsController extends AbstractController
{
    /**
     * @Method("GET")
     * @Route("/getProducts")
     */
    public function testMethod()
    {
        $products->products = [
            [
                "category_id"=>"1",
                "category"=>"WOMAN",
                "id"=>"1",
                "name"=>"Product 1",
                "price"=>"1000",
                "description"=>"Description 1"
            ],
            [
                "category_id"=>"2",
                "category"=>"MEN",
                "id"=>"2",
                "name"=>"Product 2",
                "price"=>"1000",
                "description"=>"Description 2"
            ],
            [[
                "category_id"=>"3",
                "category"=>"KIDS",
                "id"=>"3",
                "name"=>"Product 3",
                "price"=>"1000",
                "description"=>"Description 3"
            ]
        ];

        $jsonstr =  json_encode($products);
        return new Response(
            $jsonstr,
            Response::HTTP_OK,
            array('Content-Type' => 'application/json; charset=utf-8')
        );
    }
}