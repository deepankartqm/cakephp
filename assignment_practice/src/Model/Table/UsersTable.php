<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        
        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Brands', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Cars', [
            'foreignKey' => 'user_id',
        ]);
        $this->hasMany('Ratings', [
            'foreignKey' => 'user_id',
        ]);
    }

  
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('name')
            ->maxLength('name', 25)
            ->requirePresence('name', 'create')
            ->add('name', [
                'notBlank' => [
                    'rule'    => ['notBlank'],
                    'message' => 'Please enter your name',
                    'last' => true
                ],
                'characters' => [
                    'rule'    => ['custom', '/^[A-Z_ ]+$/i'],
                    'allowEmpty' => false,
                    'last' => true,
                    'message' => 'Please Enter characters only.'
                ],
                'length' => [
                    'rule' => ['minLength', 3],
                    'last' => true,
                    'message' => 'Name need to be at least 3 characters long',
                ],
            ])
            ->notEmptyString('name', '** Please Enter Name.');


        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', '** Please Enter Valid Email.')
            ->notEmptyString('email', 'Please enter your email')
            ->add('email', 'unique', [
                'rule' => 'validateUnique', 'provider' => 'table',
                'message' => 'Email already exist please enter another email',
            ]);

        
        $validator
        ->scalar('password')
        ->maxLength('password', 100)
        ->requirePresence('password', 'create')
        ->add('password', [
            'notBlank' => [
                'rule'    => ['notBlank'],
                'message' => 'Please enter your password',
                'last' => true,
            ],
            'upperCase' => [
                'rule' => function ($value) {
                    $count = mb_strlen(preg_replace('![^A-Z]+!', '', $value));
                    if ($count > 0) {
                        return true;
                    } else {
                        return false;
                    }
                },
                'message' => 'Please enter at least one uppercase',
            ],
            'lowerCase' => [
                'rule' => function ($value) {
                    $count = mb_strlen(preg_replace('![^a-z]+!', '', $value));
                    if ($count > 0) {
                        return true;
                    } else {
                        return false;
                    }
                },
                'message' => 'Please enter at least one lowercase',
            ],
            'numeric' => [
                'rule' => function ($value) {
                    $count = mb_strlen(preg_replace('![^0-9]+!', '', $value));
                    if ($count > 0) {
                        return true;
                    } else {
                        return false;
                    }
                },
                'message' => 'Please enter at least one numeric',
            ],
            'special' => [
                'rule' => function ($value) {
                    $count = mb_strlen(preg_replace('![^@#*]+!', '', $value));
                    if ($count > 0) {
                        return true;
                    } else {
                        return false;
                    }
                },
                'message' => 'Please enter at least one special character',
            ],
            'minLength' => [
                'rule' => ['minLength', 8],
                'message' => 'Password need to be 8 characters long',
            ],
        ]);

        $validator
            ->integer('confirm_password')
            ->notEmptyString('confirm_password', '** Please Enter Confirm Password.');

        // $validator
        //     ->integer('role')
        //     ->notEmptyString('role');

        // $validator
        //     ->dateTime('created_at')
        //     ->notEmptyDateTime('created_at');

        // $validator
        //     ->dateTime('modified_at')
        //     ->notEmptyDateTime('modified_at');

        // $validator
        //     ->scalar('token')
        //     ->maxLength('token', 255)
        //     ->allowEmptyString('token');

        return $validator;
    }

   

    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
