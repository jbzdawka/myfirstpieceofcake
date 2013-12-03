<?php

class ContactController extends AppController {
	public $uses = array('Contact');

	public function index() {
		$contacts = $this->Contact->find('all');
		$this->set('contacts',$contacts);
	}

	public function add_contact() {
		$this->Contact->add($_REQUEST['name'],$_REQUEST['notes'],$_REQUEST['group']);

		$this->redirect('/contact');
	}
}
