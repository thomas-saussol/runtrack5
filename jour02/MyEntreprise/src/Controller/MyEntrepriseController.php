<?php

namespace App\Controller;

use App\Entity\Projets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MyEntrepriseController extends AbstractController
{

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('myEntreprise/home.html.twig', [
            'controller_name' => 'MyEntrepriseController',
        ]);

    }
    /**
     * @Route("/myEntreprise", name="myEntreprise")
     */
    public function index()
    {
        $projet= new Projets;
        $projet=$this->getDoctrine()->getRepository(Projets::class)->findAll();

        return $this->render('myEntreprise/index.html.twig', [
            'controller_name' => 'MyEntrepriseController','projet'=>$projet,
        ]);


    }


    /**
 * @Route("myEntreprise/project/{id}", name="project_page")
 */
    public function projectPage($id){
        $projet=$this->getDoctrine()->getRepository(Projets::class)->find($id);
        return $this->render('myEntreprise/projectPage.html.twig', [
            'controller_name' => 'MyEntrepriseController','projet'=>$projet,
        ]);

    }
}
