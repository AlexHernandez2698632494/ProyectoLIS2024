@extends('layout.header')


@section('title', 'Registro de eventos')

<body>
    @include('layout.horizontalMenu')
    <div class="wrapper">
        @include('layout.verticalMenu')
        <div id="content" class="mt-0 pt-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
                <div class="container-fluid">
                    <div class="col">
                        <button type="button" id="sidebarCollapse" class="btn" style="background-color: #0D87C8">
                            <i class="fa-solid fa-bars" style="color: white"></i>
                        </button>
                    </div>
                    <div class="col">
                        <p style="color: black; margin: 0; font-weight: bold">Registro de eventos</p>
                    </div>
                </div>
            </nav>

            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="card eventAdd-Card">
                        <div class="card-body">
                            <p class="d-flex justify-content-center">Registro de eventos</p>
                            <div class="separator"></div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventName"><i
                                        class="fa-solid fa-person"></i></span>
                                <input type="text" class="form-control" placeholder="Ingrese nombre del evento"
                                    aria-label="name" name="eventName">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventLocation"><i
                                        class="fa-solid fa-Location-dot"></i></span>
                                <input type="text" class="form-control" placeholder="Ingrese ubicacion del evento"
                                    aria-label="Location" name="eventLocation">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventDate"><i
                                        class="fa-solid fa-calendar"></i></span>
                                <input type="date" class="form-control" placeholder="Ingrese fecha del evento" aria-label="Date"
                                    name="eventDate">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventTime"><i
                                        class="fa-solid fa-clock"></i></span>
                                <input type="time" class="form-control" placeholder="Ingrese hora del evento"
                                    aria-label="Time" name="eventTime">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventDescription"><i
                                        class="fa-solid fa-info"></i></span>
                                        <input type="text" class="form-control" placeholder="Ingrese descripcion o sinopsis del evento"
                                        aria-label="Description" name="eventDescription">                                 
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventPrice"><i
                                        class="fa-solid fa-money-bill"></i></span>
                                <input type="Price" class="form-control" placeholder="Ingrese precio del evento"
                                    aria-label="Price" name="eventPrice">
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <span class="input-group-text" id="eventImage"><i
                                        class="fa-solid fa-image"></i></span>
                                        <input type="file" class="form-control" placeholder="Ingrese imagen promocional"
                                        aria-label="Image" name="eventImage" accept="image/jpeg, image/jpg, image/png">                                 
                            </div>
                            <div class="row mx-2 my-4">
                                <button type="button" class="btn btn-block btn-Add">Registrar evento</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="card card-events">
                        <div class="card-body cardBody-events">
                            <p class="d-flex justify-content-center">Eventos registrados</p>
                            <div class="separator mb-3"></div>
                            <table class="table" id="events-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Ubicacion</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Acciones</th>
                                    </tr>
                                </thead>
                                <div class="table-body">
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            <td>@mdo</td>
                                        </tr>
                                    </tbody>
                                </div>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
