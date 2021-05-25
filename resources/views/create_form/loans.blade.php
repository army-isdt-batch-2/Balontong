@php $active = 'loans' @endphp
@extends('layouts.main')
@section('title','Create Loans')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <br><br>
        <h3>
            Create Loans
          </h3>
          <h4>
            <br>
          </h4>
          <form class="row g-3">
            <div class="col-md-4">
              <label for="inputEmail4" class="form-label">Employee ID</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="ID AB-1234">
            </div>
            <div class="col-md-4">
              <label for="inputPassword4" class="form-label">Full Name</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Ramon R Ramos">
            </div>
            <div class="col-4">
              <label for="inputAddress" class="form-label">Designation</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="Cyber Security Specialist">
            </div>

            <div class="col-md-4">
              <div class="col-md-12">
                <label for="inputAddress" class="form-label">Loan Type</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Emergency Loan">
              </div>
              <div class="col-md-12">
                <label for="inputAddress" class="form-label">Loan Amount</label>
                <input type="numbert" class="form-control" id="inputAddress" placeholder="500,000">
              </div><div class="col-md-12">
                <label for="inputAddress" class="form-label">Months Payable</label>
                <input type="number" class="form-control" id="inputAddress" placeholder="36 Months">
              </div>
            </div>

            <div class="col-md-8">
              <div class="col-md-12">
                <label for="inputAddress" class="form-label">Address</label>
                <textarea rows="7" class="form-control"></textarea>
              </div>
            </div>

            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>  
  </div>
</div>
@endsection