<?php 

class TestRedis extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('redis');
	}

	public function index(){
		$redis = $this->redis->config();
		// $set = $redis->setex('iniKey3', 3600 ,'ini value');
		// $get = $redis->get('iniKey3');
		$redis->del('iniKey3');

		// echo $get;
	}
}