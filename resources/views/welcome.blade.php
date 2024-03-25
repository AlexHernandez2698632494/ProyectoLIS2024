@extends('layout.header')

@section('title','Login')

{{-- #7facff --}}

<body>
	<section class="vh-100" style="background-color: #0060B4;">
		<div class="container py-5 h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card shadow-2-strong" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">
							<!-- Pills navs -->
							<ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
							<li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false" style="color: #0060B4;">Registrar Invitado</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false" style="color: #0060B4;">Registrar Estudiante</a>
								</li>
							</ul>
							<!-- Pills navs -->

							<h3 class="mb-1">¡Bienvenido!</h3>
							<h3 class="mb-3">Sistema de Registro de Asistencia DAC</h3>

							<div class="my-4" style="background-color:#0060B4; height: 3px; border-radius: 2rem"></div>
							<form method="GET" action="{{ route('invitado.index') }}">
								@csrf
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
									<input type="text" class="form-control" placeholder="Usuario" aria-label="user" name="user">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
									<input type="password" class="form-control" placeholder="Contraseña" aria-label="password" name="password">
								</div>
								<div class="row">
									<button class="btn btn-primary btn-lg btn-block mt-2" style="background-color: #0060B4;" type="submit">Ingresar</button>
								</div>
								<div class="row">
									<p class="mt-3"><a href="#" class="link-underline-primary">Olvide mi contraseña</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>
</body>

</html>