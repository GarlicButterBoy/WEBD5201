@extends ('layouts.main')


@section ('content') 
<div class="col-md-8 p-4">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <div class="comments">
        @foreach ($post->comments as $comment)
        <<i class="ri-article-fill"></i>
    </div>

</div>    

@endsection