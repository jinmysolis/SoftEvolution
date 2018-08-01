<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Tag;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
       
         return view('clientes.index')
                         ->with('usuarios',$usuarios)
                           ; 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function informacion()
    {
        return view('clientes.informacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function createTag()
     {
      

        $tag = new Tag;
        return view('clientes.createTag',["tag"=> $tag]);
   
     }



     


    public function store(Request $request)
    {
        $tag = new Tag;
        $tag->name = $request->tag;
       
        if($tag->save()){
           
       $tag = Tag::all();
      
         
        return view('admin.posts.index')
                        ->with('tag',$tag)
                       ;  
             
        }else{
            return view("clientes.createTag");
        }
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
