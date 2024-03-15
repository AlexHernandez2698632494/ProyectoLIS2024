@extends('layout.header')


@section('title','Eventos')
<body>    
    @include('layout.horizontalMenu')    
    <div class="wrapper">
        @include('layout.verticalMenu')
        <div id="content" class="mt-0 pt-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
                <div class="container-fluid">
                    <div class="col">
                          
                    </div>   
                    <div class="col">
                       <p style="color: black; margin: 0; font-weight: bold">Eventos</p>
                    </div>                                          
                </div>
            </nav>

           <div class="row">
               <div class="col-lg-5 col-md-6 col-12">
                  <div class="card">
                     <div class="card-body">
                     	<p class="d-flex justify-content-center">Registro de eventos</p>
								<div class="separator"></div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="eventname"><i class="fa-solid fa-person"></i></span>
									<input type="text" class="form-control" placeholder="Ingrese nombre del evento" aria-label="name" name="EventName">
								</div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="eventDate"><i class="fa-solid fa-calendar-days"></i></span>
									<input type="date" class="form-control" placeholder="Ingrese fecha del evento" aria-label="name" name="Eventdate">
								</div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="eventTime"><i class="fa-solid fa-clock"></i></span>
									<input type="time" class="form-control" placeholder="Ingrese la hora del evento" aria-label="name" name="Eventtime">
								</div>
                                <div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="eventLocation"><i class="fa-solid fa-location-dot"></i></span>
									<input type="text" class="form-control" placeholder="Ingrese el lugar del evento" aria-label="name" name="Eventlocation">
								</div>
                                <div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="eventPrice"><i class="fa-solid fa-dollar-sign"></i></span>
									<input type="number" class="form-control" placeholder="Ingrese el precio de la entrada del evento"step="0.10" min="0.00" max="100.00"  aria-label="name" name="Eventprice">
								</div>
                                <div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="eventPicture"><i class="fa-solid fa-image"></i></span>
									<input type="file" accept=".jpg, .jpeg, .png" class="form-control" placeholder="Ingrese la imagen promocional del evento" aria-label="name" name="Eventpicture">
								</div>
								<div class="row mx-2">
									<button type="button" class="btn btn-block btn-Add">Registrar evento</button>
								</div>
                     </div>
                  </div>
               </div>
               
           </div>

        </div>
    </div>

</body>
</html>