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
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$train->company}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di partenza: {{$train->departure_station}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di arrivo: {{$train->arrival_station}}</h6>
          <p class="card-text">Orario di partenza: {{$train->departure_time}}</p>
          <p class="card-text">Orario di arrivo: {{$train->arrival_time}}</p>
          <p class="card-text">Codice treno: {{$train->train_code}}</p>
          <p class="card-text">Numero carrozze: {{$train->train_carriage}}</p>
          <p class="card-text">In orario: {{$train->on_schedule ? 'Sì' : 'No'}}</p>
          <p class="card-text">Cancellato: {{$train->cancelled ? 'Sì' : 'No'}}</p>
        </div>
      </div>
    @endforeach

    </div>

</body>
</html>