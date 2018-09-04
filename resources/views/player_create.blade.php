@extends('layouts.master')
@section('content')
<div class="container">
  <h3>Add Player :</h3><br/>
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
    @endif
  <form method="post" action="{{url('players/store')}}" enctype="multipart/form-data">
    @csrf
   <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
          <lable>Team</lable>
          <select class="form-control" name="team_id" required="true">
              <option value="">Select Team</option>
            @foreach($teams as $team)
              <option value="{{$team->id}}">{{$team->name}}</option>
            @endforeach
          </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="Name">First Name:</label>
        <input type="text" class="form-control" name="first_name" required="true">
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="Name">Last Name:</label>
        <input type="text" class="form-control" name="last_name" required="true">
      </div>
    </div> 
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="Name">Image:</label>
        <input type="file" name="filename" required="true">    
     </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Jersy">Jersy No</label>
          <input type="number" class="form-control" name="jersy_no" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Country">Country</label>
          <input type="text" class="form-control" name="country" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="No of matches">No of matches</label>
          <input type="number" class="form-control" name="no_of_matches" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="runs">Runs</label>
          <input type="number" class="form-control" name="runs" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="runs">Highest score</label>
          <input type="number" class="form-control" name="highest_score" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="runs">Fifties</label>
          <input type="number" class="form-control" name="fifties" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="runs">Hundreds</label>
          <input type="number" class="form-control" name="hundreds" required="true">
        </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4" style="margin-top:60px">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>
@endsection
