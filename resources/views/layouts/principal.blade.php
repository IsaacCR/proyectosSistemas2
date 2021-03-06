<!DOCTYPE html>
<html lang="es">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>::Cafe RED::</title> 
   
    {!!Html::style('//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css')!!}
    {!!Html::style('css/style.css')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Lato:400,700')!!}
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span class="icon-logo_red"></span></a> 
            </div>
    <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> 
        -Café Red- &nbsp; 
        <a href="/proyectosSistemas2/public/" class="btn btn-danger square-btn-adjust">Salir</a> 
    </div>
        </nav>   
           <!-- /. NAV TOP  -->
         <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li style="text-align: center;">
                        <a class="active-menu"  href="index.html"><i class=""></i>Café RED</a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-ong"></i> ONG</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                        </ul>
                    </li>
                                 
                    <li>
                        <a href="#"><i class="icon-ong"></i> Escuela</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/proyectosSistemas2/public/estudiantes">Estudiante</a>
                            </li>
                            <li>
                                <a href="/proyectosSistemas2/public/cursos">Curso</a>
                            </li>
                            <li>
                                <a href="/proyectosSistemas2/public/maestros">Maestro</a>
                            </li>
                            <li>
                                <a href="#">Horario</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-restaurante"></i>Restaurante</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-despensa"></i>Despensa</a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                        </ul>
                    </li>  
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
                   
          <div id="page-wrapper" >
            <div id="page-inner">
                
                    @yield('content')
                   
            </div>
        </div>
       
    </div>
    {!!Html::script('https://code.jquery.com/jquery-1.11.3.min.js')!!}
    {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js')!!}
    {!!Html::script('js/jquery.metisMenu.js')!!}    
</body>
</html>
