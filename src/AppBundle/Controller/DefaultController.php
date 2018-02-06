<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route(
     *     "/test/{username}",
     *     defaults={"username"=""},
     *     schemes={"http", "https"},
     *     name="homepage"
     * )
     * @Method("GET")
     */
    public function indexAction(Request $request, $username)
    {
        // replace this example code with whatever you need
        return new Response($this->renderView("default/index.html.twig", [
                'username' => $username
            ]),
        Response::HTTP_NOT_FOUND);
    }
}
