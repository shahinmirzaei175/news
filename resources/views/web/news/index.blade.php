@extends('web.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Of News</h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Visit</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td><a href="{{ route('web.news.show',$new->id) }}">{{ $new->title }}  </a></td>
                        <td>{{ $new->visit }}</td>
                        <td>{{ $new->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
