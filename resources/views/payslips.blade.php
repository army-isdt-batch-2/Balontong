@php $active = 'payslips' @endphp
@extends('layouts.main')
@section('title','payslips')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
        All Payslips
        <br><br>
        <div class="col-12 text-end"> 
            <a href="/payslips/create" class="btn btn-dark pull-right">Create</a>
        </div> 
        <div class="col-11 text-end"> 
          <a href="/payslips/view" class="btn btn-dark pull-right">Views</a>
      </div> 
        <table class="table">
            <br><br>
              <div class="col-4"></div>
              <div class="col-4"></div>
              <div class="col-4 float-end "><input type="text" name="" id="" class="form-control" placeholder="Search"></div>
              
            </form>
          <thead>
            <tr>
                  <br><br>
              <th scope="col">#</th>
              <th scope="col">Processed</th>
              <th scope="col">Cut off Start</th>
              <th scope="col">Cut off End</th>
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
