<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserEditRequest;
use App\Http\Controllers\Controller;
use Validator;
use App\Helpers\UploadX;
use App\User;

class UsersController extends Controller
{
    protected $rules = [
        'name'     => 'required',
        // 'email'    => 'required|email|unique:users',
        'password' => 'min:8',
        'password_confirmation' => 'same:password',
        'photo' => 'mimes:jpeg,png'
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', '!=', \Auth::id())->get();

        return view('admin.users.list', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $this->rules['email'] = 'required|email|unique:users';

        $validator = Validator::make($data, $this->rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)
                ->withInput();
        }else{

            if($request->hasFile('photo')) {
                $image = UploadX::uploadFileTwo($request->file('photo'),'assets/imgProfiles');
                $data['photo'] = $image['name'];
            }
            $register = User::create($data);
            $message = trans('label.success_create');
        }

        return Redirect('/admin/users')->with('status',$message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.users.delete', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if(\Request::ajax())
        {
            return view('admin.userProfile.edit', ['user' => $user]);
        }else{
            return view('admin.users.edit', compact('user'));
        }


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

        $register = User::findOrFail($id);

        if($register){
            $data = $request->all();

            $this->rules['email'] = 'required|email|unique:users,email,'.$id;

            $validator = Validator::make($data, $this->rules);

            if ($validator->fails()) {
                $errors  = $validator->errors()->all();
            }else{

                if($request->hasFile('photo')) {
                    $image = UploadX::uploadFileTwo($request->file('photo'),'assets/imgProfiles');
                    $data['photo'] = $image['name'];
                }
                $register->update($data);
                $register->save();
                return redirect()->to('/admin')->with('status',trans('label.success_update'));
            }
        }else {
            $success = false;
            $message = 'No se encontro el registro';

        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $register = User::findOrFail($id);

        $register->delete();

        return redirect()->to('/admin/users')->with('status',trans('label.success_delete'));

    }
}
