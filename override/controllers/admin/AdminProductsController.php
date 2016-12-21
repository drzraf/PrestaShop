<?php

// https://www.prestashop.com/forums/topic/481520-backoffice-ajout-dun-filtre-dans-la-liste-des-produits
class AdminProductsController extends AdminProductsControllerCore
{
    public function __construct()
    {
        parent::__construct();
        //Ajout du champs dans la liste des champs affichés dans l'amdin
        $this->fields_list['available_for_order'] = array(
            'title' => $this->l('Dispo'),
            'active' => 'available_for_order',
            'filter_key' => 'a!available_for_order', // remplace a par sa pour récupérer les données de la table product_shop
            'align' => 'text-center',
            'type' => 'bool',
            'class' => 'fixed-width-sm',
            'orderby' => false

        );
        unset($this->fields_list['active']);
    }
}
