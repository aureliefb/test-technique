@extends('layouts.master', ['title' => 'Formulaire'])

@section('main')

<section>
  <h1>Formulaire de contact</h1>
  <div class="container col-md-6">
    <form action="#" method="POST">
      <!-- error message "expired" linked to token csrf -->
      {{ csrf_field() }}

      <div class="row form-group {{ $errors->has('last_name') ? 'has-warning' : '' }}">
        <div class="col ">
          <label class="form-control-label" for="last_name">Nom</label>
          <input type="text" name="last_name" class="form-control" id="last_name" required="required" value=" {{ old('last_name') }}">
          {!! $errors->first('last_name', '<span class="form-text text-muted">:message</span>') !!}
        </div>

        <div class="col {{ $errors->has('first_name') ? 'has-warning' : '' }}">
          <label class="control-label" for="first_name">Prénom</label>
          <input type="text" name="first_name" class="form-control" id="first_name" required="required" value=" {{ old('first_name') }}">
          {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
        </div>
      </div>

      <div class="row form-group">
        <div class="col {{ $errors->has('email') ? 'has-warning' : '' }}">
          <label class="control-label" for="email">Email</label>
          <input type="email" name="email" class="form-control" id="email" required="required" value=" {{ old('email') }}">
          {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="col {{ $errors->has('phone') ? 'has-warning' : '' }}">
          <label class="control-label" for="phone">Téléphone</label>
          <input type="text" name="phone" class="form-control" id="phone" required="required" value=" {{ old('phone') }}">
          {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
        </div>
      </div>

      <div class="row form-group {{ $errors->has('subject') ? 'has-warning' : '' }}">
        <label class="control-label" for="subject">Description</label>
        <textarea rows="6" name="subject" class="form-control" id="subject" placeholder="Décrivez votre demande" required="required">{{ old('subject') }}</textarea>
        {!! $errors->first('subject', '<span class="help-block">:message</span>') !!}
      </div>

      <div class="row form-group">
        <button class="btn btn-info btn-block" type="submit">Envoyer</button>
      </div>
    </form>
  </div>
</section>

@endsection
