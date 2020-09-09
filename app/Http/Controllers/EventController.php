<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Event;
use Yajra\Datatables\Datatables;
use App\Notifications\EventSoon;
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
        return view('event.index2');//->with('evenements' , Event::paginate(10));
    }

    /**
     * getting events to feed datatable
     */
    public function getEvents(){
        
        return Datatables::of(Event::query())
        ->setRowData([
            'data-id' => function($user) {
                return 'row-' . $user->id;
            },
            'data-name' => function($user) {
                return 'row-' . $user->name;
            },
        ])

        ->setRowId('{{$id}}')

        ->setRowAttr( ['align' => 'center'])
        
        ->addColumn('interresse', function($event){
            return $event->users()->count();
        } )
        ->editColumn('date_debut', function($event){
            return Carbon::parse($event->date_debut)->diffForHumans();
        } )
        ->editColumn('duree', function($event){
            return (Carbon::parse($event->date_debut)->diffInDays(Carbon::parse($event->date_fin)));
        } )
        ->addColumn('action', function ($user) {
            return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
        })
       
        ->editColumn('action' , function($evenement){
            $description = $evenement->description;
            $nom = $evenement->nom;
            $data = [$nom , $description];
            $id = $evenement->id;
            $action = ' <button type="button" id="Modifier" class="btn btn-primary btn-sm 
                                        "data-nom =" '.$nom.
                                        '" data-desc = "'.$description.
                                        '" data-edition =" '.$evenement->edition.
                                        '" data-date_debut =" '.$evenement->date_debut.
                                        '" data-date_fin =" '.$evenement->date_fin.
                                        '" data-nombre_min_participant =" '.$evenement->nombre_min_participant.
                                        '" data-nombre_max_participant = "'.$evenement->nomber_max_participant.
                                        '" data-etat = "'.$evenement->etat.
                                        '"> <i class="fas fa-edit    "></i></button>';
            $action = $action.'<button  type="button" id="detail" class="btn btn-info btn-sm detail" data-nom = "'.$nom.'" data-desc = "'.$description.'"><i class="fa fa-info-circle" aria-hidden="true"></i></button>';
            $action = $action.'<button type="button" id="supprimer" class="btn btn-danger btn-sm" data-id = "'.$evenement->id.'"><i class="fa fa-trash" aria-hidden="true"></i></button> ';
            $action = $action.'<button type="button" id="notify" class="btn btn-warning btn-sm" data-id = "'.$evenement->id.'">Notifier</button> ';
            return $action;
         })
        ->rawColumns(['action'])
        ->toJson();
        
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
            'nombre_max_participant' => $request->nbr_max,
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
        
    }

    public function sendNotification($id){
        $event = Event::find($id);
        // $user = 'App\User'::find(1);
        // $user->events()->attach(1);
       $users =   $event->users;
        foreach($users as $user){
        $user->notify(new EventSoon($event));
    }
        return response()->json(['noti' => $user->unreadNotifications]);
    }
}
