
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
            <th width="10%"><center>Описание</center></th>
            <th width="14%"><center>Подробнее</center></th>
          </tr>
        </thead>
        <tbody>
        @foreach  ($todos as $todo)
              <tr>
              <th><center>{{ $todo->id }}<center></th>
              <td><center>{{ $todo->title }}<center></td>
              <td><center>{{ $todo->description }}<center></td>
              <td>
                <div class="action_btn">
                  <div class="action_btn">
                  <a href="/todo/{{ $todo->id }}" class="btn btn-warning">{{ csrf_field() }} Подробнее</a>
                  </div>
                </div>
              </td>
            </tr>
        
            @endforeach
        </tbody>
      </table>
      <a href="/todo/create" class="btn btn-warning">{{ csrf_field() }} Добавить задачу</a>
</div>

 
</body>
</html>