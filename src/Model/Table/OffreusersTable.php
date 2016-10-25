<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Offreusers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $Files
 * @property \Cake\ORM\Association\BelongsTo $Offresemplois
 *
 * @method \App\Model\Entity\Offreuser get($primaryKey, $options = [])
 * @method \App\Model\Entity\Offreuser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Offreuser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Offreuser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Offreuser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Offreuser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Offreuser findOrCreate($search, callable $callback = null)
 */
class OffreusersTable extends Table
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

        $this->table('offreusers');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Files', [
            'foreignKey' => 'file_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offresemplois', [
            'foreignKey' => 'offresemploi_id',
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
        $rules->add($rules->existsIn(['file_id'], 'Files'));
        $rules->add($rules->existsIn(['offresemploi_id'], 'Offresemplois'));

        return $rules;
    }
}
