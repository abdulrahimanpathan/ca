@extends('layouts.master')
@section('content')
<div class="container">
  <br/>
  @if(!empty($team_details))
  <h3>Team <a href="/teams/{{$team_details->id}}/show"><strong>{{$team_details->name }} </strong></a>details:</h3><br/>
  <div style="width: 10%">
    Team logo :<br/>
    <img src="{!! url('/images/'.$team_details->logo_uri) !!}" alt="{{ $team_details->name }}" width="100px" height="100px">
  </div>
  <h3>Players list :</h3>
  <table class="table table-striped">
  <thead>
    <tr>
      <th>Player Image</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
  </thead>
  <tbody>
    @if(count($team_details->players) > 0)
      @foreach($team_details->players as $player)
      <tr>
        <td><img src="{!! url('/images/'.$player->image_uri) !!}" alt="{{ $player->name }}" width="100px" height="100px"></td>

        <td>{{$player->first_name}}</td>
        <td>{{$player->last_name}}</td>
      </tr>
      @endforeach
    @else
      <tr>
      No players in this team
      </tr>
    @endif
  </tbody>
</table>
@else
<div>No data present for the given id</div>
@endif
</div>
@endsection