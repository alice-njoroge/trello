@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-3">
                <div class="card">
                    <div class="card-header">
                        Create a new project here
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
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <form method="post" action="{{route('projects.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project Name</label>
                                <input type="text" class="form-control" name="name"
                                       aria-describedby="emailHelp" placeholder="Enter project name">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Project Description</label>
                                <input type="text" class="form-control" name="description"
                                       placeholder="enter project description">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
