<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Offresemplois'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresemplois index large-9 medium-8 columns content">
    <h3><?= __('Offresemplois') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scolarite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secteuractivite') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offresemplois as $offresemplois): ?>
            <tr>
                <td><?= h($offresemplois->Titre) ?></td>
                <td><?= h($offresemplois->creation) ?></td>
                <td><?= h($offresemplois->scolarite) ?></td>
                <td><?= h($offresemplois->secteuractivite) ?></td>
                <td><?= h($offresemplois->metier) ?></td>
                <td><?= h($offresemplois->datedebut) ?></td>
                <td><?= $offresemplois->has('user') ? $this->Html->link($offresemplois->user->username, ['controller' => 'Users', 'action' => 'view', $offresemplois->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offresemplois->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offresemplois->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offresemplois->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)]) ?>
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
