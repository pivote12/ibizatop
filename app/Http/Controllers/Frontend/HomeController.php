<?php

namespace App\Http\Controllers\Frontend;

use App\models\profile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\principal;
use App\models\columnOne;
use App\models\columnTwo;
use App\models\columnTree;
use App\models\banners;
use App\models\sliders;
use App\models\SEO;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $shemale = profile::with('images')
                      ->where('is_spanish', '=', 'true')
                      ->where('deluxe_escort','=','on')
                      ->orderBy(\DB::raw('RAND()'))
                      ->get();
      $shemaleNovelties = profile::orderBy('created_at', 'desc')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->take(4)->get();
			
			

        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();
        $banners = banners::all();
        $sliders = sliders::all();

        $seo = SEO::first();
        $configureDescription = $seo->siteDescription;
        $keyWords = $seo->keywords;

        $titlePage = 'Homepage';
        return view('frontend.index.index', compact('principal', 'column1', 'column2', 'column3','banners', 'sliders','shemale', 'shemaleNovelties', 'configureDescription', 'keyWords', 'titlePage'));
    }


}
