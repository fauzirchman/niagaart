<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    {!! Form::label('image', 'Image*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::file('image', null, ['class' => 'form-control', 'required' => 'required']) !!}
    </div>
</div><div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'Name*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    {!! Form::label('price', 'Price*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <div class="input-group">
        <div class="input-group-addon">Rp.</div>
        {!! Form::text('price', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('price', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
</div><div class="form-group {{ $errors->has('service_item_id') ? 'has-error' : ''}}">
    {!! Form::label('service_item_id', 'Service Item', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select class="form-control" name="service_item_id">
        @foreach ($serviceitems as $serviceitem)
          <option value="{{ $serviceitem->id }}">{{ $serviceitem->name }}</option>
        @endforeach
      </select>
      <p>* cannot be blank</p>
        {!! $errors->first('service_item_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
