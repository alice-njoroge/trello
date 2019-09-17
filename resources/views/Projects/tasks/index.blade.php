@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card mt-3">
                    <div class="header">
                        <a href="" class="btn btn-outline-success float-right mr-1 mt-1" >Add Tasks</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$task->name}}</td>
                                    <td>status</td>
                                    <td>action</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                    <div class="card-footer">
                        <a href="" class="btn btn-outline-primary float-right mr-1 mt-1 mb-1" >Go Back </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection