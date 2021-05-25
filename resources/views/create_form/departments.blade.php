@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title','Create Departments')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
          <br><br>
        <h3>
            Create Department
          </h3>
          <h4>
            <br>
          </h4>
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Department</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>  
    </div>
</div>
@endsection