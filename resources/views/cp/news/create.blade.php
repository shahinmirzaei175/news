@extends('cp.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Dashboard</h1>
            </div>
        </div>

            <form method="POST" action="{{ route('panel.news.store') }}" class="form-inline">
                {{ csrf_field() }}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="cil-md-12">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" cols="12" type="text" class="form-control" name="description" placeholder="Enter Text"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>

@endsection
