<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class GoToUrl extends CI_Controller
{

	//redirect short url to site
    public function index()
    {
	$short_url = $this->uri->segment(1);
	$this->db->select('url');
	$query = $this->db->get_where('mylinks', array('short_url' => $short_url), 1, 0);

	if ($query->num_rows() > 0)
	{
	    foreach ($query->result() as $row)
	  {
		$this->load->helper('url');
		redirect($row->url, 'refresh', 301);
	   }
	}
	else
	{
	    echo "short url '.$short_url.' not exist";
	}
    }

}

    /* Location: ./application/controllers/gotourl.php */