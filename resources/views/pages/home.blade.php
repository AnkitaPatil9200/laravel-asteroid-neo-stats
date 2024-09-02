@extends('includes.main-includes')
@section('content')
<!-- Ajax loader -->
<div class="overlay-spinner hide"></div>

<!-- Form -->
<div class="card">
    <div class="row" id="ajax-alert-message"></div>
    <form class="form-inline" role="form" method="post" action="{{url('/date-filter-asteroids-data')}}" id="form-date-filter-asteroids-data">
        @csrf
        <label class="sr-only" for="fromDate">From</label>
        <input class="date form-control mb-2 mr-sm-2" type="text" placeholder="From Date" name="from" id="from">

        <label class="sr-only" for="toDate">To</label>
        <input class="date form-control mb-2 mr-sm-2" type="text" placeholder="To Date" name="to" id="to">

        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>

<!-- Card to display stats -->
<div class="card-deck">
    <!-- Card to display Fastest Asteroid data -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Fastest Asteroid</h5>
            <p class="card-text" id="fa_id"></p>
            <p class="card-text" id="fa_speed"></p>
            <p class="card-text" id="fa_size"></p>
        </div>
    </div>
    <!-- Card to display Closest Asteroid data -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Closest Asteroid</h5>
            <p class="card-text" id="ca_id"></p>
            <p class="card-text" id="ca_distance"></p>
            <p class="card-text" id="ca_size"></p>
        </div>
    </div>
</div>

<!-- Canvas to display chart -->
<div>
  <canvas id="neoStatChart" width="50px"></canvas>
</div>
@endsection