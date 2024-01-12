@extends('layouts.header-footer')

@section('content')
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contacto</span>
    <h2>Contacto</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
    @if (session('message'))
      <h4 class="alert alert-succes" style="color:rgb(0, 255, 136)" role="alert">
        <strong>{{ session('message') }}</strong>
      </h4>
    @endif
    <form action="{{route('message')}}" role="form" method="POST">
      @csrf
        <input type="text" name="name" class="form-control" placeholder="Nombre completo" value="{{ old('name') ? old('name') : '' }}"/>
        {{-- Mensaje de error --}}
          @error('name')
          <span class="alert alert-succes" style="color:red" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        <input type="text" name="email" class="form-control" placeholder="nombre@email.com" value="{{ old('email') ? old('email') : '' }}"/>
        {{-- Mensaje de error --}}
          @error('email')
          <span class="alert alert-succes" style="color:red" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        <input type="text" name="phone" class="form-control" placeholder="Numero. Ej: 341222222" value="{{ old('phone') ? old('phone') : '' }}"/>
        <textarea rows="6" name="question" class="form-control" placeholder="Cuál es tu consulta?">{{ old('question') ? old('question') : '' }}</textarea>
          {{-- Mensaje de error --}}
          @error('question')
          <span class="alert alert-succes" style="color:red" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        <button type="submit" class="btn btn-primary" name="Submit" style="background-color: 	#a94b77">Enviar mensaje</button>
    </form>
                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4413.913535448567!2d-60.62361815282184!3d-33.026950063470615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7a9a133432f1b%3A0xf0ed0588a8ac0e04!2sInmobiliaria%20Flores!5e0!3m2!1ses-419!2sar!4v1698526118756!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></div>
  </div>
</div>
</div>
</div>

@endsection