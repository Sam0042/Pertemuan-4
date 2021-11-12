<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    #membuat property animals
    public $animals = ['kucing','anjing','kelinci'];

    public function index(){
        #fungsi menampilkan data animals
        foreach($this->animals as $animal){
            echo "$animal<br>";
        };
    }

    public function store(request $request){
        #fungsi menambahkan hewan baru
        array_push($this->animals,$request->nama);
        $this->index();
    }

    public function update(request $request,$id){
        #fungsi mengupdate data hewan
        array_splice($this->animals,$id,1,$request->nama);
        $this->index();
    }

    public function destroy($id){
        #fungsi menghapus data hewan
        unset($this->animals[$id]);
        $this->index();
    }
}
