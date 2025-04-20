<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class FormationController extends AbstractController
{
    #[Route('/formation', name: 'app_formation')]
    public function index(): Response
    {
        $tab1=[12,986,24,78];
        $tab2=['mohamed'=>'Symfony','meriem'=>'android','agmed'=>'Flutter'];
        $tab3=[
            ['firstname'=>'mohamed','name'=>'ben mohamed','age'=>'20'],
            ['firstname'=>'mohamed','name'=>'ben mohamed','age'=>'20'],
            ['firstname'=>'mohamed','name'=>'ben mohamed','age'=>'20']
        ];
        return $this->render('formation/index.html.twig', [
            'tab1'=>$tab1,
            'tab2'=>$tab2,
            'tab3'=>$tab3
        ]);
    }
    #[Route('/tab/{nb?5}',name:'note.formation')]
    public function note($nb):Response{
        $tabnote=[];
        for ($i=0; $i <$nb ; $i++) { 
            $tabnote[]=rand(0,20);
        }
        return $this->render('formation/note.html.twig',[
            'tabnote'=>$tabnote
        ]);
    }
   
}
