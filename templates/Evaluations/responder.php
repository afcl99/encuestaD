<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="evaluations form content">
            <?= $this->Form->create($evaluation) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('userTests_id', ['options' => $usersTests]);
                    //echo $this->Form->control('email');
                    //echo $this->Form->control('toke');
                    //echo $this->Form->control('state');
                    echo $this->Form->control('age');
                    echo $this->Form->control('gener', ['label' => false, 'options' => ['m' => 'masculino', 'f' => 'femenino', 'o' => 'otro']]);
                    //echo $this->Form->control('location');
                    //echo $this->Form->control('date');
                ?>
            </fieldset>
            <?= $this->Form->control('role', ['options' => [1,2,3,4,5,6,7]]);?>
            <div class="form-group radio_questions ">
                <?= $this->Form->radio(
                    'campos',
                    [
                        ['value' => '1', 'text' => ' 1. Totalmente en desacuerdo'],
                        ['value' => '2', 'text' => ' 2. Algo insatisfecho'],
                        ['value' => '3', 'text' => ' 3. Ni satisfecho ni insatisfecho'],
                        ['value' => '4', 'text' => ' 4. Algo satisfecho'],
                        ['value' => '5', 'text' => ' 5. Muy satisfecho'],
                    ]
                ); ?>
            </div>
            <?= $this->Form->button(__('Responder')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
