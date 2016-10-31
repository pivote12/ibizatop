<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\sliders;

class ConfigureSlideShow extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'slideshow';

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

    protected $rootBase = 'configure-slide-show';

    protected function getModel()
    {
        return new sliders();
    }

}
