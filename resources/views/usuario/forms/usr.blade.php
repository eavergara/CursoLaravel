  <div class="form-group">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('name',null,['class'=>'form-control',
    'placeholder'=>'Ingresar El Nombre De Usuario'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('Correo Electronico:')!!}
    {!!Form::text('email',null,['class'=>'form-control',
    'placeholder'=>'Ingresar El Correo Electronico'])!!}
  </div>

  <div class="form-group">
    {!!Form::label('Contraseña:')!!}
    {!!Form::password('password',['class'=>'form-control',
    'placeholder'=>'Ingresar Contraseña'])!!}
  </div>
