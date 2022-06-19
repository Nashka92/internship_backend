<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
/** 
* @Route("/api", name="api_")
*/
class MapController extends AbstractController
{
    /**
     * @Route("/project", name="project_index", methods={"GET"})
     */
    public function inde(): JsonResponse
    {
       
        $data = [];
           $data[] = [
               ['id' => "anna",'prenom' => "haha"],
               ['id' => "anna",'prenom' => "haha"],
               ['id' => "anna",'prenom' => "haha"],
           ];
        
        return $this->json($data);
    }
}
