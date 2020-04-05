<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/account", name="account_")
 */
class AccountController extends AbstractController {
    /**
     * @Route("/", name="index_page", methods={"GET"})
     */
    public function index() {
        return $this->render('account.html.twig');
    }

    /**
     * @Route("/operation/{id<\d+>}/", name="operation_page", methods={"GET"})
     */
    public function operation(int $id) {
        return $this->render('operation.html.twig', [
            'id' => $id,
        ]);
    }
}