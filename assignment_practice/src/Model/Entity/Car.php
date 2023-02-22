<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Car Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $brand_id
 * @property string $make
 * @property string $model
 * @property string $colors
 * @property string $description
 * @property string $image
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Brand $brand
 * @property \App\Model\Entity\Rating[] $ratings
 */
class Car extends Entity
{
   
    protected $_accessible = [
        'user_id' => true,
        'name' => true,
        'brand_id' => true,
        'make' => true,
        'model' => true,
        'colors' => true,
        'description' => true,
        'image' => true,
        'status' => true,
        'created_at' => true,
        'modified_at' => true,
        'user' => true,
        'brand' => true,
        'ratings' => true,
    ];
}
