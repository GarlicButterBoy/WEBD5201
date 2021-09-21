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
    <div class="card">
        <div class="card-block">
    <form action="POST">
        <div class="form-group">
            <textarea class="form-control" name="body" id="body" cols="30" rows="10" placeholder="Your comment here..."></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Post</button>
        </div>
    </form>
        </div>
    </div>


</div>    

@endsection