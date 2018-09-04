@extends('layouts.master')
@section('content')
<div class="container">
  <br/>
  <h3>Fixtures:</h3><br/>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Team 1</th>
      <th>Team 2</th>
      <th>Match Date</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fixtures as $fixture)
    <tr>
      <td>{{$fixture->team1_name}}</td>
      <td>{{$fixture->team2_name}}</td>
      <td>{{date('d-m-Y', strtotime($fixture->match_at))}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection