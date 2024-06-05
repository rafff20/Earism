<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include('drivers/Crs_ontology.php');

class Crs extends CI_Driver_Library
{
	public $valid_drivers;
	public $CI;
	public $ontology;
	
	function __construct()
	{
		$this->CI =& get_instance();
		$this->ontology = new CRS_ontology();
		$this->valid_drivers = array('Crs_ontology', 'Crs_pre', 'Crs_usermodeling', 'Crs_usermodel');
	}
}

?>