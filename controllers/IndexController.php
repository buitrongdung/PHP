<?php

include_once __DIR__ . '/AbsController.php';

class IndexController extends AbsController
{

    function __construct()
    {

    }
    public function indexAction($params = array())
    {
        $data['index'] = '';
        $this->render('index/index', $data);
    }
}
