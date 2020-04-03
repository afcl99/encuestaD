<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evaluation $evaluation
 * @var \App\Model\Entity\Evaluation[]|\Cake\Collection\CollectionInterface $evaluations
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
                    
                    echo $evaluation->userTests_id;
                ?>
            </fieldset>

            <?= $this->Form->control('rta',['options' => [1,2,3,4,5,6,7]]);?>

            <?= $this->Form->button(__('Responder')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
