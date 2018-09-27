<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Entreprises;
require_once 'AppBundle\Entity\AutoEntrepriseDAO';
/**
 * Description of MinistereController
 *
 * @author ClaraLuis
 */
class MinistereController extends Controller {
    /**
     * @Route("/ministere/finances", name="ministere_finances")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'ministere' => "finances",
        ));
    }
    public function ajouterEntreprise(){
        $entreprise = new Entreprises();
        $entreprise->setAdresse("place des reflets");
        $auj = new DateTime();
        $auj->format('Y-m-d H:i:s');
        $entreprise->setCreation($auj);
        $entreprise->setDenomination("auto-entreprises");
        $entreprise->setDirecteur("Dupont");
        $entreprise->setNom("NASA");
        $dao = new AutoEntrepriseDAO();
        $dao->create($entreprise);
    }
}
