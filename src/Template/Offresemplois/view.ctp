<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Liste des offres d'emplois'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Postuler'), ['action' => 'add']) ?> </li>
        <li><?php if($this->offresemplois->isOwnedBy($id, $user['id'])) {   
                echo $this->Form->postLink(__('Supprimer cette offre d'emploi'), ['action' => 'delete', $offresemplois->id], ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)])  . '</li><li>';
                echo $this->Html->link(__('Modifier cette offre d'emploi'), ['action' => 'edit', $offresemplois->id]) . '</li><li>';
            }
        ?></li>

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
            <th scope="row"><?= __('Scolarité') ?></th>
            <td><?= h($offresemplois->scolarite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Secteur dactivité') ?></th>
            <td><?= h($offresemplois->secteuractivite) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Métier') ?></th>
            <td><?= h($offresemplois->metier) ?></td>
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
