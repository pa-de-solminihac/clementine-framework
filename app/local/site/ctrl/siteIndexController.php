<?php
/**
 * siteIndexController : controleur des pages /index/*
 * @author Pierre-Alexis <clementine@solminihac.fr> 
 */

class siteIndexController extends siteIndexController_Parent
{

    /**
     * indexAction : controleur de la page d'accueil (/, /index ou /index/index)
     * 
     * @param mixed $request
     * @param mixed $params 
     * @access public
     * @return void
     */
    public function indexAction($request, $params = null)
    {
        $this->data['titre'] = 'Bienvenue dans Clémentine';
        $this->data['fichier_controleur'] = __FILE__;
        /* Clementine appelle implicitement la vue correspondant à cette page */
    }

}
