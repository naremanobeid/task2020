<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{

    public function index (){

       
        $tasks =DB::table('tasks')->get(); 
        return view('tasks.index',compact('tasks'));
        
    }

    public function show ($id){

        $task =DB::table('tasks')->find($id);
        return view ('tasks.show',compact('task'));
        
    }  

    public function store (Request $request){
        //  dd($request);
         DB::table('tasks')->insert([
             'name'=> $request->name,
             'created_at' => now(),
             'updated_at' =>now(),
         ]);
       
         return redirect()->back();
    } 

    public function destroy ($id){

        DB::table('tasks')->where('id','=',$id)->delete();

        /*  I wrote the instrection down  to can make delete button work 
            although when you in update view to get the right route  
        */
        return redirect('/');
        
    }

    public function ShowUpdateTask($id){
        // dd($id);
        $tasks =DB::table('tasks')->get(); 
        $task_edit =DB::table('tasks')->find($id);
        // dd($task_edit);
        return view('tasks.update',compact('task_edit','tasks'));   
    }

    public function Update(Request $request,$id){ 

        // dd($request->name ,$id);
        DB::table('tasks')->where('id', $id)->update(['name' => $request->name, 'created_at' => now(),'updated_at' =>now()]);
        return redirect('/'); 
        
    }

}
