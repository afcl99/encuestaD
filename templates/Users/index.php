<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('Crear usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Nombre de usuario') ?></th>
                    <th><?= $this->Paginator->sort('Nombre completo') ?></th>
                    <th><?= $this->Paginator->sort('Rol') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= h($user->username) ?></td>
                    <td><?= h($user->first_name).' '.h($user->last_name) ?></td>
                    <td><?= h($user->role) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->username]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->username]) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username)]) ?>
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
