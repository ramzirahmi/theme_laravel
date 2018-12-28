@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="text-center">liste des cvs</h1>
            <div class="pull-right">
		<a href="{{url('cvs/create')}}" class="btn btn-success">nouveau cv</a>
			</div>
       
       		@foreach($xx as $cv)
       <div class="row">
       	<div class="col-sm-6 col-md-4">
        <div class="card">
        <img src="{{ asset(('storage/'.$cv->photo)) }}" 
        class="card-img-top" alt="..." width="100" height="100">
        <div class="card-body">
        <h5 class="card-title">{{$cv->titre}}</h5>
         <p class="card-text">{{$cv->presentation}}</p>
         <form action="{{url('cvs/'.$cv->id)}}" method="post">
			   {{csrf_field()}}
			   {{method_field('DELETE')}}

	<a href="{{url('cvs/'.$cv->id)}}" class="btn btn-primary">details</a>
	  @can('update', $cv)
	<a href="{{url('cvs/'.$cv->id.'/edit')}}" class="btn btn-success" >edit</a>
	 @endcan
		 @can('delete',$cv)
    <button type="submit" class="btn btn-danger" role="button">supprimer<button>
          @endcan 
		</form>
         </div>
        </div>
       </div>
      </div>
     @endforeach
     
    
			{{--
			<table class="table">
				<head>
					<tr>
						<th>titre</th>
						<th>presentation</th>
						<th>date</th>
						<th>action</th>
					</tr>
				</head>
				<body>
					@foreach($xx as $aa)
					<tr>
						<td>{{$aa->titre}}<br>
							{{$aa->user->name}}
						</td>
						<td>{{$aa->presentation}}</td>
						 <td>{{$aa->created_at}}</td>
						 
				<td>
			   <form action="{{url('cvs/'.$aa->id)}}" method="post">
			   {{csrf_field()}}
			   {{method_field('DELETE')}}

			   <a href="" class="btn btn-primary">details</a>
			   <a href="{{'cvs/'.$aa->id.'/edit'}}" class="btn btn-success" >edit</a>
               <button type="submit" class="btn btn-danger">supprimer</button>
			  </form>
			 </td>
			 </tr>
				@endforeach
				</body>
			</table>
			--}}

		</div>
	</div>
</div>

@endsection