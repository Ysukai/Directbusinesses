<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Offresemplois'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offresemplois form large-9 medium-8 columns content">
    <?= $this->Form->create($offresemplois) ?>
    <fieldset>
        <legend><?= __('Add Offresemplois') ?></legend>
        <?php
        $poste = ['Employé' => 'Employé' , 'Stage' => 'Stage', 'Temporaire/Contractuel/Projet' => 'Temporaire/Contractuel/Projet', 'Saisonnier' => 'Saisonnier'];
        $situation = ['Temps Plein' => 'Temps Plein', 'Temps Partiel' => 'Temps Partiel', 'Journalier' => 'Journalier'];
            echo $this->Form->input('Titre');
            echo $this->Form->input('creation');
            echo $this->Form->input('descrition');
            echo $this->Form->input('responsabilites');
            echo $this->Form->input('aptitudes');
            echo $this->Form->input('exigences');
            echo $this->Form->input('atouts');
            echo $this->Form->input('remarques');
            echo $this->Form->input('scolarite');
            echo $this->Form->input('secteuractivite');
            echo $this->Form->input('metier');
            echo $this->Form->select('poste', $poste, ['default' => 'Employé']);
            echo $this->Form->select('situation' ,$situation, ['default' => 'Temps Plein']);
            echo $this->Form->input('datedebut');
            
            echo $this->Form->hidden('user_id',['value' => $this->request->session()->read('Auth.User.id')]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
