<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::select('categoria_id', $categorias, $proyecto->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una categoria']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Proyectos') }}
            {{ Form::text('nombrepry', $proyecto->nombrepry, ['class' => 'form-control' . ($errors->has('nombrepry') ? ' is-invalid' : ''), 'placeholder' => 'Nombrepry']) }}
            {!! $errors->first('nombrepry', '<div class="invalid-feedback">:message</p>') !!}
        </div>
       
        <div class="form-group">
            {{ Form::label('Cuentanos tu historia') }}
            {{ Form::text('descripcion', $proyecto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Presupuesto solicitado:') }}
            {{ Form::number('Cantidad', $proyecto->Cantidad, ['class' => 'form-control' . ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'cantida $']) }}
            {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group {{ $errors->has('imgpry') ? 'has-error' : ''}}">
            <label for="imgpry" class="control-label">{{ 'Imgpry' }}</label>
        
            <input class="form-control" name="imgpry" type="file" id="imgpry" value="{{ isset($proyecto->imgpry) ? $proyecto->imgpry : ''}}" >
            {!! $errors->first('imgpry', '<p class="help-block">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>