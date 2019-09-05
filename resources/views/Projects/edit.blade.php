@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card">
                    <div class="card-header">
                        Edit Your Project details
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br />
                        @endif
                            <form method="post" action="{{ route('projects.update', $project->id) }}">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="project"> Project name</label>
                                    <input type="text" class="form-control" value="{{ $project->name }}" name="name" aria-describedby="emailHelp" placeholder="update name">
                                </div>
                                <div class="form-group">
                                    <label for="description">Project Description</label>
                                    <input type="text" class="form-control" value="{{ $project->description }}" name="description" placeholder="update description">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
