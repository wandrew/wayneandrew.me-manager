<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends VARYX_Controller {

	public function index()
	{
					$this->template
							->set('active','users')
							->set('page_title','Dashboard')
							->build('dashboard');
	}
}