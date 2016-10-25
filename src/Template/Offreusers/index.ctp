<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Offreuser'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offreusers index large-9 medium-8 columns content">
    <h3><?= __('Offreusers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offresemploi_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offreusers as $offreuser): ?>
            <tr>
                <td><?= $this->Number->format($offreuser->id) ?></td>
                <td><?= $offreuser->has('user') ? $this->Html->link($offreuser->user->id, ['controller' => 'Users', 'action' => 'view', $offreuser->user->id]) : '' ?></td>
                <td><?= $offreuser->has('file') ? $this->Html->link($offreuser->file->name, ['controller' => 'Files', 'action' => 'view', $offreuser->file->id]) : '' ?></td>
                <td><?= $this->Number->format($offreuser->offresemploi_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offreuser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offreuser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offreuser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offreuser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
