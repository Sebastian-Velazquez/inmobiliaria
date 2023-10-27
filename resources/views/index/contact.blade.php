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
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pulchowk,+Patan,+Central+Region,+Nepal&amp;aq=0&amp;oq=pulch&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Pulchowk,+Patan+Dhoka,+Patan,+Bagmati,+Central+Region,+Nepal&amp;ll=27.678236,85.316853&amp;spn=0.001347,0.002642&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
  </div>
</div>
</div>
</div>

@endsection