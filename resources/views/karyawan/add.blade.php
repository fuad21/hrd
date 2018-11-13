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
                        <h3 class="box-title">Input Data Karyawan</h3>
                    </div>
                    <br>
                    <div class="container">
                        @include('etc.alert')
                        {!! Form::open(['route'=>'karyawan.store', 'method'=>'POST'],['class'=> 'form-control']) !!}
                        @include('Karyawan.form')
                        <br>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" name="submit" class="btn btn-info pull-right">Tambah Data</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection