<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>


        <title>Laracasts</title>


    </head>
    <body>
       <h1>Hello <?= $name; ?>!</h1> 
        <br/><br/>
        <ul></ul>
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task ?> </li>
        <?php endforeach; ?>    

    </body>
</html>
