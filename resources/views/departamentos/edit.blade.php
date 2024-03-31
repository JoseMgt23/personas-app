<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Departamento</title>
  </head>
  <body>
    <div class="container">
    <h1>Edit Departamento</h1>
    <form method="POST" action="{{route('departamentos.update', ['departamento' => $departamento->depa_codi])}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="codigo" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disable" value="{{$departamento->depa_codi}}">
          <div id="idHelp" class="form-text">Departamento Id.</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Departamento</label>
          <input type="text" required class="form-control" id="name" placeholder="Departamento name" name="name" value="{{ $departamento->depa_nomb}}">
        </div>
        <label for="departamento">Departamento: </label>
        <select class="form-select" id="departamento" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($departamentos as $departamento)
            @if ($departamento->depa_codi == $departamento->depa_codi)
            <option selected value="{{$departamento->depa_codi}}">{{$departamento->depa_nomb}}</option>
            @else
            <option value="{{$departamento->depa_codi}}">{{$departamento->depa_nomb}}</option>
            @endforeach
        </select>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('departamentos.index')}}" class="btn btn-warning">Cancel</a>
        </div>
    </div>
      </form>
  </body>
</html>