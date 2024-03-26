@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Company</th>
        <th scope="col">Departure Station</th>
        <th scope="col">Arrival Station</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Arrival Time</th>
        <th scope="col">Train Code</th>
      </tr>
    </thead>

    {{-- FOR EACH --}}
    @foreach ($trains as $train)
      <tbody>
        <tr>
          <th>{{$train->id}}</th>
          <td>{{$train->company}}</td>
          <td>{{$train->departure_station}}</td>
          <td>{{$train->arrival_station}}</td>
          <td>{{$train->departure_time}}</td>
          <td>{{$train->arrival_time}}</td>
          <td>{{$train->train_code}}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
  {{ $trains->links() }}
</div>
  
@endsection