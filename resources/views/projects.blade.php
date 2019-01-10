@extends('layouts.app') 
@section('content')
<div class="col-md-8">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">Projects</div>

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

                        <table>
                            <table class="table table-striped">
                                <thead>
                                    <tr>

                                        <td>Name</td>



                                        <td colspan="2">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                    <tr>

                                        <td>{{$project->name}}</td>


                                        <td><a href="#" class="btn btn-primary">Add</a></td>
                                        <td>
                                            <form action="{{ route('projects.destroy', $project->id)}}" method="post">
                                                @csrf @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection