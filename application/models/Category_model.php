<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends MY_Model {

    public function getDefaultValues(){

        return [
            'id'    =>  '',
            'slug'  =>  '',
            'title' =>  ''
        ];
    }

    public function getValidationRules(){

        $validationRules = [
            [
                'field'     =>      'slug',
                'title'     =>      'Kata Kunci',
                'rules'     =>      'trim|required|callback_unique_slug'
            ],
            [
                'field'     =>      'title',
                'title'     =>      'Kategori',
                'rules'     =>      'trim|required'
            ]
        ];
        return $validationRules;

    }


    

}

/* End of file Category_mode.php */
