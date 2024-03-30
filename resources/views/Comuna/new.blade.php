<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Comuna</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Comuna</h1>
    <form method="POST" action="{{route('comunas.store')}}">
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disable">
          <div id="idHelp" class="form-text">Commune code</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Comumune</label>
          <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
            name="name" placeholder="Comuna name.">
        </div>
        <label for="municipality">Municipality: </label>
        <select class="form-select" id="municipality" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($municipios as $municipio)
            <option value="{{$municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
            @endforeach
        </select>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Save</button>
          <a href="{{ route('comunas.index')}}" class="btn btn-warning"></a>
        </div>
    </div>
      </form>
  </body>
</html>