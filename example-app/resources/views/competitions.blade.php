<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join Our Exciting Competitions!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset("css/style.css")}}">
</head>

<body>

  <header>
    @include('layouts.navbar')
  </header>

  <h1 class="text-center mb-4" style="color: #f0545e">Join Our Exciting Competitions!</h1>
  <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      @foreach ($comp as $comps)
        <div class="col">
          <div class="card h-100 w-100 shadow-sm bg-light border-primary">
            <div class="card-body">
              <h5 class="card-title" style="color: #2196f3">{{ $comps->name }}</h5>
              <p class="card-text">Category: {{ $comps->catagory }}</p>
              <p class="card-text">Description: {{ $comps->desc }}</p>
              <div class="d-flex justify-content-end mt-auto">
                <form action="/event/{{$comps->id}}" method="GET">
                  @csrf
                  <input type="hidden" name="competitionId" value="{{ $comps->id }}">
                  <button type="submit" class="btn btn-primary">Join</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
<div class="c">
    {{$comp->links()}}
</div>
</body>

</html>
