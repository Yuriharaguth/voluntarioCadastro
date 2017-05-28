
          
          <div class="form-group">
            {!! Form::label('name', 'Nome') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
          </div>
          
          <div class="form-group">
            {!! Form::label('phone', 'Telefone') !!}
            {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
          </div>


          <div class="form-group">
              {!! Form::label('intitution_id', 'Intituição') !!}
              {!! Form::select('intitution_id', $intitutions, null, ['class' => 'form-control', 'placeholder' => 'Selecione uma Instituição...']) !!}
          </div>
      
           {!! Form::submit('Enviar', ['class' => 'btn btn-default']) !!}


