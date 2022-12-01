<div class="form-group {{ $errors->has('nama_lengkap') ? 'has-error' : ''}}">
    <label for="nama_lengkap" class="control-label">{{ 'Nama Lengkap' }}</label>
    <input class="form-control" name="nama_lengkap" type="text" id="nama_lengkap" value="{{ isset($replacement->nama_lengkap) ? $replacement->nama_lengkap : ''}}" >
    {!! $errors->first('nama_lengkap', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('mata_kuliah') ? 'has-error' : ''}}">
    <label for="mata_kuliah" class="control-label">{{ 'Mata Kuliah' }}</label>
    <input class="form-control" name="mata_kuliah" type="text" id="mata_kuliah" value="{{ isset($replacement->mata_kuliah) ? $replacement->mata_kuliah : ''}}" >
    {!! $errors->first('mata_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('kelas') ? 'has-error' : ''}}">
    <label for="kelas" class="control-label">{{ 'Kelas' }}</label>
    <input class="form-control" name="kelas" type="text" id="kelas" value="{{ isset($replacement->kelas) ? $replacement->kelas : ''}}" >
    {!! $errors->first('kelas', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prodi') ? 'has-error' : ''}}">
    <label for="prodi" class="control-label">{{ 'Prodi' }}</label>
    <input class="form-control" name="prodi" type="text" id="prodi" value="{{ isset($replacement->prodi) ? $replacement->prodi : ''}}" >
    {!! $errors->first('prodi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('semester') ? 'has-error' : ''}}">
    <label for="semester" class="control-label">{{ 'Semester' }}</label>
    <input class="form-control" name="semester" type="text" id="semester" value="{{ isset($replacement->semester) ? $replacement->semester : ''}}" >
    {!! $errors->first('semester', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahun_akademik') ? 'has-error' : ''}}">
    <label for="tahun_akademik" class="control-label">{{ 'Tahun Akademik' }}</label>
    <input class="form-control" name="tahun_akademik" type="text" id="tahun_akademik" value="{{ isset($replacement->tahun_akademik) ? $replacement->tahun_akademik : ''}}" >
    {!! $errors->first('tahun_akademik', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal') ? 'has-error' : ''}}">
    <label for="tanggal" class="control-label">{{ 'Tanggal' }}</label>
    <input class="form-control" name="tanggal" type="date" id="tanggal" value="{{ isset($replacement->tanggal) ? $replacement->tanggal : ''}}" >
    {!! $errors->first('tanggal', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jadwal_kuliah') ? 'has-error' : ''}}">
    <label for="jadwal_kuliah" class="control-label">{{ 'Jadwal Kuliah' }}</label>
    <input class="form-control" name="jadwal_kuliah" type="datetime-local" id="jadwal_kuliah" value="{{ isset($replacement->jadwal_kuliah) ? $replacement->jadwal_kuliah : ''}}" >
    {!! $errors->first('jadwal_kuliah', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_replacement') ? 'has-error' : ''}}">
    <label for="tanggal_replacement" class="control-label">{{ 'Tanggal Replacement' }}</label>
    <input class="form-control" name="tanggal_replacement" type="date" id="tanggal_replacement" value="{{ isset($replacement->tanggal_replacement) ? $replacement->tanggal_replacement : ''}}" >
    {!! $errors->first('tanggal_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jam_replacement') ? 'has-error' : ''}}">
    <label for="jam_replacement" class="control-label">{{ 'Jam Replacement' }}</label>
    <input class="form-control" name="jam_replacement" type="time" id="jam_replacement" value="{{ isset($replacement->jam_replacement) ? $replacement->jam_replacement : ''}}" >
    {!! $errors->first('jam_replacement', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alasan_replacement') ? 'has-error' : ''}}">
    <label for="alasan_replacement" class="control-label">{{ 'Alasan Replacement' }}</label>
    <input class="form-control" name="alasan_replacement" type="text" id="alasan_replacement" value="{{ isset($replacement->alasan_replacement) ? $replacement->alasan_replacement : ''}}" >
    {!! $errors->first('alasan_replacement', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
