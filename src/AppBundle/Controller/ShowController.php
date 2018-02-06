<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Type\ShowType;

/**
 * @Route(name="show_")
 */
class ShowController extends Controller
{
    /**
     * @Route(
     *     "/",
     *     name="list"
     * )
     */
    public function listAction(Request $request)
    {
        return $this->render('show/list.html.twig', array());
    }

    public function categoriesAction()
    {
        return $this->render('_includes/category.html.twig', [
            "categories" => ['Web Design', 'HTML', 'Freebies', 'JavaScript', 'CSS', 'Tutorials']
        ]);
    }

    /**
     * @Route(
     *     "/create",
     *     name="create"
     * )
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(ShowType::class);

        return $this->render('show/create.html.twig', [
            'showForm' => $form->createView()
        ]);
    }

}
