<?php

namespace AdminTheme\Controller;

use App\Controller\AppController as BaseController;

class AppController extends BaseController
{


    public $helpers = [
        'DataTables' => [
            'className' => 'DataTables.DataTables'
        ]
    ];

    public function initialize()
    {
        $this->loadComponent('DataTables.DataTables');
    }
}
