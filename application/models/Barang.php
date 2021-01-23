<?php
	class Barang extends CI_Model{

		public function __construct()
		{
			parent::__construct();
		}

        public function get($product_id_existing_barang)
        {
            if ($product_id_existing_barang)
            {
                /**
                 * If id barang is exist, then use get query with parameter.
                 * Used exception (try,catch) for secure the process if id barang is not exist
                 */

                $where = array(
                    'id' => $product_id_existing_barang
                );

                $this->db->select('*');
                $this->db->from('barang'); 
                $this->db->where($where);  
                $data = $this->db->get()->result(); 
                
                if (empty($data))
                {
                    throw new Exception();
                }
            }
            else
            {
                /**
                 * If id barang is not exist, then get all barang.
                 */

                $data = $this->db->get('barang')->result();
            }
            
			return $data;
		}

	}

?>