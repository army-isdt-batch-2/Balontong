@php $active = 'departments' @endphp
@extends('layouts.main')
@section('title','departments')
@section('content')
<div class="container">
    <div class="card">
      <div class="card-body">
        All Departments
        <br><br>
        <div class="col-12 text-end"> 
            <a href="/departments/create" class="btn btn-dark pull-right">Create</a>
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
              <th scope="col">Department</th>
              <th scope="col">Deleted</th>
              <th scope="col">Created</th>
              <th scope="col">Updated</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
                  @foreach($data as $x)
                    <tr> 
                        <th scope="row">{{ $x->id }}</th>
                        <th scope="row">{{ $x->departments }}</th> 
                        <th scope="row">{{ $x->deleted_at }}</th>
                        <th scope="row">{{ $x->created_at }}</th> 
                        <th scope="row">{{ $x->updated_at }}</th>  
                    </tr>
                  @endforeach    
            <h3>
              MEMBER'S
              <small class="text-muted">of LAMBATERO and LAMBATERA</small>
            </h3>
          <tbody>
       </div>          
    </div>
</div>
@endsection
