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
            <h3 class="box-title">WorkTime Karyawan Operator</h3>
            <a href="{{ route('worktime.create') }}" title="Tambah Data" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</a> 
          </div>

          <div class="box-body">
            <table id="table" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th class="text-center">NIK</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Jabatan</th>
                  <th class="text-center">Tanggal</th>
                  <th class="text-center">Total HM</th>
                  <th class="text-center">Total Jam Kerja</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @php( $no = 1 {{-- buat nomor urut --}})

              @foreach ($worktimes as $worktime)
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $worktime->karyawan_id}}</td>
                  <td>{{ $worktime->nama}}</td>
                  <td>{{ $worktime->jabatan}}</td>
                  <td>{{ $worktime->tgl}}</td>
                  <td>{{ $worktime->totalhm}}</td>
                  <td>{{ $worktime->totaljk}}</td>
                  <td>
                    <form action="{{route('worktime.destroy', $worktime ->id)}}" method="POST">
                    {{ csrf_field()}}
                    {{ method_field('DELETE')}}
                        <div class="btn-group">                      
                      <a href="" title="Edit Data" data-toggle="tooltip" data-target="#modal-default" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></a>
                      <a href="{{ route('worktime.edit',$worktime->id)}}" title="Edit Data" data-toggle="tooltip" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
  
                     <button class="btn btn-danger btn-sm" onclick='return confirm("Are you sure?")' type="submit"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>

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