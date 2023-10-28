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


                <input type="text" class="form-control" placeholder="Full Name">
                <input type="text" class="form-control" placeholder="Dirección de correo electrónico">
                <input type="text" class="form-control" placeholder="Número de contacto">
                <textarea rows="6" class="form-control" placeholder="Mensaje"></textarea>
      <button type="submit" class="btn btn-success" name="Submit" style="background-color: 	#a94b77">Enviar mensaje</button>
          


                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4413.913535448567!2d-60.62361815282184!3d-33.026950063470615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7a9a133432f1b%3A0xf0ed0588a8ac0e04!2sInmobiliaria%20Flores!5e0!3m2!1ses-419!2sar!4v1698526118756!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></div>
  </div>
</div>
</div>
</div>

@endsection