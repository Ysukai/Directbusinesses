<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Créer une nouvelle offre d\'emploi'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresemplois index large-9 medium-8 columns content">
    <h3><?= __('Liste des offres d\'emplois') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scolarite', 'Niveau de scolarité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('secteuractivite', 'Secteur d\'activité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('metier', 'Métier') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datedebut', 'Date de début') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id', 'Entreprise') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($offresemplois as $offresemplois): ?>
            <?php if($this->request->session()->read('Auth.User.id') === $offresemplois->user_id): ?>
            <tr>
                <td><?= h($offresemplois->Titre) ?></td>
                <td><?= h($offresemplois->scolarite) ?></td>
                <td><?= h($offresemplois->secteuractivite) ?></td>
                <td><?= h($offresemplois->metier) ?></td>
                <td><?= h($offresemplois->datedebut) ?></td>
                <td><?= $offresemplois->has('user') ? $this->Html->link($offresemplois->user->username, ['controller' => 'Users', 'action' => 'view', $offresemplois->user->id]) : '' ?></td>
                <td class="actions">
                    
                    <?= $this->Html->link(__('View'), ['action' => 'view', $offresemplois->id]) ?>
                    <?php if($this->request->session()->read('Auth.User')):?>
                    <?= $this->Html->link(__('Publier'), ['controller' => 'Offreusers', 'action' => 'add', $offresemplois->id]) ?>
                    <?php endif;?>
                    <?php $idUser = $this->request->session()->read('Auth.User') ;
                    if($idUser['id'] === $offresemplois->user_id || $idUser['role'] === 'admin'):?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $offresemplois->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $offresemplois->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)]) ?>
                    
                    <?php endif; ?>
                </td>
            </tr>
            <?php endif; ?>
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

