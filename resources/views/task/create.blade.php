@extends('master')
@section('title')
Task Create
@endsection

@section('content')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">Task Create</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="from-group">
                                <label for="">Title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="from-group">
                                <label for="">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="from-group">
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
