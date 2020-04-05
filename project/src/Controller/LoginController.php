<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController {
    /**
     * @Route("/", name="login_page")
     */
    public function index(){
        $data = "Login page goes here.";
        return $this->render('login.html.twig', [
           'data' => $data
        ]);
    }
}