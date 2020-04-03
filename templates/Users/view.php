<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->username], ['class' => 'button float-left']) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->username], ['confirm' => __('Are you sure you want to delete # {0}?', $user->username), 'class' => 'button float-left']) ?>
            <?= $this->Html->link(__('Volver'), ['action' => 'index'], ['class' => 'button float-left']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre completo') ?></th>
                    <td><?= h($user->first_name).' '.h($user->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rol') ?></th>
                    <td><?= h($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Creado en') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activo') ?></th>
                    <td><?= $user->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
