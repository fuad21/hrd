@extends('layouts.base')
@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      PT. Samarinda Bara Sejahtera
      <small>Coal & Trading</small>
    </h1>
  </section>
  
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">
        
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Karyawan</h3>
            <a href="{{ route('karyawan.create') }}" title="Tambah Data" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</a> 
          </div>
          
          <div class="box-body">
            <table id="table" class="table table-hover">
              <thead>
                <tr>
                  <th class="text-center">No</th>
                  <th class="text-center">NIK</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Departemen</th>
                  <th class="text-center">Jabatan</th>
                  <th class="text-center">Lokasi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @php( $no = 1 {{-- buat nomor urut --}})
                
                @foreach ($karyawans as $karyawan)
                <tr>
                  <td class="text-center">{{ $no++ }}</td>
                  <td>{{ $karyawan->nik}}</td>
                  <td>{{ $karyawan->nama}}</td>
                  <td>{{ $karyawan->dept}}</td>
                  <td>{{ $karyawan->jabatan}}</td>
                  <td>{{ $karyawan->lokasi}}</td>
                  <td>
                    <form action="{{route('karyawan.destroy', $karyawan ->id)}}" method="POST">
                      {{ csrf_field()}}
                      {{ method_field('DELETE')}}
                      <div class="btn-group">                      
                        <a href="{{ route('karyawan.edit',$karyawan->id)}}" title="Edit Data" data-toggle="tooltip" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a>
                        <a href="{{ route('karyawan.edit',$karyawan->id)}}" title="Edit Data" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                        
                        <button class="btn btn-danger btn-sm" type="submit"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        
                      </div>
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
  </section>
</div>
@endsection