<?php

class PersonListController extends \BaseController {

    public $layout = 'person_list';

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
