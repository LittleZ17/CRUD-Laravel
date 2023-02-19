<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('prhase') }}
            {{ Form::text('prhase', $quote->prhase, ['class' => 'form-control' . ($errors->has('prhase') ? ' is-invalid' : ''), 'placeholder' => 'Prhase']) }}
            {!! $errors->first('prhase', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('author') }}
            {{ Form::text('author', $quote->author, ['class' => 'form-control' . ($errors->has('author') ? ' is-invalid' : ''), 'placeholder' => 'Author']) }}
            {!! $errors->first('author', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('img') }}
            {{ Form::text('img', $quote->img, ['class' => 'form-control' . ($errors->has('img') ? ' is-invalid' : ''), 'placeholder' => 'Img']) }}
            {!! $errors->first('img', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>