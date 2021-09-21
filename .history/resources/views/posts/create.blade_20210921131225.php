 @extends ('layouts.main')

 @section ('content')

 <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <h1>Create</h1>
    <hr><br/>

    <form method="POST" action="/posts">

  <div class="form-group">      
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="body">Blog</label>
    <textarea  class="form-control" id="body" name="body"></textarea>
  </div>
    <br/>
  <button type="submit" class="btn btn-primary">Publish</button>

</form>

 </div>
 @endsection