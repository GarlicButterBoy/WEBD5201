@extends ('layouts.main')


@section ('content') 
<div class="col-md-8 p-4">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <div class="comments"></div>

</div>    

@endsection