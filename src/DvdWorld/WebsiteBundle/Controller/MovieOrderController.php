<?php

namespace DvdWorld\WebsiteBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DvdWorld\WebsiteBundle\Entity\Orders;
use DvdWorld\WebsiteBundle\Entity\Orderstatus;

class MovieOrderController extends Controller {

    /**
     *
     * @route("/movie-order", name="movieOrder")
     *
     */
    public function movieOrderAction(Request $request) {

        if(!($this->get('security.context')->isGranted('ROLE_USER'))) {
           return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        if($request->getMethod() == 'POST') {

            $docManager = $this->getDoctrine()->getManager();

            $userId = $this->container->get('security.context')->getToken()->getUser();
            $user = $this->getDoctrine()
                ->getRepository('DvdWorld\UserBundle\Entity\User')
                ->find($userId);

            $moviesId = split(';',
                $request->request->get('movies_id')
            );

            foreach($moviesId as $id) {
                $id = preg_replace('/\s+/', '', $id);
                $movie = $this->getDoctrine()
                    ->getRepository('DvdWorld\WebsiteBundle\Entity\Movies')
                    ->find($id);

                $orderStatus = $this->getDoctrine()
                    ->getRepository('DvdWorld\WebsiteBundle\Entity\Orderstatus')
                    ->find(1);

                $order = new Orders();
                $order->setDateOfOrder(new \DateTime());
                $order->setDateOfReturn(new \DateTime(date('Y-m-d H:i:s', strtotime('+3 day', time()))));
                $order->setIdStatus($orderStatus);
                $order->setMovie($movie);
                $order->setUser($user);
                $docManager->persist($order);
            }
            $docManager->flush();

            return $this->redirect($this->generateUrl('myOrders'));

        }
        return $this->redirect($this->generateUrl('cart'));
    }

}