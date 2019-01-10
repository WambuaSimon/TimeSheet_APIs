@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="row justify-content-center">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">Users</div>

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
                            <table class="table table-striped" >
                                <thead>
                                    <tr>
                                        
                                        <td>Name</td>
                                        <td>Email</td>
                                        
                        
                                        <td colspan="2">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                      
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                    
                                        <td><a href="#" class="btn btn-primary">Add</a></td>
                                        <td>
                                                <form action="{{ route('users.destroy', $user->id)}}" method="post">
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
