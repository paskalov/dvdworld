<?php

namespace DvdWorld\WebsiteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MovieController extends Controller {

    /**
     * @route("/movie/id/{id}", name="singleMovie")
     */
    public function movieAction($id) {

        $user = $this->container->get('security.context')->getToken()->getUser();

        $movie = $this->getDoctrine()
            ->getRepository('DvdWorld\WebsiteBundle\Entity\Movies')
            ->find($id);

        if (!$movie) {
            return $this->redirect($this->generateUrl('index'));
        }

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery('
            SELECT p
            FROM DvdWorld\WebsiteBundle\Entity\Orders p
            WHERE p.dateOfReturn > :currentDate and p.user = :user and p.movie = :id_movie
        ')->setParameters(array(
            'currentDate'=> new \DateTime(),
            'user' => $user,
            'id_movie' => $id,
        ));

        $userOrder = $query->getResult();

        $doesUserHavePermissionToWatch = true;
        if(!$userOrder) {
            $doesUserHavePermissionToWatch = false;
        }

        return $this->render('DvdWorldWebsiteBundle:Default:movie.html.twig',
            array(
                'movie' => $movie,
                'movieReleaseYear' => $movie->getReleaseYear()->format("Y"),
                'doesUserHavePermissionToWatch' => $doesUserHavePermissionToWatch,
            )
        );
    }
}