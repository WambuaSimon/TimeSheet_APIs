@extends('layouts.app') 
@section('content')

<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="col-md-8">
    <div class="card-header">
       Add Project
    </div>
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
                @endforeach
            </ul>

        </div><br/> @endif
        <form action="{{ route('projects.store')}}" method="post">

            <div class="form-group">
                @csrf
                <label for="name">Project Name: </label>
                <input type="text" class="form-control" name="project_
                name" />

            </div>
           
            <button type="submit" class="btn btn-primary">Add</button>

        </form>

    </div>
</div>
@endsection