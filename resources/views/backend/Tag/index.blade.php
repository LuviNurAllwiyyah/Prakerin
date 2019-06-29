@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                  <div class="card-header">Data Tag</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('Tag.create')}} class="btn btn-success">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Tag</th>
                          <th scope="col">Slug</th>
                          <th scope="col" colspan="3"><center>Aksi</center></th>
                        </tr>
                      </thead>
                      @php $no=1; @endphp
                      @foreach ($tag as $data)
                          <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $data->nama_tag}}</td>
                            <td>{{ $data->slug}}</td>
                            <td><a href="{{route('Tag.edit', $data->id)}}" class="btn btn-warning">Edit Data</a></td>
                            <td><a  href="{{route('Tag.show', $data->id)}}" class="btn btn-success"> Show Data</a></td>
                            <td><form action="{{route('Tag.destroy', $data->id)}}" method="post">
                                {{ csrf_field()}}
                            <input type ="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn -sm btn-danger">Hapus Data</button>
                            </form>
                        </td>
                          </tr>
                      @endforeach
                    </table>
                  </div>
            </div>
        </div>
    </div>
 </div>
 @endsection
