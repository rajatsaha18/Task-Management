@extends('master')
@section('title')
Task Create
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <a href="{{ route('task.index') }}" class="btn btn-info mb-5">Back</a>
                <div class="card">
                    <div class="card-header">Task Create</div>
                    <div class="card-body">
                        <form action="{{ route('task.new') }}" method="POST">
                            @csrf
                            <div class="from-group mb-2">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="from-group mb-2">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control"></textarea>
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
