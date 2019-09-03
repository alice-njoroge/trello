@extends('layouts.main')
@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-8 offset-md-2 mt-3 ">
                <div class="card">
                    <div class="card-body">
                        <h2> Projects list</h2>
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
                                    <td>@mdo</td>
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
