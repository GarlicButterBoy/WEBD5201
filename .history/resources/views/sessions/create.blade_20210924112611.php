@extends ('layouts.main')

@section ('content')

<div class="col-md-8 p-4 ">

    <h1>Register</h1>

    <form action="POST">
        {{ csrf_field() }}

        <div class="form-group">
            <label for=""></label>

        </div>
    </form>

</div>

@endsection