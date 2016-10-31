<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $offresemplois->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $offresemplois->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Offresemplois'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="offresemplois form large-9 medium-8 columns content">
    <?= $this->Form->create($offresemplois) ?>
    <fieldset>
        <legend><?= __('Editer l\'offre d\'emploie') ?></legend>
        <?php
        $poste = ['Employé' => 'Employé' , 'Stage' => 'Stage', 'Temporaire/Contractuel/Projet' => 'Temporaire/Contractuel/Projet', 'Saisonnier' => 'Saisonnier'];
        $situation = ['Temps Plein' => 'Temps Plein', 'Temps Partiel' => 'Temps Partiel', 'Journalier' => 'Journalier'];
            echo $this->Form->input('Titre');
            echo $this->Form->input('creation', ['label' => 'Date de création']);
            echo $this->Form->input('descrition', ['label' => 'Description']);
            echo $this->Form->input('responsabilites', ['label' => 'Responsabilités']);
            echo $this->Form->input('aptitudes', ['label' => 'Aptitudes requis']);
            echo $this->Form->input('exigences', ['label' => 'Exigences']);
            echo $this->Form->input('atouts', ['label' => 'Atouts']);
            echo $this->Form->input('remarques', ['label' => 'Remarque générales']);
            echo $this->Form->input('scolarite', ['label' => 'Niveau de scolarité']);
            echo $this->Form->input('secteuractivite', ['label' => 'Secteur d\'emploi'] );
            echo $this->Form->input('metier', ['label' => 'Métier']);
            echo $this->Form->input('poste', array('label' => 'Type de poste', 'default' => 'Employé', 'type' => 'select', 'options' => $poste));
            echo $this->Form->input('situation' ,array('label' => 'Situation d\'emploi', 'default' => 'Temps Plein', 'type' => 'select', 'options' => $situation));
            echo $this->Form->input('datedebut', ['label' => 'Date de début']);
            
            echo $this->Form->hidden('user_id',['value' => $this->request->session()->read('Auth.User.id')]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
