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
        $fruits_array = [
            'apple'=>'fruits1',
            'orange'=>'fruits2',
            'melon'=>'fruits3',
            'pineapple'=>'fruits4'
        ];

        $categories = $this->entityManager->getRepository('Eccube\Entity\Category')->getProductCategories(;
        print_r($categories);
        $jsonstr =  json_encode($fruits_array);
        return new Response(
            $jsonstr,
            Response::HTTP_OK,
            array('Content-Type' => 'application/json; charset=utf-8')
        );
    }
}