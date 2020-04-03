<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest $usersTest
 */
?>
<?= $this->Html->script('jquery.js') ?>
<script>function validateEmail()
{   
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(!emailPattern.test(document.getElementById('correo').value)){
        document.getElementById('correo').value='';
        alert('email incorrecto');
    }else{    
        if(($('input[name="co[]"]').length) == 0){
            var txt = '<li><input name="co[]"  value="'+ $("#correo").val() +'"></li>';    
            $("#Correos").append(txt);       
            document.getElementById('correo').value='';
        }else{
            existe=false;
            $('input[name="co[]"]').each(function(){
                if(($(this).val())==$("#correo").val()){
                    existe=true;
                }    
            });
            if(existe){
                alert('correo ya existente');
            }else{
                var txt = '<li><input name="co[]" value="'+ $("#correo").val() +'"></li>';
                $("#Correos").append(txt);              
                document.getElementById('correo').value='';
            }
        }      
    }
    
}</script>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('volver'), ['action' => 'index'], ['class' => 'button float-left']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests form content">
            <?= $this->Form->create() ?>
                <legend><?= __('Enviar') ?></legend>
                <div class="row">
                    <input class="form-control" type="text" id="correo" placeholder="Agregar un correo">
                    <div class="col-sm-6">
                        </div class='float-right'><button type="button" onclick="validateEmail()" class="form-control">Agregar</button>
                </div>
            <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
        <div class="col-12 col-md-6">  
        <ul id="Correos" ></ul>
    </div>
    </div>
</div>
