@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="card-header">Data Artikel</div>
                  <div class="card-body">
                  <center>
                    <a href={{route('Artikel.create')}} class="btn btn-success">Tambah Data</a>
                  </center>
                  <br>
                    <table class="table table-hover">
                      <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th>Kategori</th>
                                <th>Tag</th>
                                <th>Penulis</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($artikel as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->judul}}</td>
                                <td>{{ $data->slug}}</td>
                                <td>{{ $data->kategori->nama_kategori}}</td>
                                <td>
                                        <ol>
                                            @foreach ($data->tag as $tag)
                                                <li>{{ $tag->nama_tag }}</li>
                                            @endforeach
                                        </ol>
                                </td>
                                <td>{{ $data->user->name}}</td>
                                <td>
                                <img src="{{asset('assets/img/artikel/'.$data->foto.'')}}"
                                     style="width:100px; height:100px;" alt="foto"
                                     class="card-img img-fluid mb-4">
                                </td>

                                    <td>
                                    <form action="{{ route('Artikel.destroy',$data->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{route('Artikel.edit',$data->id)}}" class="btn btn-md btn-warning btn-floating">Edit</li></a>
                                                                                <a href="{{url('/')}}" class="btn btn-md btn-success btn-floating" >Show</a>
                                        <button type="submit" class="btn btn-md btn-danger btn-floating" data-qt-block="body">Delete</button>

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
@endsection
