<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <title>Laracasts</title>


    </head>
    <body>


        <ul>
        @foreach ($tasks as $task)
            <li>

            <a href="/tasks/{{"></a>
                {{$task->body}} 
            </li>
        @endforeach 
        </ul>

    </body>
</html>