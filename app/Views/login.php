<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/loginStyles.css'); ?>">
    <script src='https://sip.uan.mx/Investigadores/assets/js/jquery.min.js' ></script>
<script src='https://sip.uan.mx/Investigadores/assets/js/popper.min.js' ></script>
<script src='https://sip.uan.mx/Investigadores/assets/js/bootstrap.min.js' ></script>
<script src='https://sip.uan.mx/Investigadores/assets/js/jquery-ui.min.js' ></script>
</head>

<body style="background-image: url('<?php echo base_url('assets/img/fondo.jpg')?>'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Permiso económico</h3>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('/LoginController/login') ?>" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="usuario" name="nombre_usuario">
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="contraseña" name="contrasena">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Inicio" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php

if (session()->getFlashdata('Error')!=null){
    $bg = "danger";
    $bt = "warning";
    $icon = "<i class='fa-solid fa-circle-exclamation'></i>";
    $title = "Error";
    //if($modal['type']==1){$bg = "primary"; $bt = "success"; $icon = "<i class='fa-regular fa-circle-check'></i>";}
    ?>
<script type="text/javascript">
$(window).on('load', function() {$('#staticProcess2').modal('show');});
</script>
<div class="modal fade" id="staticProcess2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticProcess2Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content bg-<?php echo $bg; ?>">
            <div class="modal-header white align-self-center border-0">
                <h1 class="modal-title fs-5" id="staticProcess2Label"><?php echo "Error";?></h1>
            </div>
            <div class="modal-body border-0 pt-1 white">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2 fs-1 center align-self-center"><?php echo $icon;?></div>
                        <div class="col-md-10"><?php echo session()->getFlashdata('Error'); ?></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 white">
                <button type="button" class="btn btn-<?php echo $bt; ?>" data-bs-dismiss="modal">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</body>

</html>
