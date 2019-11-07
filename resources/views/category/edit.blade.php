@extends('template')

@section('contact')

<h2>Category Edit Form</h2>

	<form method="post" action="{{route('category.update',$categories->id)}}">
    @csrf
    @method('PUT')
            <div class="form-group">
            <label>Category Name</label>
            <input type="text" name="name" class="form-control" value="{{$categories->name}}"><br>
             </div>


          <div class="form-group">
            <input type="submit" name="btnsubmit" value="Update">
            </div>
           
         </form>

@endsection