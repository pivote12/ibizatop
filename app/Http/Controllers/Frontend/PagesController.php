<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\profile;
use App\models\principal;
use App\models\columnOne;
use App\models\columnTwo;
use App\models\columnTree;
use App\models\banners;

use DB;

class PagesController extends Controller
{
    function agency(){

        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $agency = profile::where('category', '=', 'agencias')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $agencyAll = profile::where('category', '=', 'agencias')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'asc')->get();

        if(isset($agency[0])){
            $configureDescription = $agency[0]->description_metatags;
            $keyWords = $agency[0]->key_words;
            $titlePage = 'Agency';

        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Agency';
        }



        return view('frontend.pages.agency', compact('principal','column1', 'column2', 'column3', 'agency', 'agencyAll', 'configureDescription', 'keyWords', 'titlePage'));


    }

    function boy(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $boys = profile::where('category', '=', 'boys')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $boysAll = profile::where('category', '=', 'boys')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'asc')->get();

        if(isset($boys[0])){
            $configureDescription = $boys[0]->description_metatags;
            $keyWords = $boys[0]->key_words;
            $titlePage = 'Boys';
        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Boys';
        }

        return view('frontend.pages.boys', compact('principal','column1', 'column2', 'column3', 'boys', 'boysAll', 'configureDescription', 'keyWords', 'titlePage'));
    }

    function trans(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $trans = profile::where('category', '=', 'trans')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $transAll = profile::where('category', '=', 'trans')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'asc')->get();
        $transDelux = profile::where('deluxe_escort', '=', 'on')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->where('category','=','trans')->get();


        if(isset($trans[0])){
            $configureDescription = $trans[0]->description_metatags;
            $keyWords = $trans[0]->key_words;
            $titlePage = 'Trans';
        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Trans';
        }

        return view('frontend.pages.trans', compact('principal','column1', 'column2', 'column3', 'trans', 'transAll', 'configureDescription', 'keyWords', 'titlePage','transDelux'));
    }

    function escorts(){
        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();
        $escortDelux = profile::where('deluxe_escort', '=', 'on')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->get();
        $escortFeatured = profile::where('featured_escort', '=', 'on')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->get();
        $escortNovelties = profile::where('category', '=', 'escorts')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->orderBy('created_at', 'desc')->take(5)->get();
        $scortsAll = profile::where('category','=','escorts')->get();
        $banners = banners::all();

        if(isset($escortDelux[0])){
            $configureDescription = $escortDelux[0]->description_metatags;
            $keyWords = $escortDelux[0]->key_words;
            $titlePage = 'Escort';
        }else{
            $configureDescription = $principal->description_metatags;
            $keyWords = $principal->key_words;
            $titlePage = 'Escort';
        }

        return view('frontend.pages.scorts', compact('principal','banners','column1', 'column2', 'column3', 'escortDelux', 'escortFeatured', 'escortNovelties',  'configureDescription', 'keyWords', 'titlePage','scortsAll'));

    }

    function profile(Request $requests, $code){

   // dd($requests->get('code'),$codeProfile = old('code'));

	      if($requests->get('code')){

        $codeProfile = $requests->get('code');
        }else if(old('code')){
        $codeProfile = old('code');

        }else{
          $id = $requests->get('id');
          $codeProfile =  profile::where('id','=',$id)->get()[0]->code;
        }

        $principal = principal::first();
        $column1 = columnOne::all();
        $column2 = columnTwo::all();
        $column3 = columnTree::all();

        $profileSpanish = profile::with('images')
                        ->where('profile.code', $codeProfile)
                        ->where('is_spanish', '=', 'true')
                        ->where('is_active', '=', 'true')
                        ->first();

        $profileEnglish = profile::where('profile.code', $codeProfile)
                        ->where('is_spanish', '=', 'false')
                        ->where('is_active', '=', 'true')
                        ->first();

        $configureDescription = $profileSpanish->description_metatags;
        $keyWords = $profileSpanish->key_words;
        $titlePage = $profileSpanish->name;

        return view('frontend.profiles.baseProfiles', compact('profileSpanish', 'profileEnglish', 'principal', 'column1', 'column2', 'column3', 'configureDescription', 'keyWords', 'titlePage','codeProfile'));
    }

    function tag(Request $requests, $code){
        $column1 = columnOne::all();
        $principal = principal::first();
        $configureDescription = $principal->description_metatags;
        $keyWords = $principal->key_words;

        $tag = columnOne::where('name','=',str_replace("-"," ",$code))->get()->first();

        $tagProfile = \DB::table('profile as p')
              ->select('p.*','ip.url1')
              ->join('profiles_columnone as pc','pc.P_Id','=','p.id')
              ->join('columnone as co','pc.C_Id','=','co.id')
              ->join('image_profile as ip','ip.profile_id','=','p.id')
              ->where('pc.C_Id','=',$tag->id)
              ->where('p.is_active', '=', 'true')
              ->get();

        return view('frontend.pages.tag', compact('column1','configureDescription', 'keyWords','principal','code','tag','tagProfile'));
    }
    function shemale(){
      $principal = principal::first();
      $column1 = columnOne::all();
      $shemale = profile::with('images')
                      ->where('profile.category', '=','shemale')
                      ->where('is_spanish', '=', 'true')
                      ->get();

          
      $shemaleDelux = profile::where('deluxe_escort', '=', 'on')->where('is_spanish', '=', 'true')->where('is_active', '=', 'true')->where('category','=','shemale')->get();                  
      if(isset($shemale[0])){
          $configureDescription = $shemale[0]->description_metatags;
          $keyWords = $shemale[0]->key_words;
          $titlePage = 'Shemale';
      }else{
          $configureDescription = $principal->description_metatags;
          $keyWords = $principal->key_words;
          $titlePage = 'Shemale';
      }

      return view('frontend.pages.shemale', compact('principal','banners','column1','keyWords',  'configureDescription','shemale','shemaleDelux'));
    }

}
