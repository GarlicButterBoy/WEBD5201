@extends ('layouts.main')


@section ('content') 
<div class="col-md-8 p-4 class="p-4 p-md-5 mb-4 text-white rounded bg-dark"">
    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <div class="comments">
        @foreach ($post->comments as $comment)
        <article>
            {{$comment->body}}
        </article>
        @endforeach
    </div>

</div>    

@endsection