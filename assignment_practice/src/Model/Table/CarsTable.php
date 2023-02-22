<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class CarsTable extends Table
{
   
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('cars');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',
        ]);
        
        $this->belongsTo('Brands', [
            'foreignKey' => 'brand_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'car_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->notEmptyString('user_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name', "** Please Enter Car Name");

        $validator
            ->scalar('brand_id')
            ->maxLength('brand_id', 255)
            ->notEmptyString('brand_id');

        $validator
            ->scalar('make')
            ->maxLength('make', 255)
            ->requirePresence('make', 'create')
            ->notEmptyString('make', '** Please Enter Make field');

        $validator
            ->scalar('model')
            ->maxLength('model', 255)
            ->requirePresence('model', 'create')
            ->notEmptyString('model', '** Please Enter Model Of Car');

        $validator
            ->scalar('colors')
            ->requirePresence('colors', 'create')
            ->notEmptyString('colors','** Please Choose Car Color');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description','** Please Enter Car Description');

        // $validator
            
        //     ->requirePresence('image_file', 'create')
        //     ->notEmptyFile('image_file','** Please Choose file');

        $validator
            ->integer('status')
            ->notEmptyString('status');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->notEmptyDateTime('modified_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('user_id', 'Users'), ['errorField' => 'user_id']);
        $rules->add($rules->existsIn('brand_id', 'Brands'), ['errorField' => 'brand_id']);

        return $rules;
    }
}
