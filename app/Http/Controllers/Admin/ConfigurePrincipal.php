<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\models\principal;

/**
 * Class ConfigurePrincipal
 * @package App\Http\Controllers\Admin
 */
class ConfigurePrincipal extends BaseController
{
    /**
     * @var string
     */
    protected $module = 'configure';
    /**
     * @var string
     */
    protected $view = 'principal';

    /**
     * @var string
     */
    protected $index = 'first';

    /**
     * @var array
     */
    protected $input = [
        '_token',
        'topText',
        'email',
        'phone',
        'trans_des_es',
        'trans_des_en',
        'shemale_des_es',
        'shemale_des_en',
        'noveltiesTransEn',
        'noveltiesShemaleEn',
        'featuredDescription',
        'novelties',
        'bannersDescription',
        'noveltiesEn',
        'bannersDescriptionEn',
        'featuredDescriptionEn',

    ];

    /**
     * @var array
     */
    protected $rules =  [

        'topText' => 'required',
        'email' => 'required',
        'phone' => 'required'
    ];

    /**
     * @return principal
     */
    protected function getModel()
    {
        return new principal();
    }


}
