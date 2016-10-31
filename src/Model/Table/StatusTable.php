<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class StatusTable extends Table
{
    public function initialize(array $config){
        parent::initialize($config);
        
        $this->table('status');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->hasMany('Status',[
           'foreignKey' => 'status_id'
        ]);
    }
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['status_id'], 'Users'));

        return $rules;
    }
    public function validationDefault(Validator $validator) {
        
        $validator
                ->boolean('id')
                ->allowEmpty('id', 'create');
        
        return $validator;
    }
}