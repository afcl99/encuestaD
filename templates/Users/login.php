<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <title>Login Dragones</title>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

</head>
<body>    
    <div class="modal-dialog text-center">
        <div class="col-sm-10 main-section">
            <div class="modal-content">
                <?= $this->Form->create(); ?>
                    <?= $this->Form->input('username', ['class' => 'form-control', 'type' => "text",  'required' => "", 'placeholder' => "Nombre de usaurio"]) ?>
                    <?= $this->Form->input('password',['class'=>'form-control','type'=>'password','required' => "",'placeholder'=>'Contraseña']); ?>
                    <?= $this->Form->submit('login',['class'=>'button']); ?>
                <?= $this->Form->end(); ?>
            </div>
        </div>
    </div>
</body>
</html>