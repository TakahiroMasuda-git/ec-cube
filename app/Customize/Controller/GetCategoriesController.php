<?php

namespace Customize\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class GetCategoriesController
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
        $jsonstr =  json_encode($fruits_array);
        header("Content-Type: application/json; charset=utf-8");
        echo $jsonstr;
        //$jsonstr =  json_encode($fruits_array);
        //return new Response($jsonstr);
    }
}