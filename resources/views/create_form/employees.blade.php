@php $active = 'employees' @endphp
@extends('layouts.main')
@section('title','Create Employees')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <br><br>
        <h3>
            Create Employees
          </h3>
          <h4>
            <br>
          </h4>
            <form class="row g-3">
                <div class="col-md-12">
                  <label for="inputEmail4" class="form-label">Photo</label>
                  <input type="file" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                  <label for="inputPassword4" class="form-label">First Name</label>
                  <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Contact</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Birthday</label>
                    <input type="text" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Department</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Depart 1</option>
                      <option>Depart 2</option>
                      <option>Depart 3</option>
                    </select>
                  </div>

                  <div class="col-md-4">
                    <label for="inputCity" class="form-label">Designation</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-4">
                    <label for="inputCity" class="form-label">Basic Rate</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>

                <div class="col-md-6">
                    <label for="inputState" class="form-label">Philhealth Contribution table</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Depart 1</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">SSS Contribution table</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Depart 1</option>
                       </select>
                  </div>
                  <div class="col-md-6">
                    <label for="inputState" class="form-label">PAGIBIG Contribution table</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Depart 1</option>
                       </select>
                  </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Tax Contribution table</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>Depart 1</option>
                    </select>
                </div>
                <div class="col-md-12">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                    </select>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>