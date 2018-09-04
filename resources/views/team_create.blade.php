@extends('layouts.master')
@section('content')
<div class="container">
  <h3>Add Team :</h3><br/>
  @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
  @endif
  <form method="post" action="{{url('teams/store')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="Name">Team Name:</label>
        <input type="text" class="form-control" name="name" required="true">
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-4"></div>
      <div class="form-group col-md-4">
        <label for="Name">Team Logo:</label>
        <input type="file" name="filename" required="true">    
     </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
        <div class="form-group col-md-4">
          <label for="Email">Club state</label>
          <input type="text" class="form-control" name="club_state" required="true">
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
