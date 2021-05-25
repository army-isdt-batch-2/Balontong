@php $active = 'employees' @endphp
@extends('layouts.main')
@section('title','employees')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
        All Employees
        <br><br>
        <div class="col-12 text-end"> 
            <a href="/employees/create" class="btn btn-dark pull-right">Create</a>
        </div> 
        <table class="table">
            <br><br>
          <form>
              <div class="col-4"></div>
              <div class="col-4"></div>
              <div class="col-4 float-end "><input type="text" name="" id="" class="form-control" placeholder="Search"></div>
              
            </form>
          <thead>
            <tr>
                  <br><br>
              <th scope="col">#</th>
              <th scope="col">Employee ID</th>
              <th scope="col">Gender</th>
              <th scope="col">Department</th>
              <th scope="col">Contact</th>
              <th scope="col">Total Earnings</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>ALON FAM</td>
              <td>Female</td>
              <td>@Beng</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>ALON FAM</td>
              <td>MALE</td>
              <td>@MrYOSO</td>
            </tr>
            
            <tr>
              <th scope="row">3</th>
              <td>ALON FAM</td>
              <td>MALE</td>
              <td>@NATCH</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>ALON FAM</td>
              <td>FEMALE</td>
              <td>@AMORA</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>ALON FAM</td>
              <td>FEMALE</td>
              <td>@SHAN</td>
            </tr>
            <h3>
              MEMBER'S
              <small class="text-muted">of LAMBATERO and LAMBATERA</small>
            </h3>
       </div>          
    </div>
</div>
@endsection
