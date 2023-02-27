@extends('layout.main')

@section('main-content')
    <h1>Trains</h1>


   
        @foreach ($trains as $train)
            <div class="card d-flex m-3" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Nome Azienda{{$train->azienda}}</h5>
                <p class="card-text">Stazione di partenza:{{$train->stazione_partenza}}</p>
                <p class="card-text">Stazione di arrivo:{{$train->stazione_arrivo}}</p>
                <p class="card-text">treno n:{{$train->code}}</p>
                <p class="card-text">carrozza:{{$train->number_carriage}}</p>
                <p class="card-text">orario:{{$train->time}}</p>
                <p class="card-text">annullato:{{$train->delete}}</p>





                <a href="#" class="card-link btn btn-primary">aquista biglietto</a>
                </div>
            </div>
           
            
        @endforeach

     
  
@endsection
