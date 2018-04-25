<?php

namespace App\Http\Controllers;

use App\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function index()
    {
        $membres = Membre::get();
        return view("membre/membreList", compact('membres'));
    }

    public function create()
    {
        return view('membre.membreCreate');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom'         => 'required|max:70|min:3',
            'prenom' => 'required|max:70|min:3',
            'telephone'        => 'required|max:50|unique:membres,telephone',
            'email' => 'e-mail|unique:membres,email'
        ]);
        $membre = new Membre(\Illuminate\Support\Facades\Request::except(['_token']));
        $membre->save();
        return redirect(route('membre.index'));
    }
    public function edit($id){
        $membre = Membre::where('id', $id)->first();
        return view('membre.membreEdit', compact('membre'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'nom'         => 'required|max:70|min:3',
            'prenom'      => 'required|max:70|min:3',
            'telephone'   => 'required|max:50|unique:membres,telephone',
            'email'       => 'e-mail|unique:membres,email',
            'type'        => 'required|max:25|min:3|exist:membres,telephone'
        ]);
    }

    public function destroy($id){
        Membre::where('id',$id)->delete();
        return redirect(route('membre.index'));
    }

}
