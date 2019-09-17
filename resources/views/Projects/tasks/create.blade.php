@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form  action="post">
                    @csrf
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="{{$project_id}}">
                    </div>
                    <div class="form-group">
                        <label for="taskName">Name</label>
                        <input type="text" class="form-control" placeholder="task name">
                    </div>

                    <div class="form-group">
                        <label for="taskStatus">Status</label>
                        <input type="text" class="form-control"  placeholder="task status">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection
