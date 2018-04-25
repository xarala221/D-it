<?php

namespace App\Http\Controllers;

use App\TypeMembre;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index(){
        $typemembres = TypeMembre::get();

        return view("typeMembre.typeList", compact("typemembres"));
    }

    public function create(){
        return view("typeMembre.typeCreate");
    }

    public function edit($id){
        $typeMembre = TypeMembre::where('id', $id)->first();
        return view('typeMembre.typeEdit', compact('typeMembre'));
    }

    public function update($id, Request $request){
        $this->validate($request, [
            'nom'         => 'required|max:70|min:3'
        ]);
        TypeMembre::where('id', $id)->update(\Illuminate\Support\Facades\Request::except(['_token', '_method']));

        return redirect(route("typeMembre.index"));


    }

    public function store(Request $request){
        $this->validate($request, [
            'nom'         => 'required|max:70|min:3'
        ]);
        $typeMembre = new TypeMembre(\Illuminate\Support\Facades\Request::except(['_token']));
        $typeMembre->save();
        return redirect(route("typeMembre.index"));
    }

    public function destroy($id){
        TypeMembre::where('id',$id)->delete();

        return redirect(route('typeMembre.index'));
    }
}
