@extends ('layouts.main')

@section ('content')

<div class="col-md-8 p-4 ">

    <h1>Register</h1>

    <form action="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
    </form>

</div>

@endsection