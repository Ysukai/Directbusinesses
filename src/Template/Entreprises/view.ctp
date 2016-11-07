<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entreprise'), ['action' => 'edit', $entreprise->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entreprise'), ['action' => 'delete', $entreprise->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entreprise->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entreprises'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entreprise'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entreprises view large-9 medium-8 columns content">
    <h3><?= h($entreprise->name) ?></h3>
    <table class="vertical-table">
        <tr> 
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($entreprise->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Siteweb') ?></th>
            <td><?= h($entreprise->siteweb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Domaine') ?></th>
            <td><?= h($entreprise->domaine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coordonne') ?></th>
            <td><?= h($entreprise->coordonne) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($entreprise->description)); ?>
    </div>
</div>
