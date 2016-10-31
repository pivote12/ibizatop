<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends BaseController
{
    public function index()
    {
        return view($this->root.'/app');
    }

    protected function getModel()
    {
        // TODO: Implement getModel() method.
    }

}
