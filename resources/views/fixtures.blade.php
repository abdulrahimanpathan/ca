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
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($fixtures as $fixture)
    <tr>
      <td>{{$fixture->team1_name}}</td>
      <td>{{$fixture->team2_name}}</td>
      <td>{{date('d-m-Y', strtotime($fixture->match_at))}}</td>
      <td>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yourModal{{$fixture->id}}">View</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@foreach ($fixtures as $fixture)    
    <div class="modal fade" id="yourModal{{$fixture->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">{{$fixture->team1_name}} VS {{$fixture->team2_name}}</h4>
          </div>
          <div class="modal-body">
            <strong>Winner : </strong>{{$fixture->result->winner->name}}
          </div>
          <div>
          <h4 style="padding-left: 12px">Players of winning team :</h4></div>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Player Image</th>
                <th>First Name</th>
                <th>Last Name</th>
              </tr>
            </thead>
            <tbody>
              @if(count($fixture->result->winner->players) > 0)
              @foreach($fixture->result->winner->players as $player)
                <tr>
                <td><img src="{!! url('/images/'.$player->image_uri) !!}" alt="{{ $player->name }}" width="100px" height="100px"></td>
                  <td>{{$player->first_name}}</td>
                  <td>{{$player->last_name}}</td>
                </tr>
              @endforeach
              @else
              <h6 style="padding-left: 12px"> No Players in this team </h6>
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endforeach
@endsection