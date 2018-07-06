@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Instansi
			  @foreach ($instansi as $data)  
			  	<div class="panel-title pull-right"><a href="{{route('instansi.edit',$data->id)}}">Edit</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<center>
			  		<h3>
			  			{{ $data->nama}}<br>
			  		</h3>
			  		Alamat:{{ $data->alamat}},{{ $data->kab_kota}}<br>
			  		Fax:{{ $data->telepon}}/{{ $data->email}}<br>
			  		Ketua:{{ $data->ketua}}
			  	</center>
			 </div>
			  	</div>
			</div>
			@endforeach	
		</div>
	</div>
</div>
</div>
@endsection