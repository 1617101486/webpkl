@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Surat Masuk
			  	<div class="panel-title pull-right"><a href="{{ route('masuk.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table" border="2">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>No Surat</th>
					  <th>Tgl Surat</th>
					  <th>Pengirim</th>
					  <th>Perihal</th>
					  <th>Disposisi</th>
					  <th>File</th>
					  <th>Keterangan</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($data as $masuk)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $masuk->no_surat }}</td>
				    	<td><p>{{ $masuk->tgl_surat }}</p></td>
				    	<td><p>{{ $masuk->pengirim }}</p></td>
				    	<td><p>{{ $masuk->perihal }}</p></td>
				    	<td><p>{{ $masuk->Disposisi->keterangan }}</p></td>
				    	<td><p>{{ $masuk->file }}</p></td>
				    	<td><p>{{ $masuk->keterangan }}</p></td>
				    	<td>
							<a class="btn btn-warning" href="{{ route('masuk.edit',$masuk->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('masuk.show',$masuk->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('masuk.destroy',$masuk->id) }}">
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