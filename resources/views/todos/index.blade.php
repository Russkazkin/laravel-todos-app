<?php
/**
 * @var $todos \App\Todo[]
 */
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
</head>
<body>
    <div class="container my-5">
        <h1>TODOS PAGE</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Todos
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                <div class="btn btn-primary btn-sm float-right">View</div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
