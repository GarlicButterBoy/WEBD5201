<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <title>Laracasts</title>


    </head>
    <body>

       <h1>Hello <?= $name; ?>!</h1> 
        <br/><br/>

        <ul>
        @foreach ($tasks as $task)
            <li>{{$task ?> </li>
        @endforeach 
        </ul>

    </body>
</html>
