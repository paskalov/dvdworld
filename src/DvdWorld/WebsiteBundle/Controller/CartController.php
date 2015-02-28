<?php

namespace DvdWorld\WebsiteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Cookie;

class CartController extends Controller {

    /**
     * @route("/cart", name="cart")
     */
    public function shoppingCartAction() {

        $movieSets = array();
        $orderTime = "";
        $totalPrice = 0;
        $orderButtonStatus = 'disabled';

        foreach($_COOKIE as
                $key => $value) {

            if(strpos($key, 'order') !== false) {
                list($movieId, $orderTime) = split('-', $value);

                $movie = $this->getDoctrine()
                    ->getRepository('DvdWorld\WebsiteBundle\Entity\Movies')
                    ->find($movieId);
                $movieSets[] = array(
                    'movie' => $movie,
                    'nameOfCookie' => $key,
                );
                $totalPrice += $movie->getPrice();
            }
        }


        if(count($_COOKIE) > 0) {
            $orderButtonStatus = '';
        }

        return $this->render("DvdWorldWebsiteBundle:Default:cart.html.twig",

            array(
                'movieSets' => $movieSets,
                'totalPrice' => number_format($totalPrice, 2, '.', ''),
                'orderButtonStatus' => $orderButtonStatus,
            )
        );
    }
}