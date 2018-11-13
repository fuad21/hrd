<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="karyawan_id" class="col-sm-3 control-label">Nama</label>
            <div class="col-md-6">
                {!! Form::select('karyawan_id',$karyawans ,null, ['class'=> 'form-control', 'placeholder'=>'Nama', 'id'=>'karyawan_id']) !!}
            </div>
        </div>
    </div>
</div>

<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="tgl" class="col-sm-3 control-label">Tanggal</label>
            <div class="col-md-6">
                {!! Form::text('tgl', null, ['class'=> 'form-control pull-right', 'placeholder'=>'Tanggal', 'id'=>'tgl']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="lokasi" class="col-sm-3 control-label">Remarks</label>
            <div class="col-md-6">
                {!! Form::select('remark_id',$remarks, null, ['class'=> 'form-control', 'placeholder'=>'Remark', 'id'=>'remark_id']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="shift" class="col-sm-3 control-label">Shift</label>
            <div class="col-md-6">
                {!! Form::select('shift_id',$shifts, null, ['class'=> 'form-control', 'placeholder'=>'Shift', 'id'=>'shift_id']) !!}
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="form-group">
            <label for="hmin" class="col-sm-3 control-label">HM In</label>
            <div class="col-md-6">
                {!! Form::text('hmin', null, ['class'=> 'form-control', 'placeholder'=>'HM In', 'id'=>'hmin']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="hmout" class="col-sm-3 control-label">HM Out</label>
            <div class="col-md-6">
                {!! Form::text('hmout', null, ['class'=> 'form-control', 'placeholder'=>'HM Out', 'id'=>'hmout']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="in" class="col-sm-3 control-label">In</label>
            <div class="col-md-6">
                {!! Form::text('in', null, ['class'=> 'form-control', 'placeholder'=>'In', 'id'=>'in']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="out" class="col-sm-3 control-label">Out</label>
            <div class="col-md-6">
                {!! Form::text('out', null, ['class'=> 'form-control', 'placeholder'=>'Out', 'id'=>'out']) !!}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="lambat" class="col-sm-3 control-label">Lambat</label>
            <div class="col-md-6">
                {!! Form::text('lambat', null, ['class'=> 'form-control', 'placeholder'=>'Lambat', 'id'=>'lambat']) !!}
            </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="rest" class="col-sm-3 control-label">Rest</label>
            <div class="col-md-6">
                {!! Form::text('rest', null, ['class'=> 'form-control', 'placeholder'=>'Rest', 'id'=>'rest']) !!}
            </div>
        </div>
    </div>
</div>