@extends ('layouts.main')

@section ('content')

<div class="col-md-8 p-4 ">

    <h1>Register</h1>

    <form method="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Name: </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>

</div>

@endsection