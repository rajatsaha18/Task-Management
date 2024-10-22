@extends('master')
@section('title')
Task Edit
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <a href="{{ route('task.index') }}" class="btn btn-info mb-5">Back</a>
                <div class="card">
                    <div class="card-header">Task Edit</div>
                    <div class="card-body">
                        <form action="{{ route('task.update',$task->id) }}" method="POST">
                            @csrf
                            <div class="from-group mb-2">
                                <label for="">Title</label>
                                <input type="text" name="title" value="{{ $task->title }}" class="form-control">
                            </div>
                            <div class="from-group mb-2">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control">{{ $task->description }}</textarea>
                            </div>
                            <div class="from-group mb-2">
                                <label for=""></label>
                                <input type="submit" class="btn btn-success" value="Save Task">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
