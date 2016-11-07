<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $entreprise->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $entreprise->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Entreprises'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entreprises form large-9 medium-8 columns content">
    <?= $this->Form->create($entreprise) ?> 
    <fieldset>
        <legend><?= __('Edit Entreprise') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('siteweb');
            echo $this->Form->input('description');
            echo $this->Form->input('domaine');
            echo $this->Form->input('coordonne');
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
