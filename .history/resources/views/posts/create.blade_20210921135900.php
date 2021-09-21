 @extends ('layouts.main')

 @section ('content')
    
 <div class="row g-5">
 <div class="col-md-8 p-4">
    <h1>Create</h1>
    <hr><br/>

    <form method="POST" action="/posts"  text-white rounded bg-dark>

    {{ csrf_field() }} 

  <div class="form-group">      
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Blog</label>
    <textarea  class="form-control" id="body" name="body"></textarea>
  </div>
    <br/>
  <button type="submit" class="btn btn-primary">Publish</button>

  @include ('layouts.errors')
</form>



 </div>
 @endsection