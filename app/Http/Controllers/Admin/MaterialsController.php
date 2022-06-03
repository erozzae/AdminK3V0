<?php


namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use File;

class MaterialsController extends Controller
{
    public function addMaterials(Request $request){
        $materialsApi = Http::asForm()->post('http://127.0.0.1:8000/api/bab/store',[
             
            'nama_bab'=>$request['nama_bab'],
            'isi_materi=>'=>$request['isi_materi']

        ]); 
    }   
}
