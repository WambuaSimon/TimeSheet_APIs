<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;
use Validator;
use Illuminate\Http\JsonResponse;
use Auth;
class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::where('user_id', '=', Auth::user()->id)->get();
        return new JsonResponse($tasks);
        
    }

    /**hwr
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // $validator = Validator::make($input);
        // if($validator->fails()){
        //     return $this->sendError('Validation Error', $validator->errors());
        // }

        $task = new Tasks();
        $task->user_id = Auth::user()->id;
        $task->project_id = $request->get('project_id');
        $task->date = $request->get('date');
        $task->start_time = $request->get('start_time');
        $task->end_time = $request->get('end_time');
        $task->name = $request->get('name');
        $task->save();

   
// $tasks = Tasks::create($input);
return $this->sendResponse('Task Created Successfully', 201);

    }

    /**
     * Display the specified resource.20
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tasks = Tasks::find($id);
        if(is_null($tasks)){
            return $this->sendError('Task not found');
        }
        return $this->sendResponse($tasks->toArray(), 'Task Retrieved Successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
