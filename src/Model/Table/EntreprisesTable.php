<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Entreprises Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Entreprise get($primaryKey, $options = [])
 * @method \App\Model\Entity\Entreprise newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Entreprise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Entreprise|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Entreprise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Entreprise[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Entreprise findOrCreate($search, callable $callback = null)
 */
class EntreprisesTable extends Table
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

        $this->table('entreprises');
        $this->displayField('name');
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('siteweb', 'create')
            ->notEmpty('siteweb');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');
        $validator
            ->requirePresence('histoire', 'create')
            ->notEmpty('histoire');
        $validator
            ->requirePresence('culture', 'create')
            ->notEmpty('culture');

        $validator
            ->requirePresence('domaine', 'create')
            ->notEmpty('domaine');

        $validator
            ->requirePresence('coordonne', 'create')
            ->notEmpty('coordonne');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
