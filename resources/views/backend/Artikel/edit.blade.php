@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Artikel</div>

         <div class="card-body">
                <form action="{{ route('Artikel.update', $artikel->id)}}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control " value="{{ $artikel->judul}}" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label><br>

                    <p>
                            <img src="{{asset('assets/img/artikel/'.$artikel->foto.'')}}"
                            style="margin-top:15px;
                                   margin-bottom:15px;
                                   width:100px;
                                   height:100px;" alt="foto"
                            class="card-img img-fluid mb-4">
                    </p>

                    <div class="custom-file">
                    <input type="file" class="custom-file-input" multiple="" id="validatedCustomFile" name="foto" value="{{$artikel->foto}}">
                    <label class="custom-file-label" for="validatedCustomFile">{{ $artikel->foto }}</label>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label for="">Kategori</label>
                    <select class="form-control" name="id_kategori">
                    @foreach ($kategori as $data)
                    <option value="{{ $data->id }}"
                    {{$artikel->id_kategori == $data->id ? ' selected="selected" ':''}}>{{ $data->nama_kategori }}
                    </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tag</label>
                    <select name="tag[]" class="form-control multiple" id="s2_demo3" multiple>
                        @foreach ($tag as $data)
                    <option value="{{ $data->id }}"
                        {{ (in_array($data->id, $selected)) ? 'selected="selected"':''}}> {{ $data->nama_tag }}
                    </option>
                        @endforeach
                    </select>
                    </div>
                <div class="form-group">
                    <label for="">Konten</label>
                    <textarea name="konten" class="form-control" id="editor1">{{$artikel->konten }}</textarea>

                </div>
                <div class="form-group">
                        <button type ="submit" class="btn btn-primary btn-floating" data-qt-block="body">Simpan</button>
                </div>
                </form>
                </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
