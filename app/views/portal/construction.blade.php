@extends('layout')
@section('title')
Construction Waste
@stop
@section('constructState')
class="active"
@stop
@section('body')
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#overview" href="#collapseOne">
        <span class="badge pull-right">2</span>
        Construction and Demolition Waste Recycling and Salvage Rates
      </a>
    </h4>
  </div>
  <div id="collapseOne" class="panel-collapse collapse">
    <div class="panel-body">
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
          5%
        </div>
      </div>
      <div class="table-responsive">
        <form class="form" role="form">
          <table class="table">

          </table>
        </form>
      </div>
    </div>
  </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------>
<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
        <span class="badge pull-right">2</span>
        Operational Waste Diversion from Landfill Rates
      </a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse">
    <div class="panel-body">
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
          10%
        </div>
      </div>
      <div class="table-responsive">
        <form class="form" role="form">
          <table class="table">

          </table>
        </form>
      </div>
    </div>
  </div>
</div>
@stop