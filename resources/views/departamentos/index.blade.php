<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Departamentos</title>
  </head>
  <body>
    <div class="container">
    <h1>Listado de Departamentos</h1>
    <a href="{{ route('departamentos.create')}}" class="btn btn-success">Add</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Code</th>
            <th scope="col">Departamento</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($departamentos as $departamento)
          <tr>
            <th scope="row">{{$departamento->depa_codi}}</th>
            <td>{{$departamento->depa_nomb}}</td>
            <td>
                <a href="{{route('departamentos.edit',['departamento'=>$depa_codi])}}" class="btn btn-info">Edit </a></li>
                <form action="{{ route('departamento.destroy',['departamento' => $departamento->depa_codi])}}" 
                  method="POST" style="display: inline-block">
                @method('delete')
                @csrf
              <input class="btn btn-danger" type=submit value="Delete">
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>