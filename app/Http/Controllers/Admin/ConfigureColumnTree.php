<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\models\columnTree;

class ConfigureColumnTree extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'column3';

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

    protected $rootBase = 'configure-column-tree';

    protected function getModel()
    {
        return new columnTree();
    }
}
