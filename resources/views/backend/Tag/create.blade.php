@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  <div class="card-header">Membuat Data Tag</div>
                  <br>
                  <form action="{{route('Tag.store')}}" method="post">
                            {{ csrf_field() }}

                      <div class="form-group">
                        <label for="exampleFormControlInput1">Tag</label>
                        <input type="text" class="form-control"  name="nama_tag">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                      </div>
                       <div class="form-group">
                          <a href="{{ url('Tag')}}" class="btn btn-outline-info">Kembali</a>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
