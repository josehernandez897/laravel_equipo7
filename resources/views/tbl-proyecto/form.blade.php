<div class="form-group {{ $errors->has('nombrepry') ? 'has-error' : ''}}">
    <label for="nombrepry" class="control-label">{{ 'Nombrepry' }}</label>
    <input class="form-control" name="nombrepry" type="text" id="nombrepry" value="{{ isset($tblproyecto->nombrepry) ? $tblproyecto->nombrepry : ''}}" >
    {!! $errors->first('nombrepry', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
    <label for="descripcion" class="control-label">{{ 'Descripcion' }}</label>
    <input class="form-control" name="descripcion" type="text" id="descripcion" value="{{ isset($tblproyecto->descripcion) ? $tblproyecto->descripcion : ''}}" >
    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('imgpry') ? 'has-error' : ''}}">
    <label for="imgpry" class="control-label">{{ 'Imgpry' }}</label>
   
    <input class="form-control" name="imgpry" type="file" id="imgpry" value="{{ isset($tblproyecto->imgpry) ? $tblproyecto->imgpry : ''}}" >
    {!! $errors->first('imgpry', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('id_user') ? 'has-error' : ''}}">
    <label for="nombrepry" class="control-label">{{ 'id_user' }}</label>
    <input class="form-control" name="id_user" type="text" id="id_user" value="{{ Auth::user()->id }}" readonly>
    {!! $errors->first('id_user', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
