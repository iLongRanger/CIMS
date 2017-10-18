<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use App\Http\Requests\EmployeesRequest;
use App\Role;
use App\Photo;
use App\Department;
use Yajra\DataTables\Facades\Datatables;
use Illuminate\Support\Facades\Session;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return view("human_resources.employees.create" ,compact('roles', 'departments') );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeesRequest $request)
    {
        $input = $request->all();
        if ($file =$request->file('photo_id')){ // will validate if photo existed before saving to database
            $name = time() .$file->getClientOriginalName(); // will get the name og the photo from the user with a time appended on it
            $file->move('images', $name); //will move the photo on images directory with a name on it
            $photo=Photo::create(['file'=>$name]); // create the photo
            $input['photo_id'] = $photo->id; // will save photo id and name
        }
        Employees::create($input); // will save everything on database
        Session::flash('created_employee', 'New Employee record has been created.');
        return redirect('/employees');

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
