<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Pais</title>
  </head>
  <body>
    <div class="container">
    <h1>Edit Pais</h1>
    <form method="POST" action="{{route('paises.update', ['pais' => $pais->pais_codi])}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="codigo" class="form-label">Id</label>
          <input type="text" class="form-control" id="id" aria-describedby="codigoHelp" name="id" disabled="disable" value="{{$pais->pais_codi}}">
          <div id="idHelp" class="form-text">Pais Id.</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Pais</label>
          <input type="text" required class="form-control" id="name" placeholder="Commune name" name="name" value="{{ $pais->pais_nomb}}">
        </div>
        <label for="pais">Pais: </label>
        <select class="form-select" id="pais" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($paises as $pais)
            @if ($pais->pais_codi == $pais->pais_codi)
            <option selected value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
            @else
            <option value="{{$pais->pais_codi}}">{{$pais->pais_nomb}}</option>
            @endforeach
        </select>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('paises.index')}}" class="btn btn-warning">Cancel</a>
        </div>
    </div>
      </form>
  </body>
</html>