<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelLivros;


class BookController extends Controller
{
   
    private $objLivros;

    public function __construct(){
        
        $this->objLivros=new ModelLivros();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $livro=$this->objLivros->all();
        return view('index',compact('livro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $livros=$this->objLivros-all();
       return view('index', compact('livros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $livro= new ModelLivros;
        $livro = $livro->create ($request->all());
        return redirect('/livros');
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
        $livro = ModelLivros::findOrFail($id);
        return view('editar',['livro'=>$livro]);
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
        $livro = ModelLivros::findOrFail($id);
        $livro->update($request->all() );
        return redirect('/livros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $livro= ModelLivros::findorFail($id);
        $livro->delete();
        return redirect('/livros');
    }
}
