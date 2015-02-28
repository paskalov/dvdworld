<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 2/16/15
 * Time: 10:52 AM
 */

namespace DvdWorld\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use DvdWorld\WebsiteBundle\Entity\Userreviews;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class ReviewController extends Controller {

    /**
     * @Route("/review", name="addReview")
     */
    public function addReviewAction(Request $request) {

        if($request->getMethod() == 'POST') {
            $user = $this->container->get('security.context')->getToken()->getUser();
            $reviewContent = $this->get('request')->request->get('review');
            $movieId = $this->get('request')->request->get('movieId');

            $repository = $this->getDoctrine()->getRepository('DvdWorld\WebsiteBundle\Entity\Movies');
            $movie = $repository->find($movieId);

            $em = $this->getDoctrine()->getManager();
            $review = new Userreviews();

            $review->setMovie($movie);
            $review->setUser($user);

            $review->setTime(new \DateTime());
            $review->setContent($reviewContent);

            $em->persist($review);
            $em->flush();

            return $this->render('DvdWorldWebsiteBundle:Default:review_confirmation.html.twig');

        }
        return $this->redirect($this->generateUrl('index'));
    }

}