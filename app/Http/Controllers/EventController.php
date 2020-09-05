<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //DB::table('events')->orderBy('created_at','desc')->get()
        return view('event.index')->with('evenements' , Event::paginate(10));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        Event::create([
            'nom' => $request->nom_evenement,
            'description' => $request->description,
            'edition' =>$request->edition,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'nombre_min_participant' => $request->nbr_min,
            'number_max_participant' => $request->nbr_max,
            'etat' =>$request->etat,
            
    ]
        );
        return redirect()->back();
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
        $data = $reqest->only(['nom','description','edition','date_debut',
                                'date_fin', 'nbr_min', 'nbr_max','etat']);
  Event::update([
       'nom' => $request->nom_evenement,
      'description' => $request->description,
      'edition' =>$request->edition,
       'date_debut' => $request->date_debut,
      'date_fin' => $request->date_fin,
       'nombre_min_participant' => $request->nbr_min,
       'number_max_participant' => $request->nbr_max,
       'etat' =>$request->etat,
                                    
                            ]
                                );
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
