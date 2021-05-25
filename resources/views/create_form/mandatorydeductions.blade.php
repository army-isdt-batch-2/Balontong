@php $active = 'mandatorydeductions' @endphp
@extends('layouts.main')
@section('title','Create Mandatory Deductions')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <br><br>
        <h3>
            Create Mandatory Deductions
          </h3>
          <br><br>
            <form class="row g-3">
              <div class="col-md-4">
                  <label for="inputState" class="form-label">Department</label>
                  <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>SSS</option>
                    <option>PAGIBIG</option>
                    <option>Philhealth</option>
                  </select>
                </div>
                  
              <div class="col-md-8">
                <label for="inputPassword4" class="form-label">Base Range</label>
                <input type="number" class="form-control" id="inputPassword4" placeholder="$30,000">
              </div>
                <h2>
                </h2>
              <div class="col-md-4">
                <label class="c-field__label" for="input17">Monthly Contribution</label>
                <input type="number" class="form-control" id="inputPassword4">
              </div>
              
              <div class="col-md-4">
                <label class="c-field__label" for="input17">Employee Share</label>
                <input type="number" class="form-control" id="inputPassword4">
              </div>

              <div class="col-md-4">
                <label class="c-field__label" for="input17">Employer Share</label>
                <input type="number" class="form-control" id="inputPassword4">
              </div>
                <h3>

                </h3>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>  
    </div>
</div>
@endsection