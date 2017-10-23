<?php 
include '../lib/socialnetwork-lib.php';
?>

<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="chrome">
        <meta http-equiv="X-UA-Compatible" content="mozilla">
        <title>RED ICO</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!--Calendario Plugin-->
        <link rel="stylesheet" href="../plugin/fullcalendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../plugin/fullcalendar/fullcalendar.print.css" media="print">
        <!--AdminTheme-->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
         <!-- iCheck -->
        <link rel="stylesheet" href="../plugin/iCheck/flat/blue.css">
        <link rel="stylesheet" href="../css/stylePC.css">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <?php echo Headerb (); ?>
            <?php echo Side (); ?>
            
            <div class="content-wrapper">
                <!--Page Header-->
                <section class="content-header">
                    <h1>
                        CHAT
                        <small>x Mensajes nuevos</small>
                    </h1>
                </section><!--Fin content-header-->
                
                <!--Contenido del menu-->
                <section class="content">
                    <div class="row">
                        <div class="col-mdrz-3">
                            <a href="chats.php" class="btn btn-primary btn-block margin-botom">MIS CHATS</a>
                            
                            <div class="box box-solid">
                                <div class="box-header with-border">
                                    <h3>CARPETAS</h3>
                                    
                                    <div class="box-tools">
                                        <button type="button" class="btn tbn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    </div><!--Fin box-tools-->
                                </div><!--Fin box-header with-border-->
                                
                                <div class="box-body no-padding">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li class="active">
                                            <a href="#">
                                                <i class="fa fa-inbox"></i>MIS CHATS
                                                <span class="label label-primary pull-rigth">13
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!--Fin box-body-->
                            </div><!--Fin box box-solid-->
                        </div><!--Fin columna-->
                        
                        <div class="col-md-9">
                            <div class="box box-primary">
                                <div class="box-body no-padding">
                                    <div class="mailbox-read-message">
                                        
                                        <!--Chat en directo-->
                                        <div class="row">
                                            <div clas="col-md-12">
                                                <!--Primario Chat-->
                                                <div class="box-header with-border">
                                                    <h3>Nombre del Usuario</h3>
                                                </div>
                                                <div class="box-body">
                                                    <div class="direct-chat-messages" style="overflow: scroll; height: 400px;">
                                                        
                                                        <div class="direct-chat-msg">
                                                            <!--Mensaje default en el lado izquierdo-->
                                                            <div class="direct-chat-info clearfix">
                                                                <span class="direct-chat-name pull-left">USUARIO </span>
                                                                <span class="direct-chat-timestamp pull-right">FECHA</span>
                                                            </div><!--Fin chat info-->
                                                            <!--Direct chat info-->
                                                            <img class="direct-chat-img" src="../avatars/defect.jpg">
                                                            <div class="direct-chat-text">
                                                                MENSAJE
                                                            </div>
                                                        </div><!--Fin mensaje chat-->
                                                        
                                                        <!--Mensjare del lado derecho-->
                                                        <div class="direct-chat-msg rigth">
                                                            <div class="direct-chat-info clearfix">
                                                                <span class="direct-chat-name pull-right">USUARIO</span>
                                                                <span class="direct-chat-timestamp pull-left">FECHA</span>
                                                            </div>
                                                            <img class="direct-chat-img" src="../avatars/defect.jpg" alt="Message User Image">
                                                            <div class="direct-chat-text">
                                                                MENSAJE2
                                                            </div>
                                                            
                                                        </div><!--Din de mensaje chat-->
                                                        
                                                    </div><!--Fin de direct chat mensajes-->
                                                </div><!--Fin de box body-->
                                                
                                                <div class="box-footer">
                                                    
                                                    <form action="" method="post">
                                                        <div class="input-group">
                                                            <input type="text" name="mensaje" placeholder="Escribe un mensaje" class="form-control">
                                                                <span class="input-group-btn">
                                                                    <button type="submit" name="enviar" class="btn btn-primary btn-flat">ENVIAR</button>
                                                                </span>
                                                        </div>
                                                    </form><!--Fin  form-->
                                                    
                                                </div><!--fin box footer-->
                                                
                                            </div><!--Fin col md 12-->
                                        </div><!--Fin row de chat Dir-->
                                        
                                    </div><!--Fin mailbox-->
                                </div><!--Fin box body no padding-->
                            </div><!--Fin box primary-->
                        </div><!--Fin col-->
                        
                    </div><!--Fin Row-->
                </section><!--Fin content-->
            </div><!--Fin content-wrapper-->
            
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
            
        </div><!--Fin wraper-->
        <!-- jQuery 2.2.3 -->
            <script src="../plugin/jQuery/jquery-2.2.3.min.js"></script>
            <!-- Bootstrap 3.3.6 -->
            <script src="../bootstrap/js/bootstrap.min.js"></script>
            <!-- Slimscroll -->
            <script src="../plugin/slimScroll/jquery.slimscroll.min.js"></script>
            <!-- FastClick -->
            <script src="../plugin/fastclick/fastclick.js"></script>
            <!-- AdminLTE App -->
            <script src="../dist/js/app.min.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="../dist/js/demo.js"></script>
    </body><!--Fin body-->
</html>