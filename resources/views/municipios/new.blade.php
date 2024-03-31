<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Municipio</title>
  </head>
  <body>
    <div class="container">
    <h1>Add Municipio</h1>
    <form method="POST" action="{{route('municipios.store')}}">
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id" disabled="disabled">
          <div id="idHelp" class="form-text">Municipio Code</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Municipio</label>
          <input type="text" class="form-control" id="name" aria-describedby="nameHelp" name="name" placeholder="Municipio name.">
        </div>
        <label for="municipality">Municipality</label>
        <select class="form-select" id="municipality" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($municipios as $municipio)
                <option value="{{ $municipio->muni_codi}}">{{$municipio->muni_nomb}}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('municipios.index')}}" class="btn btn-warning">Cancel</a>
        </div>
      </form>
    </div>
  </body>
</html>