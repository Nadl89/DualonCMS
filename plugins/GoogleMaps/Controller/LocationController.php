<?php

class LocationController extends GoogleMapsAppController {
	
	var $layout = 'overlay';
	
	public function beforeFilter(){
		$this->Auth->allow('*');
	}
}