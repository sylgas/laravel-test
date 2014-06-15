<?php

class IndexController extends \BaseController {

    public $layout = 'index';

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->layout->render();
	}
}
