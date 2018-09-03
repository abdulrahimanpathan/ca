@extends('layouts.master')
@section('content')
<div class="container">
  <br/>
  @if(!empty($team_details))
  <h3>Team <strong>{{$team_details->name }} </strong>details:</h3><br/>
  <div style="width: 10%">
    Team logo :<br/>
    <img src="{!! url('/images/'.$team_details->logo_uri) !!}" alt="{{ $team_details->name }}" width="5%" height="5%" style="display:block; width:100%; height:auto;">
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
        <td style="width: 6px"><img src="{!! url('/images/'.$player->image_uri) !!}" alt="{{ $player->name }}" width="2%" height="2%" style="display:block; width:50%; height:10%;"></td>

        <td style="width: 6px">{{$player->first_name}}</td>
        <td style="width: 6px">{{$player->last_name}}</td>
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