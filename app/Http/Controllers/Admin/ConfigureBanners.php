<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\banners;
class ConfigureBanners extends BaseController
{
    protected $module = 'configure';

    protected $view = 'banners';

    protected $input = [
        'name',
        'URL',
        'photo'
    ];

    protected $crud = 'banner';

    protected $filterName = 'name';

    protected $rules = [
        'name' => 'required',
        'URL' => 'required'
        //'photo'
    ];

    protected $rootBase = 'configure-banner';

    protected function getModel()
    {
       return new banners();
    }


}
