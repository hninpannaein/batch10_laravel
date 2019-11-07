@extends('template')

@section('contact')



	<form method="post" action="{{route('category.store')}}">
    @csrf
            <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror">
            
            @error('name')
            <div class="text-danger">{{"This field is required}}</div>
            @enderror
             </div>


          <div class="form-group">
            <input type="submit" name="btnsubmit" class="btn btn-primary" value="Save">
            </div>
           
         </form>

@endsection