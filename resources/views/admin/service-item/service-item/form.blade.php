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
</div><div class="form-group {{ $errors->has('discount_price') ? 'has-error' : ''}}">
    {!! Form::label('discount_price', 'Discount*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <div class="col-md-4">
      <select class="form-control" name="discount_val">
          <option value="none">None</option>
          <option value="percent">Percent</option>
          <option value="price">Price</option>
      </select>
      </div>
        <div class="col-md-8">
        {!! Form::text('discount_price', null, ['class' => 'form-control', 'placeholder' => "Just number (Ex: 20, 10, 50000)"]) !!}
        {!! $errors->first('discount_price', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('detail') ? 'has-error' : ''}}">
    {!! Form::label('detail', 'Detail*', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('detail', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('detail', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('service_id') ? 'has-error' : ''}}">
    {!! Form::label('service_id', 'Service', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
      <select class="form-control" name="service_id">
        @foreach ($services as $service)
          <option value="{{ $service->id }}">{{ $service->name }}</option>
        @endforeach
      </select>
      <p>* cannot be blank</p>
        {!! $errors->first('service_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
