@extends('web.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{ $news->title }}</h1>
            </div>
            <div class="col-lg-12">
                {!! $news->description !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
            data_url = '{{ route('api.news.seen',$news->id) }}';
            $.ajax({
                url: data_url,
                type: "GET",
                beforeSend: function() {
                },
                success: function(data) {
                }
            })
    </script>
@endsection
