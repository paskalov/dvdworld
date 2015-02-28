<?php

namespace DvdWorld\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class UserOrdersController extends Controller {

    /**
     * @route("/my-orders", name="myOrders")
     */

    public function userOrdersAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();

        if($user == 'anon.') {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('
            SELECT o
            FROM DvdWorld\WebsiteBundle\Entity\Orders o
            WHERE o.dateOfReturn >= :currentDate and o.user = :user
        ')->setParameters(array(
            'currentDate'=> new \DateTime(),
            'user' => $user,
        ));

        $orders = $query->getResult();

        $query = $em->createQuery('
            SELECT o
            FROM DvdWorld\WebsiteBundle\Entity\Orders o
            WHERE o.dateOfReturn < :currentDate and o.user = :user
        ')->setParameters(array(
            'currentDate'=> new \DateTime(),
            'user' => $user,
        ));
        $expiredOrders = $query->getResult();

        return $this->render('DvdWorldWebsiteBundle:Default:user_orders.html.twig', array(
            'orders' => $orders,
            'expiredOrders' => $expiredOrders,
        ));
    }
}