<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::all();

        return view('homepage', ['tasks' => $tasks]);
    }

    public function create(Request $request){
        $task = new Tasks();

        $task->idTarefa = $request->idTarefa;
        $task->nomeTarefa = $request->nomeTarefa;

        $task->save();

        return redirect('/homepage');
    }

    public function delete(Request $request){
    
    $idTarefa = $request->query('deletar');
        if (!empty($idTarefa)) {
        Tasks::where('idTarefa', $idTarefa)->delete();

        }   
        return redirect('/homepage');       
    }
}
