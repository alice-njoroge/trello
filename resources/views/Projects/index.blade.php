@extends('layouts.main')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-10 offset-md-2 mt-3 ">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            Project list
                            <a href="{{route('projects.create')}}" class="btn btn-outline-primary float-right mb-2">add
                                a project
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
                                        <a href="{{route('projects.show', $project->id)}}"
                                           class="btn btn-outline-success">Show
                                        </a>
                                        <a href="{{route('projects.edit', $project->id)}}"
                                           class="btn btn-outline-primary">Update
                                        </a>
                                        <a href="#"
                                           onclick="document.getElementById('form{{$loop->iteration}}').submit();
                                               " class="btn btn-outline-danger">Delete </a>

                                        <form method="post" action="{{route('projects.destroy', $project->id)}}"
                                              id="form{{$loop->iteration}}">
                                            @csrf
                                            @method('DELETE')
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
@endsection
