<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offreuser'), ['action' => 'edit', $offreuser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offreuser'), ['action' => 'delete', $offreuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offreuser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offreusers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offreuser'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offreusers view large-9 medium-8 columns content">
    <h3><?= h($offreuser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $offreuser->has('user') ? $this->Html->link($offreuser->user->id, ['controller' => 'Users', 'action' => 'view', $offreuser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= $offreuser->has('file') ? $this->Html->link($offreuser->file->name, ['controller' => 'Files', 'action' => 'view', $offreuser->file->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offreuser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Offresempoi Id') ?></th>
            <td><?= $this->Number->format($offreuser->offresempoi_id) ?></td>
        </tr>
    </table>
</div>
