<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offresemplois Model
 *
 * @method \App\Model\Entity\Offresemplois get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offresemplois newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offresemplois[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offresemplois|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offresemplois patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offresemplois[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offresemplois findOrCreate($search, callable $callback = null)
 */
class OffresemploisTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('offresemplois');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('Titre', 'create')
            ->notEmpty('Titre');

        $validator
            ->date('creation')
            ->requirePresence('creation', 'create')
            ->notEmpty('creation');

        $validator
            ->requirePresence('descrition', 'create')
            ->notEmpty('descrition');

        $validator
            ->requirePresence('responsabilites', 'create')
            ->notEmpty('responsabilites');

        $validator
            ->requirePresence('aptitudes', 'create')
            ->notEmpty('aptitudes');

        $validator
            ->requirePresence('exigences', 'create')
            ->notEmpty('exigences');

        $validator
            ->requirePresence('atouts', 'create')
            ->notEmpty('atouts');

        $validator
            ->requirePresence('remarques', 'create')
            ->notEmpty('remarques');

        $validator
            ->requirePresence('scolarite', 'create')
            ->notEmpty('scolarite');

        $validator
            ->requirePresence('secteuractivite', 'create')
            ->notEmpty('secteuractivite');

        $validator
            ->requirePresence('metier', 'create')
            ->notEmpty('metier');

        $validator
            ->requirePresence('poste', 'create')
            ->notEmpty('poste');

        $validator
            ->requirePresence('situation', 'create')
            ->notEmpty('situation');

        $validator
            ->date('datedebut')
            ->requirePresence('datedebut', 'create')
            ->notEmpty('datedebut');
        
        

        return $validator;
    }
}
