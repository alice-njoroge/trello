@extends('layouts.main')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-8 offset-md-2 mt-3 ">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            Project list
                            <a href="{{route('projects.create')}}">
                                <button type="button" class="btn btn-outline-primary float-right mb-2">add a project
                                </button>
                            </a>
                        </div>


                        <table class="table">
                            <thead>

                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{$project->name}}</td>
                                    <td>{{$project->description}}</td>
                                    <td>
                                        <a href="{{route('projects.show', $project->id)}}">
                                            <button type="button" class="btn btn-outline-success">Show</button>
                                        </a>
                                        <a href="{{route('projects.edit', $project->id)}}">
                                            <button type="button" class="btn btn-outline-primary">Update</button>
                                        </a>
                                        <a href="">
                                            <button type="button" class="btn btn-outline-danger">Delete</button>
                                        </a>


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
@endsection
