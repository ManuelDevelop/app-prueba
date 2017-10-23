<?php 
include '../lib/socialnetwork-lib.php';
?>

<!DOCTYPE html>
<htm class= "no-js">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="chrome">
        <meta http-equiv="X-UA-Compatible" content="mozilla">
        <title> RED ICO</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
        <link rel="stylesheet" type="text/css" href="../css/component.css">
        <link rel="stylesheet" type="text/css" href="../css/stylePC.css">
        
        
        <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
        <!--Codigo scroll-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="../js/jquery.jscroll.js"></script>
    </head>
    
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php echo Headerb (); ?>
            <?php echo Side (); ?>
            
            <div class="content-wrapper">
                <!--Contenido del menu-->
                <section class="content">
                    <script type="text/javascript">
                        function validarn(e) {
                            tecla = (document.all) ? e.keyCode : e.which;
                           if (tecla==8) return true;
                           if (tecla==9) return true;
                           if (tecla==11) return true;
                            patron = /[A-Za-zñ!#$%&()=?¿¡*+0-9-_á-úÁ-Ú :;,.]/;

                            te = String.fromCharCode(tecla);
                            return patron.test(te);
                        } 
                    </script> <!--Valida los caracaterer-->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <div class="col-md-8">
                            <!-- /.box -->
                            <div class="row">
                                
                                <!-- CAJA QUÉ ESTÁS PENSANDO? -->
                                <div class="col-md-12">     
                                    <div class="box box-primary direct-chat direct-chat-warning">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">¿Qué estás pensando?</h3>
                                            <button type="button" class="btn btn-box-tool" data-widget="collapse">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        
                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <form action="" method="post" enctype="multipart/form-data">
                                                <div class="input-group">
                                                    <textarea name="publicacion" onkeypress="return validarn(event)" placeholder="¿Qué estás pensando?" class="form-control" cols="200" rows="3" required></textarea>
                                                    <br><br><br><br>
                                                    <!-- START Input file nuevo diseño .-->
                                                    <input type="file" name="foto" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected"/>
                                                    <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Sube una foto</span></label>
                                                    <!-- END Input file nuevo diseño .-->
                                                    <br>
                                                    <button type="submit" name="publicar" class="btn btn-primary btn-flat">Publicar</button>
                                                </div>
                                            </form>
                                        
                                        </div> <!-- /.box-footer-->
                                    </div><!--/.direct-chat -->
                                </div>   <!-- /.col -->    
                            </div> <!-- /.row -->
                            
                            <!-- codigo scroll -->
                            <div class="scroll">
                               aqui irian las publicaciones
                            </div>
                            <script>
                                //Simple codigo para hacer la paginacion scroll
                                $(document).ready(function() { 
                                    $('.scroll').jscroll({
                                        loadingHtml: '<img src="../dist/img/invisible.png" alt="Loading" />'
                                    });
                                });
                            </script>     <!-- codigo scroll -->
                        </div>
                        
                        <div class="col-md-4">   
                            
                            <!-- PRODUCT LIST -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Solicitudes de amistad</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="products-list product-list-in-box">
                                        
                                        <li class="item">
                                            <div class="product-img">
                                                <img src="../avatars/defect.jpg" alt="Product Image">
                                            </div>
                                            <div class="product-info">
                                                <a href="#"><span class="label label-success pull-right">Aceptar</span></a><!--href a solicitud-->
                                                <br>
                                                <a href="#"><span class="label label-danger pull-right">Rechazar</span></a>
                                                <span class="product-description">SEXO
                                                </span>
                                            </div>
                                        </li><!-- /.item -->   
                                    </ul>
                                </div> <!-- /.box-body -->
                                
                                <div class="box-footer text-center">
                                    <a href="javascript:void(0)" class="uppercase">Ver todas las solicitudes</a>
                                 
                                </div> <!-- /.box-footer -->
                            </div>          <!-- /.box -->
                        </div> <!-- /.col -->

                        
                        
                        <div class="col-md-4">
                            <!-- USERS LIST -->
                            <div class="box box-danger">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Últimos registrados</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <ul class="users-list clearfix">
                                        <li>
                                            <img src="../avatars/defect.jpg" alt="User Image" width="100" height="200">
                                            <a class="users-list-name" href="#">Usuario</a>
                                            <span class="users-list-date">Hoy</span>
                                        </li>
                                    </ul>
                                    <!-- /.users-list -->
                                </div>
                                <!-- /.box-footer -->
                            </div>
                            <!--/.box -->
                        </div>
                        <!-- /.col -->
                    </div>      <!-- /.row -->
                </section><!--Fin content-->     
            </div><!--Fin content wrapper-->
            
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Actividad Reciente</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>             
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cumpleaños de X</h4>  
                                        <p>Cumple 23, el 24 de abril</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Mar actualizo su perfil</h4>
                                        <p>Nuevo telefono +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Z se unio a la lista de correo</h4>   
                                        <p>z@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executando</h4>
                                        <p>Tiempo de ejecucion. 5 segundos</p>
                                    </div>
                                </a>
                            </li>
                        </ul>        <!-- /.control-sidebar-menu -->
                        
                        <h3 class="control-sidebar-heading">Progreso</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Diseño de plantilla
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Resumen de Actualizaciones
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>    
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Interacion de Laravel
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>

                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>        <!-- /.control-sidebar-menu -->
                    </div>      <!-- /.tab-pane -->
                    
                    <!-- Settings tab content -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">Configuracion General</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Uso del panel de informes
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Alguna informacion sobre configuracion general
                                </p>
                            </div>          <!-- /.form-group -->
                            
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Permitir redireccionamiento de correo
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>          <!-- /.form-group -->
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Otros conjuntos de opcines estan disponibles
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Permitir que el usuaario muestre su nombre en las entradas de la Red
                                </p>
                            </div>    <!-- /.form-group -->
                            <h3 class="control-sidebar-heading">Configuraciones de chat</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Mostrarme en linea
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>   <!-- /.form-group -->
                            
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Desactivar notificaciones
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>   <!-- /.form-group -->
                            
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Eliminar el historial de chats
                                    <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div><!-- /.form-group -->
                        </form>
                    </div>      <!-- /.tab-pane -->
                </div> 
            </aside>  <!-- /.control-sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!--Fin wrapper-->
        
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="../plugin/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="../dist/js/app.min.js"></script>
        <!-- Sparkline -->
        <script src="../plugin/sparkline/jquery.sparkline.min.js"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="../plugin/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- JS modificar diseño input file -->
        <script src="../js/custom-file-input.js"></script>
    </body>
</htm>