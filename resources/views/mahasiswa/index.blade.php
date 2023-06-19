@extends('mahasiswa.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="my-3 col-12 col-sm-7 col-md-5">
                <form action="{{ route('mahasiswa.index') }}" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="search" name="search" {{ Request::get('search') }}>
                        <button class="input-group-text btn btn-primary">Search</button>
                    </div>
                </form>
            </div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th>Email</th>
            <th>Tanggal lahir</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswa as $Mahasiswa)
            <tr>
                <td>{{ $Mahasiswa->id }}</td>
                <td>{{ $Mahasiswa->Nama }}</td>
                <td>{{ $Mahasiswa->Kelas }}</td>
                <td>{{ $Mahasiswa->Jurusan }}</td>
                <td>{{ $Mahasiswa->No_Handphone }}</td>
                <td>{{ $Mahasiswa->Email }}</td>
                <td>{{ $Mahasiswa->Tanggal_lahir }}</td>
                <td>
                    <form action="{{ route('mahasiswa.destroy', $Mahasiswa->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('mahasiswa.show', $Mahasiswa->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('mahasiswa.edit', $Mahasiswa->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection