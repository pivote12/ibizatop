<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\columnTwo;

class ConfigureColumnTwo extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'column2';

    protected $crud = 'column1';

    protected $input = [
        'name',
        'URL'
    ];

    protected $filterName = 'name';

    protected $rules = [
        'name' => 'required',
        'URL' => 'required'

    ];

    protected $rootBase = 'configure-column-two';
    protected function getModel()
    {
       return new columnTwo();
    }

}
