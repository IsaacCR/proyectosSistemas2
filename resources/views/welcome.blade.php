<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>::CAFE RED::</title>
    {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css')!!}
    {!!Html::style('css/styles.css')!!}
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="icon-logo_red"></span>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="login">
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Login</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Small Modal -->
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="title" style="background:#B71C1C; margin-bottom:5px; padding: 4px;">
                    <span class="icon-logo_red"></span>
                </div>
                    <form action="" class="form-horizontal">
                        <div class="login-cont">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario">
                            </div>
                        
                            <div class="form-group ">
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <a href="/proyectosSistemas2/public/cursos" type ="submit" class="btn btn-default">Ingresar</a>
                                </div>
                          </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <!-- end Samll modal -->
    
    
    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Café R.E.D</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-8">
                <h2>Área Administrativa</h2>
                <p></p>
                <p></p>
            </div>
            
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-3">
                {!! Html::image('images/ong.png', "Imagen no encontrada", ['title' => 'despensa']) !!}
                <h2>ONG</h2>
                <p>Gestión de Donantes, Control de Actividades, Estados Financieros</p>               
            </div>
            <div class="col-sm-3">
                {!! Html::image('images/escuela.png', "Imagen no encontrada", ['title' => 'escuela']) !!}
                <h2>Escuela</h2>
                <p>Gestión de Estudiantes, Gestión Maestros y Gestión de Cursos</p>
            </div>
            <div class="col-sm-3">
                {!! Html::image('images/restaurante.png', "Imagen no encontrada", ['title' => 'restaurante']) !!}
                <h2>Restaurante</h2>
                <p>Control de Clientes, Manejos de Menú</p>
                <br/>
            </div>
            <div class="col-sm-3">
                {!!Html::image('images/despensa.png', "Imagen no encontrada", ['title' => 'despensa']) !!}
                <h2>Despensa</h2>
                <p>Gestión de Inventarios, Control de Proveedores, Clientes y Ventas</p>
            </div> 
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; URL -proyectos-</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    {!!Html::script('https://code.jquery.com/jquery-1.11.3.min.js')!!}
    {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')!!}
</body>
</html>