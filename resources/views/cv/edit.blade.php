@extends('layouts.app')

@section('content')

 
  @if(count($errors))
<div class="alert alert-danger" role="alert">
  <ul>
  	@foreach($errors->all() as $message)
  	<li>{{$message}}</li>
  	@endforeach
  </ul>
</div>
 @endif
 

 

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form action="{{url('cvs/'.$cv->id)}}" method="post">
				<input type="hidden" name="_method" value="PUT">
				{{csrf_field()}}
				<div class="form-group">
					<label>titre</label>
                 <input type="text" name="titre" class="form-control" value="{{$cv->titre}}">
                 
				</div>
				<div class="form-group">
				<label>presentation</label>
				<textarea type="text" name="presentation" class="form-control">
				{{$cv->presentation}}</textarea> 
				</div>
				<div class="form-group">
					<label for="">image</label>
					<input class="form-control" type="file" name="photo" value="$cv->photo">
				</div>
				<input type="submit"  class="form-control btn btn-danger" value="modifier">
			</form>
		</div>
	</div>
</div>


@endsection