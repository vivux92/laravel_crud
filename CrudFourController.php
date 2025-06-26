<?php

namespace App\Http\Controllers;

use App\Models\CrudFour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudFourController extends Controller
{
    public function list(){
        $ok = CrudFour::all();
        $data = [
            'data' => $ok
        ];
        return view('crud_four.index', $data);
    }
    public function add(){
        return view('crud_four.add-edit');
    }
    public function save(Request $request,$id = null): RedirectResponse {
        // dd($request->all());
        // exit;
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'hobbies' => 'required',
        ];
        if (!$id) {
            $rules['img'] = 'required';
        }
        $request->validate($rules);
        
        if($request->img){    
            $file_name=rand("1000","9999").".".$request->img->getClientOriginalExtension();
            $request->img->move(public_path("upload_img"),$file_name);
        }
        $hobbies=implode(',',$request->hobbies);
        if ($request->has('id') && $request->id) {
            $ok = CrudFour::find($request->id);
        }else{
            $ok = new CrudFour();
        }
        if($request->img){
            $ok->img = $file_name;
        }
        $ok->name = $request->name;
        $ok->email = $request->email;
        if ($request->password) {
            $ok->password=Hash::make($request->input('password'));
        }
        $ok->gender = $request->gender;
        $ok->hobbies = $hobbies;
        $ok->city = $request->city;
        $ok->save();
        return redirect()->route("listofindex");
    }
    public function edit($id){
        $ok = CrudFour::find($id);
        $data = [
            'data' => $ok
        ];
        return view("crud_four.add-edit", $data );
    }
    public function delete($id) {
        CrudFour::find($id)->delete();
        return redirect("list");
    }
}
