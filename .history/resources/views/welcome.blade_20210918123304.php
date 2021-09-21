<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <title>Laracasts</title>


    </head>
    <body>
       <h1>Hello <?= $name; ?>!</h1> 
        <br/><br/>

        <?= foreach ($tasks as $task)  ?>

    </body>
</html>
