<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nik" class="col-md-4 control-label">NIK</label>
            <div class="col-md-6">
                {!! Form::text('nik',null, ['class'=> 'form-control', 'placeholder'=>'NIK', 'id'=>'nik' ]) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nama" class="col-md-4 control-label">Nama</label>
            <div class="col-md-8">
                {!! Form::text('nama',null, ['class'=> 'form-control', 'placeholder'=>'Nama', 'id'=>'nama' ]) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="dept" class="col-md-4 control-label">Departemen</label>
            <div class="col-md-6">
                {!! Form::text('dept', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Departemen', 'id'=>'dept']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="jabatan" class="col-md-4 control-label">Jabatan</label>
            <div class="col-md-6">
                {!! Form::text('jabatan', null, ['class'=> 'form-control', 'placeholder'=>'Jabatan', 'id'=>'jabatan']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
            <div class="col-md-6">
                {!! Form::text('lokasi', null, ['class'=> 'form-control', 'placeholder'=>'Lokasi Kerja', 'id'=>'lokasi']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="tglmskkerja" class="col-md-4 control-label">Masuk Kerja</label>
            <div class="col-md-6">
                {!! Form::text('tglmskkerja', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Tanggal Masuk Kerja', 'id'=>'tglmskkerja']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="perekrutan" class="col-md-4 control-label">Perekrutan</label>
            <div class="col-md-6">
                {!! Form::text('perekrutan', null, ['class'=> 'form-control', 'placeholder'=>'Perekrutan', 'id'=>'perekrutan']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nokk" class="col-md-4 control-label">No KK</label>
            <div class="col-md-6">
                {!! Form::text('nokk', null, ['class'=> 'form-control pull-right', 'placeholder'=>'No KK', 'id'=>'nokk']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="noktp" class="col-md-4 control-label">No KTP</label>
            <div class="col-md-6">
                {!! Form::text('noktp', null, ['class'=> 'form-control', 'placeholder'=>'No KTP', 'id'=>'noktp']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nonpwp" class="col-md-4 control-label">No NPWP</label>
            <div class="col-md-6">
                {!! Form::text('nonpwp', null, ['class'=> 'form-control', 'placeholder'=>'No Npwp', 'id'=>'nonpwp']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="nobpjsket" class="col-md-4 control-label">BPJS KET</label>
            <div class="col-md-6">
                {!! Form::text('nobpjsket', null, ['class'=> 'form-control pull-right', 'placeholder'=>'No BPJS Ketenagakerjaan', 'id'=>'nobpjsket']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nobpjskes" class="col-md-4 control-label">BPJS KES</label>
            <div class="col-md-6">
                {!! Form::text('nobpjskes', null, ['class'=> 'form-control', 'placeholder'=>'No BPJS Kesehatan', 'id'=>'nobpjskes']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nohp" class="col-md-4 control-label">No HP</label>
            <div class="col-md-6">
                {!! Form::text('nohp', null, ['class'=> 'form-control', 'placeholder'=>'No HP', 'id'=>'nohp']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="jkelamin" class="col-sm-4 control-label">Jenis Kelamin</label>
            <div class="col-md-6">
                {!! Form::text('jkelamin', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Jenis Kelamin', 'id'=>'jkelamin']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tmplhr" class="col-sm-4 control-label">Tempat Lahir</label>
            <div class="col-md-6">
                {!! Form::text('tmplhr', null, ['class'=> 'form-control', 'placeholder'=>'Tempat Lahir', 'id'=>'tmplhr']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tgllhr" class="col-sm-4 control-label">Tanggal Lahir</label>
            <div class="col-md-6">
                {!! Form::text('tgllhr', null, ['class'=> 'form-control', 'placeholder'=>'Tanggal Lahir', 'id'=>'tgllhr']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="alamatktp" class="col-sm-4 control-label">Alamat KTP</label>
            <div class="col-md-6">
                {!! Form::text('alamatktp', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Alamat KTP', 'id'=>'alamatktp']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="alamatdomisili" class="col-sm-4 control-label">Alamat Domisili</label>
            <div class="col-md-6">
                {!! Form::text('alamatdomisili', null, ['class'=> 'form-control', 'placeholder'=>'Alamat Domisili', 'id'=>'alamatdomisili']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="stsperkawinan" class="col-sm-4 control-label">Status Perkawinan</label>
            <div class="col-md-6">
                {!! Form::text('stsperkawinan', null, ['class'=> 'form-control', 'placeholder'=>'Status Perkawinan', 'id'=>'stsperkawinan']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="ststanggungan" class="col-sm-4 control-label">Status Tanggungan</label>
            <div class="col-md-6">
                {!! Form::text('ststanggungan', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Status Tanggungan', 'id'=>'ststanggungan']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="namaibu" class="col-sm-4 control-label">Nama Ibu</label>
            <div class="col-md-6">
                {!! Form::text('namaibu', null, ['class'=> 'form-control', 'placeholder'=>'Nama Ibu', 'id'=>'namaibu']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="namaistri" class="col-sm-4 control-label">Nama Istri</label>
            <div class="col-md-6">
                {!! Form::text('namaistri', null, ['class'=> 'form-control', 'placeholder'=>'Nama Istri', 'id'=>'namaistri']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="anak1" class="col-sm-4 control-label">Nama Anak 1</label>
            <div class="col-md-6">
                {!! Form::text('anak1', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Nama Anak 1', 'id'=>'anak1']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="anak2" class="col-sm-4 control-label">Nama Anak 2</label>
            <div class="col-md-6">
                {!! Form::text('anak2', null, ['class'=> 'form-control', 'placeholder'=>'Nama Anak 2', 'id'=>'anak2']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="anak3" class="col-sm-4 control-label">Nama Anak 3</label>
            <div class="col-md-6">
                {!! Form::text('anak3', null, ['class'=> 'form-control', 'placeholder'=>'Nama Anak 3', 'id'=>'anak3']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="pendidikan" class="col-sm-4 control-label">Pendidikan</label>
            <div class="col-md-6">
                {!! Form::text('pendidikan', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Pendidikan', 'id'=>'pendidikan']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="agama" class="col-sm-4 control-label">Agama</label>
            <div class="col-md-6">
                {!! Form::select('agama', ['I' => 'Islam', 'B' => 'Hindu'], null, ['class'=>'form-control', 'placeholder'=>'Pilih Agama', 'id'=>'agama']); !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="stskepegawaian" class="col-sm-4 control-label">Status Kepegawaian</label>
            <div class="col-md-6">
                {!! Form::text('stskepegawaian', null, ['class'=> 'form-control', 'placeholder'=>'Status Kepegawaian', 'id'=>'stskepegawaian']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="mulai" class="col-sm-4 control-label">Mulai</label>
            <div class="col-md-6">
                {!! Form::text('mulai', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Mulai', 'id'=>'mulai']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="agama" class="col-sm-4 control-label">Berakhir</label>
            <div class="col-md-6">
                {!! Form::text('berakhir', null, ['class'=> 'form-control', 'placeholder'=>'Berakhir', 'id'=>'berakhir']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="keterangan" class="col-sm-4 control-label">Keterangan</label>
            <div class="col-md-6">
                {!! Form::text('keterangan', null, ['class'=> 'form-control', 'placeholder'=>'Keterangan', 'id'=>'keterangan']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="bank" class="col-sm-4 control-label">Bank</label>
            <div class="col-md-6">
                {!! Form::text('bank', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Bank', 'id'=>'bank']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="norek" class="col-sm-4 control-label">No Rekening</label>
            <div class="col-md-6">
                {!! Form::text('norek', null, ['class'=> 'form-control', 'placeholder'=>'No Rekening', 'id'=>'norek']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="atasnama" class="col-sm-4 control-label">Atas Nama</label>
            <div class="col-md-6">
                {!! Form::text('atasnama', null, ['class'=> 'form-control', 'placeholder'=>'Atas Nama', 'id'=>'atasnama']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="foto" class="col-sm-4 control-label">File input</label>
            <div class="col-md-6">
                <input type="file" id="foto">
                <p class="help-block">Hanya File JPG atau PNG.</p>
            </div>
        </div>
    </div>
</div>