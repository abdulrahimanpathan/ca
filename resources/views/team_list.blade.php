@extends('layouts.master')
@section('content')
<div class="container">
  <br/>
  <h3>Teams List:</h3><br/>
  @if (\Session::has('success'))
    <div class="alert alert-success">
      <p>{{ \Session::get('success') }}</p>
    </div><br />
   @endif
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Team Logo</th>
      <th>Team Name</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($teams as $team)
    <tr>
      <td><img src="{!! url('/images/'.$team['logo_uri']) !!}" alt="{{ $team['name'] }}" width="100px" height="100px"></td>

      <td>{{$team['name']}}</td>
      <td><a href="{{ route('team.show', $team['id']) }}" class="btn btn-info">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection