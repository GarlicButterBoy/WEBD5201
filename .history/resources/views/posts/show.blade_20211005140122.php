@extends ('layouts.main')


@section ('content') 
<div class="col-md-8 p-4 ">
    <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h1>{{ $post->title }}</h1>

        @if (count($post->tags))
    <ul>
        @for
    </ul>
        @endif

        <p>{{ $post->body }}</p>
    </div>

    <hr>

    <div class="comments p-4 p-md-5 mb-4 text-white rounded bg-dark">
        <h4>Comments</h4>
        <hr>
        <ol>
        @foreach ($post->comments as $comment)
        <li>
        <article>
            <strong>{{ $comment->created_at->diffForHumans() }}:</strong>

            {{$comment->body}}
        </article>
        </li>
        @endforeach
        </ol>
    </div>
    <hr>
    <div class="card p-4 mb-4 text-white bg-dark">

        <div class="card-block">

    <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}

        <div class="form-group">
            <textarea class="form-control" name="body" cols="30" rows="10" placeholder="Your comment here..." required></textarea>
        </div>
        <br/>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Comment</button>
        </div>

    </form>

        @include ('layouts.errors')

        </div>

    </div>


</div>    

@endsection