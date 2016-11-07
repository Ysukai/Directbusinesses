<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entreprise'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entreprises index large-9 medium-8 columns content">
    <h3><?= __('Entreprises') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('siteweb') ?></th>
                <th scope="col"><?= $this->Paginator->sort('domaine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coordonne') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody> 
            <?php foreach ($entreprises as $entreprise): ?>
            <tr>
                <td><?= $this->Number->format($entreprise->id) ?></td>
                <td><?= h($entreprise->name) ?></td>
                <td><?= h($entreprise->siteweb) ?></td>
                <td><?= h($entreprise->domaine) ?></td>
                <td><?= h($entreprise->coordonne) ?></td>
                <td><?= $entreprise->has('user') ? $this->Html->link($entreprise->user->id, ['controller' => 'Users', 'action' => 'view', $entreprise->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entreprise->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entreprise->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entreprise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entreprise->id)]) ?>
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
