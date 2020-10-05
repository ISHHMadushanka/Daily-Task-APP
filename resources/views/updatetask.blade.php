<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Update Task Data</title>
</head>
<body>

    <div class="container">
        <br><br><br>
       <form action="/updatetasks" method="post">
        {{ csrf_field() }}
      <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/> <br>
      <input type="hidden" name="id" value="{{$taskdata->id}}"/>
      <input type="submit" class="btn btn-warning" value="Update"/>
      &nbsp;&nbsp;<input type="button" class="btn btn-danger" value="Cancel"/>

       </form>

    </div>
</body>
</html>
