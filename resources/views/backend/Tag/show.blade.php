@extends('layouts.app')

@section('content')
<div class ="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header"></div>
                   <br>
                   <form action="{{ route('Tag.index')}}" method="post">
                    <input type="hidden" name="_method" value="PATCH">
                    {{ csrf_field()}}
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Nama tag</label>
                      <input type="text" class="form-control" name="nama_tag" value="{{ $tag->nama_tag }}"  disabled>
                    </div>
                       <div class="form-group">
                            <a href="{{ url('Tag') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                    </form>
                  </div>
              </div>
            </div>
</div>
</div>

@endsection
