<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function home(){
        return view ('home.index');
    }


    public function index()
    {
        $events = Event::all();
        return view('chamados', ['events' => $events]);
    }

    public function create()
    {
        return view('registrar');
    }

    public function store(Request $request)
    {
        $event = new Event;

        $event->namefunc = $request->namefunc;
        $event->titlesolic = $request->titlesolic;
        $event->date = $request->date;
        $event->setorsolic = $request->setorsolic;
        $event->nivel = $request->nivel;
        $event->description = $request->description;

        $event->save();

        return redirect('/home');

    }

    public function show($id)
    {

        return view('chamado', ['event' => Event::findOrFail($id)]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect('/home')->with('msg' , 'Chamado Deletado!');
    }




}


/*
    public function getComments($event_id)
    {
        // Passing post id into find()
        return Event::find($event_id)->comments;
    }

    public function getPost($comment_id)
    {
        // Passing comment id into find()
        return Comment::find($comment_id)->event;
    }
*/
