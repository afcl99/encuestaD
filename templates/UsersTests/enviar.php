<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest $usersTest
 */
?>
<?= $this->Html->script('jquery.js') ?>
<?= $this->Html->script('script.min.js') ?>
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
                <?= $this->Form->input('correo', ['class' => 'form-control', 'type' => "text",  'required' => "", 'placeholder' => "Correos"]) ?>
                <?= $this->Form->button(__('Enviar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
