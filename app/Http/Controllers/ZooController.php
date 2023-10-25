<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ZooController extends Controller
{
    public function info()
    {
        return view('info');
    }
    public function Create()
    {
        return view('create');
    }

    public function AddZoo(){

        $createadd = new Animal();
        $createadd->Name=Request('Name');
        $createadd->View=Request('View');
        $createadd->Age=Request('Age');
        $createadd->Info=Request('Info');
        $createadd->save();
        return redirect('/');
    }
    public function Edit()
    {
        $animals = Animal::all();
        return view('edit', compact('animals'));

    }
    public function update($id)
    {
        $animals = Animal::find($id);
        return view('updatezoo',['animals'=>$animals]);
    }

    public function zoo(Request $updatefind, $id)
    {

        $animals = Animal::find($id);
        $animals->Name=$updatefind->Name;
        $animals->View=$updatefind->View;
        $animals->Age=$updatefind->Age;
        $animals->Info=$updatefind->Info;
        $animals->update();
        return redirect('edit');
    }
    public function delete($id){
        $animals = Animal::find($id);
        $animals->delete();
        return redirect('edit');
    }
    public function animal()
    {
        $animals = Animal::all();
        return view('/welcome', compact('animals'));
    }
}
