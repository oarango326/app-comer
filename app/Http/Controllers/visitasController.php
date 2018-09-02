<?php

namespace App\Http\Controllers;
use DB;
use carbon\carbon;
use App\Http\Requests\validaCreaVisita;
use Illuminate\Http\Request;


class visitasController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitas=DB::table('visitas')->get();
        
        //111$data='esto debe ser la data';
        return view('visitas.index', compact('visitas'));
        //return $Visitas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('visitas.create');
        //return 'este es el controlodor para mostrar la vista de visitas en visitasController';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(validaCreaVisita $request)
    {
        //
        //return 'este es el controlodor para mostrar el registro alamcenado visitas en visitasController@store';
        DB::table('visitas')->insert([
            "cliente"=>$request->input('cliente'),
            "tipo"=>$request->input('tipo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),

        ]);
        return redirect('visitas');
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
        $visita=DB::table('visitas')->where('id', $id)->first();
        if($visita)
        {
            return view('visitas.show', compact('visita'));
        }
        return redirect('visitas')->with('status','La visita no puede ser localizada');
        
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
        $visita=DB::table('visitas')->where('id', $id)->first();
        if($visita)
        {
            return view('visitas.edit', compact('visita'));
        }
        return redirect('visitas')->with('status','La visita no puede ser localizada');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(validaCreaVisita $request, $id)
    {
        //
        DB::table('visitas')->where('id', $id)->update([
            "cliente"=>$request->input('cliente'),
            "tipo"=>$request->input('tipo'),
            "updated_at"=>Carbon::now(),
        ]);
        return redirect('visitas');
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
        DB::table('visitas')->where('id', $id)->delete();
        return redirect('visitas');
    }
}
