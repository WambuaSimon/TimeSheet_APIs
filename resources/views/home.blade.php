@extends('layouts.app')

@section('content')
<div class="container_fluid">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    <style>
                        .uper {
                            margin-top: 40px;
                        }
                    </style>
                    
                    <div class="uper ">
                        @if (session()->get('success'))
                        <div class="alert alert-success">
                            {{session()->get('success')}}
                        </div><br/> @endif
                    
                        
                            <table class="table table-striped"  id="example">
                                <thead>
                                    <tr>
                                        
                                        <td>Name</td>
                                        <td>Project</td>
                                        <td>Task</td>
                                        <td>Date</td>
                                        <td>Start Time</td>
                                        <td>End Time</td>
                                        
                                        {{-- <td colspan="2">Action</td> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                   @if ($tasks==null)
                                       <tr><td>Nothing to show<</td></tr>
                                   @else
                                   @foreach ($tasks as $task)
                                   <tr>
                                     
                                       <td>{{$task->users->name}}</td>
                                       <td>{{$task->projects->name}}</td>
                                       <td>{{$task->name}}</td>
                                       <td>{{$task->date}}</td>
                                       <td>{{$task->start_time}}</td>
                                       <td>{{$task->end_time}}</td>
                                   
                                       {{-- <td>
                                           <form action="{{ route('tasks.destroy', $task->id)}}" method="post">
                                               @csrf @method('DELETE')
                                               <button class="btn btn-danger" type="submit">Delete</button>
                                           </form>
                                       </td> --}}
                                   </tr>
                                   @endforeach
                                   @endif
                                </tbody>
                            </table>

                            {{ $tasks->onEachSide(2)->links()}}
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
