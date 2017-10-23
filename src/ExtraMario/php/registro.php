<?php 
include '../lib/socialnetwork-lib.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RED ICO</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="chrome">
        <meta http-equiv="X-UA-Compatible" content="mozilla">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../plugin/iCheck/square/blue.css">
        <!--Style -->
        <link rel="stylesheet" href="../css/styleIni.css">
        <!--Agregamos angular-->
        <script type="text/javascript" src="../plugin/Angular/angular.min.js"></script>
        <script type="text/javascript" src="../angularController/modulo.js"></script>
    </head>
    <body class="hold-transition register-page">
        <div id="fondo">
            <div class="register-box">
                <div class="register-logo">
                    <h1>RED SOCIAL</h1>
                </div><!--Fin register logo-->
                
                <div class="register-box-body" ng-app="modApp" ng-controller="ctrlApp">
                    <p class="login-box-msg">REGISTRATE EN RED ICO</p>
                    <form action="" method="post" ng-submit="enviar()">
                        <!--<fieldset>-->
                            <div class="form-group has-feedback">
                                <input ng-model="nCuenta" type="text" name="cuenta" class="form-control" placeholder="Numero de Cuenta"  required>
                                <span class="glyphicon glyphicon-star form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <input ng-model="pass" type="password" name="contrasena" class="form-control" placeholder="Contraseña" required>
                                <span class="glyphicon glyphicon-star form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <input type="text" name="repcontrasena" class="form-control" placeholder="Confirmar Contrasena"  required>
                                <span class="glyphicon glyphicon-star form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <input ng-model="email" type="email" name="email" class="form-control" placeholder="Email"  required>  
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            
                            <div class="form-group has-feedback">
                                <input ng-model="celular" type="text" name="celular" class="form-control" placeholder="Celular" required>  
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <input ng-model="name" type="text" name="nombre" class="form-control" placeholder="Nombres"  required>  
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>

                            <div class="form-group has-feedback">
                                <input ng-model="paterno" type="text" name="apellido paterno" class="form-control" placeholder="Apellido Paterno" required>  
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            
                            <div class="form-group has-feedback">
                                <input ng-model="materno" type="text" name="apellido maternno" class="form-control" placeholder="Apellido Materno" required>  
                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                            </div>
                            
                            <div class="row">
                                <div class="col-xs-13">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" nacme="ckeck" required> <a href="#">Acepto los terminos y condiciones</a>
                                        </label>
                                    </div>
                                </div><!--Fin col 10-->
                                <div class="col-xs-15">
                                  <button type="submit" name="registrar" class="btn btn-primary btn-block btn-flat">REGISTRARME</button>
                                </div><!--Fin col 12-->
                            </div>
                            
                        <!--</fieldset>-->

                        <br><a href="index.php" class="text-center">Tengo actualmente una cuenta</a>
                          
                    </form><!--Fin form-->
                    
                    
                    
                </div><!--Fin register box body-->
            </div><!--Fin register box-->
            
            <footer>
                    <h6>Copyright
                    <div id="vcard">
                        <div>
                            <span class="name">Red Social</span>-<span class="zip-code">56230</span>-<span class="phone">6666666666</span>-<span class="e-mail">marioavillegasl@gmail.com</span><br/>

                            <script type="text/javascript">
                                if(localStorage.pagecount){
                                    localStorage.pagecount=Number(localStorage.pagecount)+1;
                                }else{
                                    localStorage.pagecount=1;
                                }
                                document.write("Visitas en la pagina "+localStorage.pagecount+" veces");
                            </script>
                        </div>
                    </div>
                    </h6>
                </footer>
                
        </div><!--Fin id fondo-->
        
        <!-- jQuery 2.2.3 -->
        <script src="../plugin/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="../plugin/iCheck/icheck.min.js"></script>
        <script>
          $(function () {
            $('input').iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%' // optional
            });
          });
        </script>
        
    </body>
    
    
</html>