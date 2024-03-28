@extends('layout.header')


@section('title','Control de eventos')
<body>    
    @include('layout.horizontalMenu')    
    <div class="wrapper">
        @include('layout.verticalMenu')
        <div id="content" class="mt-0 pt-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 mx-5">
               <div class="container-fluid">
                  <div class="col">
                      <button type="button" id="sidebarCollapse" class="btn" style="background-color: #0D87C8">
                          <i class="fa-solid fa-bars" style="color: white"></i>                        
                      </button>  
                  </div>   
                  <div class="col">
                     <p style="color: black; margin: 0; font-weight: bold">Control de eventos</p>
                  </div>                                          
               </div>
            </nav>

				<div class="card card-Teachers mx-5">
					<div class="card-body cardBody-Teachers">
						<p class="d-flex justify-content-center">Eventos registrados</p>
						<div class="separator mb-3"></div>											
							<table class="table data-table" id="teachers-table">
								<thead class="table-head">
									<tr>
										<th scope="col">Nombre</th>
										<th scope="col">Fecha</th>
										<th scope="col">Hora</th>
										<th scope="col">Acciones</th>
									</tr>
								</thead>
								<div class="table-body">
									<tbody>											
										<tr>
											<td>Participa del Via Crusis Universitario</td>
											<td>21/03/2024</td>
											<td>10:30 a.m.</td>
											<td>
												<button type="button" class="btn btn-primary icon-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Ver información"><i class="fa-solid fa-magnifying-glass"></i></button>
												<button type="button" class="btn btn-warning icon-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Actualizar"><i class="fa-solid fa-arrows-rotate" style="color: white"></i></button>
												<button type="button" class="btn btn-danger icon-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Eliminar"><i class="fa-solid fa-trash"></i></button>
											</td>
										</tr> 																				
									</tbody>
									<tbody>											
										<tr>
											<td>Participa del Via Crusis Universitario</td>
											<td>22/03/2024</td>
											<td>11:00 a.m.</td>
											<td>
												<button type="button" class="btn btn-primary icon-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Ver información"><i class="fa-solid fa-magnifying-glass"></i></button>
												<button type="button" class="btn btn-warning icon-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Actualizar"><i class="fa-solid fa-arrows-rotate" style="color: white"></i></button>
												<button type="button" class="btn btn-danger icon-button" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Eliminar"><i class="fa-solid fa-trash"></i></button>
											</td>
										</tr> 																				
									</tbody>
								</div>
							</table>																
						</div>
					</div>
				</div>									           
         </div>
    </div>

</body>
</html
</html>