<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;


class TicketController extends Controller
{

    public function show(){
        $tickets=DB::table('tickets')->get();
       return view('myTicket',compact('tickets'));
        //$tickets=Ticket::all();
        //return view('myTicket',compact('tickets'));
    }
    //

    public function store(Request $request){
        DB::table('tickets')->insert([
            'Category' => $request->name,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect()->back();

        /*$task=new Ticket();
       $task->Category=$request->Category;
       $task->save();
       return redirect()->back();*/
    }


    public function showTicket($id){
        $tickets=DB::table('tickets')->get();
        return view('showTicket',compact('tickets'));
    }
}
