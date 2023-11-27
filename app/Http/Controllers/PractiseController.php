<?php

namespace App\Http\Controllers;

use App\Models\practise;
use Illuminate\Http\Request;

class PractiseController extends Controller
{
          public function getdata(){
            return view('home');
          }


          public function postdata(Request $request){
            $validate = $request->all();
            practise::create($validate);
            return redirect()->back();
          }

          public function showall()
          {
          $data =   practise::all();
          return view('showall' , compact('data'));

          }



        public function delete(Request $request , $id){
            $delete = practise::find($id);
            $delete->delete();
            return redirect()->back();

        }


        public function edit( $id){
            $data = practise::find($id);
            return view('edit' , compact('data'));
        }

        public function update(Request $request , $id){
            $update = practise::find($id);
            $update->update($request->all());
            return redirect()->back();
        }
}
