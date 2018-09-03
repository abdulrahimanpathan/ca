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
      <td style="width: 6px"><img src="{!! url('/images/'.$team['logo_uri']) !!}" alt="{{ $team['name'] }}" width="5%" height="5%" style="display:block; width:100%; height:auto;"></td>

      <td style="width: 6px">{{$team['name']}}</td>
      <td style="width: 6px"><a href="{{ route('team.show', $team['id']) }}" class="btn btn-info">View</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection