@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Disposisi
			  	<div class="panel-title pull-right"><a href="{{ route('disposisi.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Keterangan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		
				  		@php $no = 1; @endphp
				  		@foreach($data as $disposisi)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $disposisi->keterangan }}</td>
				    	
				    	
<td>
	<a class="btn btn-warning" href="{{ route('disposisi.edit',$disposisi->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('disposisi.show',$disposisi->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('disposisi.destroy',$disposisi->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
</div>
@endsection