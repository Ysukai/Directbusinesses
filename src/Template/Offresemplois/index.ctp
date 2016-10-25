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
                <th scope="col"><?= $this->Paginator->sort('Date de création') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Scolarité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Secteur dactivité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Métier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date de début') ?></th>
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
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offresemplois->id]) ?>
                    <?= $this->Html->link(__('Postuler'), ['controller' => 'offreusers', 'action' => 'postuler', $offresemplois->id]) ?>
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
