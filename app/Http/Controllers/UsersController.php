<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Photo;
use App\Department;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;



class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Function for actions on datatable
     */


    public function datatable()
    {
        return Datatables::of(User::query())->make(true);
    }

    public function index()
    {
        $users = User::all();
        return view('headoffice.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id')->all();
        $departments = Department::pluck('name', 'id')->all();
        return view('headoffice.users.create', compact('roles', 'departments'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //function for password
        if(trim($request->password)== ' '){
            $input = $request->except('password');
        }else{
            $input = $request->all(); // to persist data on database
        }
        if ($file =$request->file('photoID')){ // will validate if photo existed before saving to database
            $name = time() .$file->getClientOriginalName(); // will get the name og the photo from the user with a time appended on it
            $file->move('images', $name); //will move the photo on images directory with a name on it
            $photo=Photo::create(['file'=>$name]); // create the photo
            $input['photoID'] = $photo->id; // will save photo id and name
        }
        //to encrypt password
        $input['password']= bcrypt($request->password);
        // if photo is not existed
        User::create($input); // will save everything on database
        Session::flash('created_user', 'The user has been created.');
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
