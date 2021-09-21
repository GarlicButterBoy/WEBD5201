 @extends ('layouts.main')

 @section ('content')

 <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <h1>Create</h1>
    <br/><hr>

    <form>

  <div class="form-group">      
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="body">Password</label>
    <textarea  id="body" name="body" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>

 </div>
 @endsection