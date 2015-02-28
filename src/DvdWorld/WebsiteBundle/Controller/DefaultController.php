<?php

namespace DvdWorld\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @route("/", name="index")
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getRepository('DvdWorld\WebsiteBundle\Entity\Movies');
        $movies = $repository->findAll();

        $repository = $this->getDoctrine()->getRepository('DvdWorld\WebsiteBundle\Entity\Genres');
        $genres = $repository->findAll();

        return $this->render('DvdWorldWebsiteBundle:Default:index.html.twig',
            array(
                'movies' => $movies,
                'genres' => $genres,
            )
        );
    }

    /**
     * @route ("/about", name="about")
     */

    public function aboutAction() {

        return $this->render('DvdWorldWebsiteBundle:Default:about.html.twig');
    }

    /**
     * @route ("/contact", name="contact")
     */

    public function contactAction() {

        return $this->render('DvdWorldWebsiteBundle:Default:contact.html.twig');
    }
}


