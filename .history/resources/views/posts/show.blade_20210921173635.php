@extends ('layouts.main')


@section ('content') 
<div class="col-md-8 p-4 ">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h1>{{ $post->title }}</h1>

        <p>{{ $post->body }}</p>
    </div>

    <hr>

    <div class="comments p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h4>Comments</h4>
        <hr>
        @foreach ($post->comments as $comment)
        <article>
        <p></p>            {{$comment->body}}
        </article>
        @endforeach
    </div>

</div>    

@endsection