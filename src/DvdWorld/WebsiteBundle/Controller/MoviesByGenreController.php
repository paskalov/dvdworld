<?php

namespace DvdWorld\WebsiteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MoviesByGenreController extends Controller {

    /**
     * @route("/genres/{genre}/movies", name="moviesByGenre")
     *
     */

    public function moviesByGenreAction($genre) {

        $moviesByGenre = $this->getDoctrine()
            ->getRepository('DvdWorld\WebsiteBundle\Entity\Genres')
            ->find($genre);

        $repository = $this->getDoctrine()->getRepository('DvdWorld\WebsiteBundle\Entity\Genres');
        $genres = $repository->findAll();

        $movies = $moviesByGenre->getMovie();
        if(count($movies)==0) {

            return $this->render('DvdWorldWebsiteBundle:Default:movie_not_found.html.twig',
                array (
                    'genres' => $genres,
                    'chosenGenre' => $genre,
                )
            );
        }

        return $this->render('DvdWorldWebsiteBundle:Default:movies_by_genre.html.twig',

            array(
                'movies' => $moviesByGenre->getMovie(),
                'genres' => $genres,
                'chosenGenre'=>$genre,
            )
        );

    }
}