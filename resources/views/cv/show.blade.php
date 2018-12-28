@extends('layouts.app')

@section('content')

<div class="container" >
	<div class="row">
		<div class="col-md-12">
    
<div class="card">
  <div class="card-header">
  	<div class="row">
  		<div class="col-md-11">
  			<h3>Experience</h3>
  		</div>
  		<div class="col-md-1">
  			<button class="btn btn-success">ajouter</button>
  		</div>
  	</div>
  </div>
    <div class="card-body">
   <ul class="list-group">
  <li class="list-group-item">
  	<div class="row">
  		<div class="col-md-11">
  			<h4>A simple primary list group item</h4>
  			<p>Contextual classes also work with .list-group-item-action. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual list group item.</p>
  			<small>12/08/2018-03/10/2018</small>
  		</div>
  		<div class="col-md-1">
  		<button class="btn btn-warning">Edit</button>
  		</div>
  	 </div>
     </li>
     <li class="list-group-item">
  	<div class="row">
  		<div class="col-md-11">
  			<h4>A simple primary list group item</h4>
  			<p>Contextual classes also work with .list-group-item-action. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual list group item.</p>
  			<small>12/08/2018-03/10/2018</small>
  		</div>
  		<div class="col-md-1">
  		<button class="btn btn-warning">Edit</button>
  		</div>
  	 </div>
     </li>
     <li class="list-group-item">
  	<div class="row">
  		<div class="col-md-11">
  			<h4>A simple primary list group item</h4>
  			<p>Contextual classes also work with .list-group-item-action. Note the addition of the hover styles here not present in the previous example. Also supported is the .active state; apply it to indicate an active selection on a contextual list group item.</p>
  			<small>12/08/2018-03/10/2018</small>
  		</div>
  		<div class="col-md-1">
  		<button class="btn btn-warning">Edit</button>
  		</div>
  	 </div>
     </li>
    </ul>
 </div>
</div>
  <hr>
<div class="card">
  <div class="card-header">
  	<div class="row">
  		<div class="col-md-11">
  			<h3>formation</h3>
  		</div>
  		<div class="col-md-1">
  			<button class="btn btn-success">ajouter</button>
  		</div>
  	</div>
  </div>
  <div class="card-body">
   <p class="card-text">Cards assume no specific width to start, so they’ll be 100% wide unless otherwise stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities. </p>
    
  </div>
</div>
   <hr>
<div class="card">
  <div class="card-header">
  	<div class="row">
  		<div class="col-md-11">
  			<h3>portefolio</h3>
  		</div>
  		<div class="col-md-1">
  			<button class="btn btn-success">ajouter</button>
  		</div>
  	</div>
  </div>
  <div class="card-body">
    <p class="card-text">Cards assume no specific width to start, so they’ll be 100% wide unless otherwise stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities.</p>
    
  </div>
</div>
   <hr>
<div class="card">
  <div class="card-header">
  	<div class="row">
  		<div class="col-md-11">
  			<h3>competence</h3>
  		</div>
  		<div class="col-md-1">
  			<button class="btn btn-success">ajouter</button>
  		</div>
  	</div>
  </div>
  <div class="card-body">
   <p class="card-text">Cards assume no specific width to start, so they’ll be 100% wide unless otherwise stated. You can change this as needed with custom CSS, grid classes, grid Sass mixins, or utilities.</p>
   
  </div>
</div>
		</div>
	</div>
</div>

@endsection



{{-- @section('javascript')
<script src="js/vue.js"></script>

<script>
  var app = new vue({
  el:'#app',
  data:{
    message:  'je suis ramzi rahmi',
  }
  });
</script>

@endsection
--}}
