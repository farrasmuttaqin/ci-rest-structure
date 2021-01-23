<?php

class Migrate extends CI_Controller
{

        public function index()
        {
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                    show_error($this->migration->error_string());
                }else
                {
                    echo "
                    <div style='text-align:center;margin-top:200px;'>
                        <h1> Migrations </h1>
                        <h2><font color='green'> SUCCESS! </font></h4>
                    </div>
                    ";
                }
        }

}