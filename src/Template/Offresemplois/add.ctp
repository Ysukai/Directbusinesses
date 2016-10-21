<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Offresemplois'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="offresemplois form large-9 medium-8 columns content">
    <?= $this->Form->create($offresemplois) ?>
    <fieldset>
        <legend><?= __('Add Offresemplois') ?></legend>
        <?php
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
            echo $this->Form->input('poste');
            echo $this->Form->input('situation');
            echo $this->Form->input('datedebut');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
