@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Kategori</div>
                <div class="card-body">
                    <center>
                        <a href= {{ route('Kategori.create') }} class="btn btn-success">Tambah Data</a>
                    </center>
                    <br>
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Slug</th>
                                <th scope="col" colspan="3" style="text-align: center,">Aksi</th>
                            </tr>
                        </thead>

                            @php  $no=1; @endphp
                            @foreach ($kategori as $data )
                                <tr>
                                   <td>{{  $no++ }}</td>
                                    <td>{{ $data->nama_kategori }}</td>
                                    <td>{{ $data->slug }}</td>
                                    <td><a href="{{ route('Kategori.edit', $data->id)}}" class="btn btn-warning">Edit Data</td></a>
                                    <td><a href= "{{ route('Kategori.show', $data->id) }}" class="btn btn-success">Show Data</td></a>
                                    <td><form action="{{ route('Kategori.destroy', $data->id)}}"method="post">
                                      {{  csrf_field()  }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button  class="btn btn -sm btn-danger" type="submit" >Hapus Data</button>
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
