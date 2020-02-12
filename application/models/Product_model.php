<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends MY_Model {



    public function getDefaultValues()
    {
        return [
            'id'            =>  '',
            'slug'          =>  '',
            'id_category'   =>  '',
            'title'         =>  '',
            'description'   =>  '',
            'price'         =>  '',
            'is_available'  =>  1,
            'image'         =>  ''

        ];
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field'     =>  'id_category',
                'title'     =>  'Kategori',
                'rules'     =>  'required'
            ],
            [
                'field'     =>  'slug',
                'title'     =>  'slug',
                'rules'     =>  'trim|required|callback_unique_slug'
            ],
            [
                'field'     =>  'title',
                'title'     =>  'Nama Produk',
                'rules'     =>  'trim|required'
            ],
            [
                'field'     =>  'description',
                'title'     =>  'Deskripsi',
                'rules'     =>  'trim|required'
            ],
            [
                'field'     =>  'price',
                'title'     =>  'Harga',
                'rules'     =>  'trim|required|numeric'
            ],
            [
                'field'     =>  'is_available',
                'title'     =>  'Ketersediaan',
                'rules'     =>  'required'
            ]
        ];
        return $validationRules;
    }


    public function uploadImage($fieldName, $fileName)
    {
        $config = [
            'upload_path'           =>  './images/product',
            'file_name'             =>  $fileName,
            'allowed_types'         =>  'jpg|gif|jpeg|png|JPG|PNG',
            'max_size'              =>  1024,
            'max_width'             =>  0,
            'max_height'            =>  0,
            'overwrite'             =>  true,
            'file_ext_tolower'      =>  true

        ];

        $this->load->library('upload', $config);

        if($this->upload->do_upload($fieldName))
        {
            return $this->upload->data();
        }else{
            $this->session->set_flashdata('image_error', $this->upload->display_errors('',''));
            return false;
        }
        
    }


    public function deleteImage($fileName)
    {
        if(file_exists("./images/product/$fieldName")){
            unlink("./images/product/$fileName");
        }
    }
    

}

/* End of file Product_model.php */
