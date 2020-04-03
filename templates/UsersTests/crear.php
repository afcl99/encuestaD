<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UsersTest $usersTest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('volver'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="usersTests form content">
            <?= $this->Form->create($usersTest) ?>
            <fieldset>
                <legend><?= __('Crear encuesta') ?></legend>
                <?= $this->Form->input('name', ['class' => 'form-control', 'type' => "text",  'required' => "", 'placeholder' => "Nombre de la encuesta"]) ?>
                <?= $this->Form->control('test_id', ['options' => $tests,'label' => false, 'class' => "form-control"]) ?>
                <?= $this->Form->input('message', ['class' => "form-control", 'type' => "text",  'required' => "", 'placeholder' => "Comentario"]) ?>
                <?= $this->Form->input('url_app', ['class' => "form-control", 'type' => "text",  'required' => "", 'placeholder' => "Url"]) ?>
                <?= $this->Form->control('max_date', ['label' => false, 'type' => 'date', 'class' => "form-control"]) ?>
            </fieldset>
            <?= $this->Form->button(__('Crear')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
