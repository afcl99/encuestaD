<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Test[]|\Cake\Collection\CollectionInterface $tests
 */
?>
<div class="tests index content">
    <?= $this->Html->link(__('Agregar Test'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tests') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nombre') ?></th>
                    <th><?= $this->Paginator->sort('Descripcion') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tests as $test): ?>
                <tr>
                    <td><?= h($test->name) ?></td>
                    <td><?= h($test->description) ?></td>
                    <td class="actions">
                    <?= $this->Html->link(__('Ver preguntas'), ['controller'=>'Questions','action' => 'index', $test->id]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
