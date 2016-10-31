<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Log;
use File;
use App\Helpers\UploadX;


abstract class BaseController extends Controller
{
    protected $root = 'admin';
    protected $crud = '';
    protected $rootBase = '';
    protected $module = '';
    protected $view = '';
    protected $input = [];
    protected $rules = [];
    protected $rulesUpdate = [];
    protected $index = 'all';
    protected $filterName = '';
    abstract protected function getModel();


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if($this->index == 'first') {
            $data = $this->getModel()->first();
        }else{
            $data = $this->getModel()->orderBy($this->filterName, 'desc')->get();
        }

        return view($this->root.'/'.$this->module.'/'.$this->view, [
            'data' => $data,
            'rootBase' => $this->rootBase
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $data = $request->only($this->input);
        $validator = Validator::make($data, $this->rules);

        if ($validator->fails()) {
            $success = false;
            $errors  = $validator->errors()->all();
        }else{

            if($request->hasFile('input-file-preview')) {
                $image = UploadX::uploadFileTwo($request->file('input-file-preview'),'banners');
                $data['photo'] = $image['name'];
            }else{
                $data['photo'] = "defaultBanner.png";
            }

            $register = $this->getModel()->create($data);
            $success = true;
            $message = 'Registro agregado exitosamente';
        }

        return compact('success', 'errors', 'message', 'register');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->getModel()->find($id);        
        return view('admin.configure.edit.'.$this->crud, [
            'data' => $data,
            'rootBase' => $this->rootBase
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->getModel()->find($id);
        return view('admin.configure.delete.column1', [
            'data' => $data,
            'rootBase' => $this->rootBase
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $register = $this->getModel()->find($id);
        

        if($register){
            $data = $request->only($this->input);
            
            $validator = Validator::make($data, $this->rules);
            Log::info($data);            
            if ($validator->fails()) {
                $success = false;
                $errors  = $validator->errors()->all();
            }else{

                $register->update($data);
                $register->save();
                $success = true;
                $message = 'Registro actualizado exitosamente';
            }
        }else {
            $success = false;
            $message = 'No se encontro el registro';
        }

        return compact('success', 'errors', 'message');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $register = $this->getModel()->find($id);
        //$message = $register->photo;
        $register->delete();
        \File::Delete('banners/'.$register->photo);
        $success = true;
        $message = 'Registro eliminado exitosamente';


        return compact('success','message');

    }
}
