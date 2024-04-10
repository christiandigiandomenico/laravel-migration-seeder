<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Train Database</title>
    @vite('resources/js/app.js')
</head>
<body>

    <h1>Tabella dei Treni</h1>

    <div class="container">

    @foreach($trains as $train)
      @if($train->date >= '2024-04-10')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$train->company}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><span>Stazione di partenza:</span> {{$train->departure_station}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><span>Stazione di arrivo:</span> {{$train->arrival_station}}</h6>
          <p class="card-text"><span>Data di partenza:</span> {{$train->date}}</p>
          <p class="card-text"><span>Orario di partenza:</span> {{$train->departure_time}}</p>
          <p class="card-text"><span>Orario di arrivo:</span> {{$train->arrival_time}}</p>
          <p class="card-text"><span>Codice treno:</span> {{$train->train_code}}</p>
          <p class="card-text"><span>Numero carrozze:</span> {{$train->train_carriage}}</p>
          <p class="card-text"><span>In orario:</span> {{$train->on_schedule ? 'Sì' : 'No'}}</p>
          <p class="card-text"><span>Cancellato:</span> {{$train->cancelled ? 'Sì' : 'No'}}</p>
        </div>
      </div>
      @endif
    @endforeach

    </div>

</body>
</html>