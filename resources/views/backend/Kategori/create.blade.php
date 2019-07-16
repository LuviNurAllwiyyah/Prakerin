@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <br>
                <form action="{{ route('Kategori.store') }}" method="post">
                  {{  csrf_field() }}

                  <div class="form-group">
                      <label for="">Kategori</label>
                      <input class="form-control" type="text" name="nama_kategori">
                  </div>
                  <div class="form-group">
                      <button type="submit" class="btn btn-outline-info">
                          Simpan Data
                      </button>
                  </div>
                  <div class="fotm-group">
                      <a href="{{ url('Kategori')}}" class="btn btn-outline-info">Kembali</a>
                  </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
