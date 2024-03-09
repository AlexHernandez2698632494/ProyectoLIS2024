@extends('layout.header')


@section('title','Docentes')
<body>    
    @include('layout.horizontalMenu')    
    <div class="wrapper">
        @include('layout.verticalMenu')
        <div id="content" class="mt-0 pt-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
                <div class="container-fluid">
                    <div class="col">
                        <button type="button" id="sidebarCollapse" class="btn" style="background-color: #7386D5">
                            <i class="fa-solid fa-bars" style="color: white"></i>                        
                        </button>  
                    </div>   
                    <div class="col">
                       <p style="color: black; margin: 0; font-weight: bold">Docentes</p>
                    </div>                                          
                </div>
            </nav>

           <div class="row">
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="card">
                     <div class="card-body">
                     	<p class="d-flex justify-content-center">Registro de docentes</p>
								<div class="separator"></div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="teacherName"><i class="fa-solid fa-person"></i></span>
									<input type="text" class="form-control" placeholder="Ingrese nombre" aria-label="name" name="teacherName">
								</div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="teacherLastName"><i class="fa-solid fa-person"></i></span>
									<input type="text" class="form-control" placeholder="Ingrese apellido" aria-label="lastname" name="teacherLastName">
								</div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="teacherDui"><i class="fa-solid fa-id-card"></i></span>
									<input type="text" class="form-control" placeholder="Ingrese DUI" aria-label="dui" name="teacherDui">
								</div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="teacherPhone"><i class="fa-solid fa-phone"></i></span>
									<input type="text" class="form-control" placeholder="Ingrese número de teléfono" aria-label="dui" name="teacherPhone">
								</div>
								<div class="input-group mb-3 mt-3">
									<span class="input-group-text" id="teacherEmail"><i class="fa-solid fa-envelope"></i></span>
									<input type="email" class="form-control" placeholder="Ingrese correo electrónico" aria-label="dui" name="teacherEmail">
								</div>
								<div class="row mx-2">
									<button type="button" class="btn btn-block btn-Add">Registrar docente</button>
								</div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-6">
                  <div class="card">
                     <div class="card-body">
                     	This is some text within a card body.
                     </div>
                  </div>
               </div>
           </div>

        </div>
    </div>

</body>
</html>