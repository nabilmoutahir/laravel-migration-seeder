@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <div class="row">
    
    {{-- FOR EACH --}}
    @foreach ($trains as $train)
        
    <div class="col-4">
      <div class=" card">
        <div class="card-body">
          <div>
            <span>Numero Treno:</span>
            <span>{{$train->id}}</span>
          </div>
          <div>
            <span>Compagnia:</span>
            <span>{{$train->company}}</span>
          </div>
          <div>
            <span>Partenza:</span>
            <span>{{$train->departure_station}}</span>
          </div>
          <div>
            <span>Arrivo:</span>
            <span>{{$train->arrival_station}}</span>
          </div>
        </div>
      </div>
    </div>

    @endforeach


  </div>
@endsection
