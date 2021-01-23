<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
     
class Product extends REST_Controller {
    
	/**
     * Create Product class constructor
     * this function will be called (automatically) upon each instantiation of the Product class
     *
     * @return Response
    */
    public function __construct() 
    {
       parent::__construct();

       /**
        * Load validation
        */
       $this->load->library('form_validation');

       /**
        * Load barang model
        */
       $this->load->model("Barang");
    }
       
    /**
     * Get All Barang or Get detail existing barang with product id
     *
     * @return Response
    */
	public function index_get($product_id_existing_barang = 0)
	{
        try{
            
            $data_barang = $this->Barang->get($product_id_existing_barang);

        }catch(Exception $e){
            
            $response = (object) ["status" => false, "error" => "Product ID is not Found!"];
            return $this->response($response, REST_Controller::HTTP_OK);
        
        }
        
        return $this->response($data_barang, REST_Controller::HTTP_OK);
	}
      
    /**
     * Generate new barang
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        
        $validation = $this->validation($input);
        
        $this->db->insert('barang',$input);
     
        $this->response(['Generate new barang success!'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Edit existing barang with product id
     *
     * @return Response
    */
    public function index_put($product_id_existing_barang = 0)
    {
        $input = $this->put();

        $validation = $this->validation($input);

        $this->db->update('barang', $input, array('id'=>$product_id_existing_barang));
     
        $this->response(['Barang with id '.$product_id_existing_barang.' successfully updated!'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Delete existing barang with product id
     *
     * @return Response
    */
    public function index_delete($product_id_existing_barang = 0)
    {
        $temp = $this->db->delete('barang', array('id'=>$product_id_existing_barang));

        $this->response(['Barang with id '.$product_id_existing_barang.' successfully deleted!'], REST_Controller::HTTP_OK);
    }

    function validation(array $input = [])
    {
        if (!isset($input['name']) || !$input['name'])
        {
            $response = (object) ["status" => false, "error" => "Name value is required!"];
            return $this->response($response, REST_Controller::HTTP_OK);
        }
        
        if (strlen($input['name']) < 5 || strlen($input['name']) > 100)
        {
            $response = (object) ["status" => false, "error" => "Name value only accept minimum 5 characters to 100 characters!"];
            return $this->response($response, REST_Controller::HTTP_OK);
        }

        if (!isset($input['description']) || !$input['description'])
        {
            $response = (object) ["status" => false, "error" => "Description value is required!"];
            return $this->response($response, REST_Controller::HTTP_OK);
        }

        if (strlen($input['description']) < 5 || strlen($input['description']) > 100)
        {
            $response = (object) ["status" => false, "error" => "Description value only accept minimum 5 characters to 255 characters!"];
            return $this->response($response, REST_Controller::HTTP_OK);
        }

        if (isset($input['price']))
        {
            if ($input['price'] < 0)
            {
                $response = (object) ["status" => false, "error" => "Price value cannot negative!"];
                return $this->response($response, REST_Controller::HTTP_OK);
            }
        }

        $response = (object) ["status" => "success"];
        return $response;
    }
    	
}