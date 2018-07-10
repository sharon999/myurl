<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ShortUrl extends CI_Controller
{

   //load create short url view
    public function index()
    {
	$this->load->helper('form');
	$this->load->view('form');
    }

    //create short url
    public function create()
    {  
	$url = prep_url($this->input->post('url'));
	$exist_long_url = $this->long_url_exist($url);
	
	if ($exist_long_url == "")
	{
		$this->load->helper('string');
		$length=2;
		$result=true;
		while ($result)
		{
		$result = $string =$this->getRandomString($length);
		if ($result!=false) 
		break;
		else ++$length;
		}

	    $this->create_new_short_url($url, $result);
	    $short_url = $result;
	}
	else
	{
	    $short_url = $exist_long_url;
	}

	// return the short url
	echo base_url() . $short_url;
    }

   
    //create random short url with giving lenght
    function getRandomString($length) {
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$string = '';
        for ($j=0; $j<pow(62, $length); $j++)
        {
    		for ($i = 0; $i < $length; $i++) {
    		$string .= $characters[mt_rand(0, strlen($characters) - 1)];
    		}
   			if (!$this->check_short_url_exist($string))
    		{
    		return $string;
    		}
        	else $string='';	 
       }
    	
    	return false;
    
    }
    
    //check if random short url exist in db for any long url
    function check_short_url_exist($short_url)
    {
	$this->db->select('id');

	$query = $this->db->get_where('mylinks', array('short_url' => $short_url), 1, 0);

	if ($query->num_rows() > 0)
	{
	    return true;
	}
	else
	{
	    return false;
	}
    }

   
    //create new short url in the d.b.
    function create_new_short_url($url, $short_url)
    {
	$data = array(
	    'short_url' => $short_url,
	    'url' => $url,
	    'datecreated' => date("Y-m-d H:i:s")
	);

	$this->db->insert('mylinks', $data);
    }

  
    //return short url if long url exist
    function long_url_exist($url)
    {
	$short_url = "";

	$this->db->select('short_url');

	$query = $this->db->get_where('mylinks', array('url' => $url), 1, 0);

	if ($query->num_rows() > 0)
	{
	    foreach ($query->result() as $row)
	    {
		$short_url = $row->short_url;
	    }
	}

	return $short_url;
    }

}

