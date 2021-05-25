@php $active = 'payslips' @endphp
@extends('layouts.main')
@section('title','Create Payslips')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <br><br>
        <h3>
            Create Payslips
          </h3>
            <form class="row g-3">
            <h2>
              <br>
            </h2>
              <div class="col-md-6">
                <label class="c-field__label" for="input17">Cut-off start</label>
                <input type="date" class="form-control" id="inputPassword4" required="" name="date">
              </div>

              <div class="col-md-6">
                <label class="c-field__label" for="input17">Cut-off end</label>
                <input type="date" class="form-control" id="inputPassword4" required="" name="date">
              </div>
              <h3>

              </h3>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Process</button>
              </div>
          </form>  
    </div>
</div>
@endsection