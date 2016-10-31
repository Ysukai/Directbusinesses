<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Offreusers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="offreusers form large-9 medium-8 columns content">
    <?= $this->Form->create($offreuser) ?>
    <fieldset>
        <legend><?= __('Add Offreuser') ?></legend>
        <?php
            echo $this->Form->hidden('user_id', ['value' => $this->request->session()->read('Auth.User.id')]);
            echo $this->Form->input('file_id', ['options' => $files]);
            echo $this->Form->hidden('offresemploi_id', ['value' => $this->request->params['pass'][0]]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
