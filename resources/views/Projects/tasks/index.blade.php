@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card mt-3">
                    <div class="card-header">
                        <a href="{{route('create_task', $project_id)}}"
                           class="btn btn-outline-success float-right mr-1 mt-1">Add Tasks</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" >Name</th>
                                <th scope="col">Status</th>
                                <th scope="col" >Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$task->name}}</td>
                                    <td>status</td>
                                    <td colspan="3">
                                        <button type="button" class="btn btn-outline-primary">Show</button>
                                        <button type="button" class="btn btn-outline-secondary">Update</button>
                                        <button type="button" class="btn btn-outline-danger">delete</button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-outline-primary float-right mr-1 mt-1 mb-1">Go Back </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
