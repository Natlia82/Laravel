<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="col-md-12">
      <table class="table table-bordered">
        <thead class="thead-light">
          <tr>
            <th width="5%">#</th>
            <th><center>Название<center></th>
            <th width="15%"><center>Описание</center></th>
            <th width="10%"><center>created_at</center></th>
            <th width="10%"><center>updated_at</center></th>
          </tr>
        </thead>
        <tbody>
       
              <tr>
              <th><center>{{ $todo->id }}<center></th>
              <td><center>{{ $todo->title }}<center></td>
              <td><center>{{ $todo->description }}<center></td>
              <td><center>{{ $todo->created_at }}<center></td>
              <td><center>{{ $todo->updated_at }}<center></td>
            </tr>
        
     
        </tbody>
      </table>
      <a href="/todo" class="btn btn-warning">{{ csrf_field() }} Вернуться</a>

</body>
</html>