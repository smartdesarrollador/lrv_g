<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminForm;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("adminvista.index")->with('administrador', \App\AdminModel::paginate(1)->setPath('admin'));
    }


    /* 

     public function crear()
    {
        return view("posts.create");
    }

    */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view("adminvista.createUpdate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(AdminForm $postForm)
    {
            $objadmin = new \App\AdminModel;
 
    $objadmin->title = \Request::input('title');
 
    $objadmin->body = \Request::input('body');
 
    $objadmin->save();
 
    return redirect('admin/create')->with('message', 'Admin saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('adminvista.createUpdate')->with('admin', \App\AdminModel::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, AdminForm $postForm)
    {
        $badmin = \App\AdminModel::find($id);
 
    $badmin->title = \Request::input('title');
 
    $badmin->body = \Request::input('body');
 
    $badmin->save();
 
    return redirect()->route('admin.edit', ['admin' => $id])->with('message', 'Admin updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            $dadmin = \App\AdminModel::find($id);
 
    $dadmin->delete();
 
    return redirect()->route('admin.index')->with('message', 'Admin deleted');
    }
}
