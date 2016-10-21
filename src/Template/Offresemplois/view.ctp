<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Offresemplois'), ['action' => 'edit', $offresemplois->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Offresemplois'), ['action' => 'delete', $offresemplois->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offresemplois'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Offresemplois'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offresemplois view large-9 medium-8 columns content">
    <h3><?= h($offresemplois->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($offresemplois->Titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scolarite') ?></th>
            <td><?= h($offresemplois->scolarite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secteuractivite') ?></th>
            <td><?= h($offresemplois->secteuractivite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Metier') ?></th>
            <td><?= h($offresemplois->metier) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($offresemplois->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Creation') ?></th>
            <td><?= h($offresemplois->creation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datedebut') ?></th>
            <td><?= h($offresemplois->datedebut) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descrition') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->descrition)); ?>
    </div>
    <div class="row">
        <h4><?= __('Responsabilites') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->responsabilites)); ?>
    </div>
    <div class="row">
        <h4><?= __('Aptitudes') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->aptitudes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Exigences') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->exigences)); ?>
    </div>
    <div class="row">
        <h4><?= __('Atouts') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->atouts)); ?>
    </div>
    <div class="row">
        <h4><?= __('Remarques') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->remarques)); ?>
    </div>
    <div class="row">
        <h4><?= __('Poste') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->poste)); ?>
    </div>
    <div class="row">
        <h4><?= __('Situation') ?></h4>
        <?= $this->Text->autoParagraph(h($offresemplois->situation)); ?>
    </div>
</div>
