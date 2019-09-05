@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card">
                    <div class="card-header">
                       <strong> Showing project for: </strong> {{$project->name}}
                    </div>
                    <div class="card-body">
                        <h6> <strong>Project description: </strong>{{$project->description}} </h6>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
