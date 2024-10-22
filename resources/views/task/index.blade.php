@extends('master')
@section('title')
Task Manage
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <a href="{{ route('task.create') }}" class="btn btn-success mb-5">Create Task</a>
                <div class="card">
                    <div class="card-header">Task Manage</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $task->title }}</td>
                                    <td>{{ $task->description }}</td>
                                    <td>
                                        <a href="{{ route('task.edit',$task->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('task.delete',$task->id) }}" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This ?')">Delete</a>
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
</section>
@endsection
