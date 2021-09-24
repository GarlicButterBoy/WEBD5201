@extends ('layouts.main')

@section ('content')

<div class="col-md-8 p-4 ">

    <h1>Sign In</h1>

    <form method="POST" action="/register">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password: </label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

        @include ('layouts.errors')

    </form>

</div>

@endsection