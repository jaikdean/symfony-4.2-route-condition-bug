<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ExampleController extends AbstractController
{
    /**
     * @Route(
     *     "/test",
     *     name="condition_one",
     *     methods="GET",
     *     condition="request.query.has('conditionOne')"
     * )
     */
    public function conditionOne()
    {
        return new Response('Condition one works');
    }

    /**
     * @Route(
     *     "/test",
     *     name="condition_two",
     *     methods="GET",
     *     condition="request.query.has('conditionTwo')"
     * )
     */
    public function conditionTwo()
    {
        return new Response('Condition two works');
    }
}
