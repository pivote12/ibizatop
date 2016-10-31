<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\models\SEO;

class ConfigureSeo extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'seo';

    /**
     * @var string
     */
    protected $index = 'first';

    /**
     * @var array
     */
    protected $input = [
        'siteDescription',
        'keywords',
    ];

    /**
     * @var array
     */
    protected $rules = [
        'siteDescription' => 'required',
        'keywords' => 'required',
    ];

    /**
     *
     */
    protected function getModel()
    {
        return new SEO();
    }

}
