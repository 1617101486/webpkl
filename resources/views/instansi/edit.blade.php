@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Instansi 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('instansi.update',$instansi->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama instansi</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $instansi->nama}}" required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
			  			<label class="control-label">Alamat Instansi</label>
			  			<textarea name="alamat" class="form-control"  required>{{ $instansi->alamat }}</textarea>	
			  			@if ($errors->has('alamat'))
                            <span class="help-block">
                                <strong>{{ $errors->first('alamat') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('kab_kota') ? ' has-error' : '' }}">
			  			<label class="control-label">Kab/Kota</label>	
			  			<input type="text" name="kab_kota" class="form-control" value="{{ $instansi->kab_kota }}" required>
			  			@if ($errors->has('kab_kota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('kab_kota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">Telepon</label>	
			  			<input type="text" name="telepon" class="form-control" value="{{ $instansi->telepon }}" required>
			  			@if ($errors->has('telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('telepon') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $instansi->email }}" required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>
					<div class="form-group {{ $errors->has('ketua') ? ' has-error' : '' }}">
			  			<label class="control-label">Ketua</label>	
			  			<input type="text" name="ketua" class="form-control" value="{{ $instansi->ketua }}" required>
			  			@if ($errors->has('ketua'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ketua') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
</div>
@endsection