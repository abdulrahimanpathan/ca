@extends('layouts.master')
@section('content')
<div class="container">
  <br/>
  <h3>Fixtures:</h3><br/>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Team Name</th>
      <th>Points</th>
    </tr>
  </thead>
  <tbody>
    @foreach($points as $point)
    <tr>
      <td>{{$point->name}}</td>
      <td>{{$point->points}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection