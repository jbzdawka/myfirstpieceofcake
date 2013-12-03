<?php
class Contact extends AppModel {
	public $useTable = 'contacts';
	public $primaryKey = 'id';

	public function add($name,$notes,$group_id) {
		//make sure the name doesn't have profanity?
		if($name == 'fuck') $name = 'ASDFASDF';

		$this->create();
		$this->save(array(
			'group_id' => $group_id,
			'name' =>  $name,
			'notes' =>  $notes
		));
	}
}
?>
