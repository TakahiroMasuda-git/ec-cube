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
        return new Response('Hello sample page !');
    }
}