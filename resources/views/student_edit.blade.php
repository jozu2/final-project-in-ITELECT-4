@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                <a href="{{ route('student.index') }}" class="btn btn-success btn-sm" title="Go back">Back</a>


                

              <div class="card" style="margin: 20px">
                <div class="card-header">Edit Student Information</div>  
                <div class="card-body">
                 
               
                <form action="{{ url('student/' .$stud->id) }}" method="POST">
                  {!! @csrf_field() !!}
                 @method("PATCH")
                 <input type="hidden" name="id" id="id" value="{{$stud->id}}"></br>

                  <label>Name</label></br>
                  <input type="text" name="name" id="name" class="form-control" value="{{$stud->name }}"></br>

                  <label>Section</label></br>
                  <input type="text" name="section" id="section" class="form-control" value="{{$stud->section }}"></br>

                  <label>Mobile</label></br>
                  <input type="text" name="mobile" id="mobile" class="form-control" value="{{$stud->mobile }}"></br>

                  <input type="submit" value="Update" class="btn btn-success"></br>

                  </form>
                </div>
              </div>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
