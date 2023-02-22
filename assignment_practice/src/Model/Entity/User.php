<?php
declare(strict_types=1);

namespace App\Model\Entity;

// use Cake\Auth\DefaultPasswordHasher
use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line
use Cake\ORM\Entity;
/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int $status
 * @property int $role
 * @property \Cake\I18n\FrozenTime $created_at
 * @property \Cake\I18n\FrozenTime $modified_at
 * @property string|null $token
 *
 * @property \App\Model\Entity\Brand[] $brands
 * @property \App\Model\Entity\Car[] $cars
 * @property \App\Model\Entity\Rating[] $ratings
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        '*' => true,
        // 'email' => true,
        // 'password' => true,
        // 'status' => true,
        // 'role' => true,
        // 'created_at' => true,
        // 'modified_at' => true,
        // 'token' => true,
        // 'brands' => true,
        // 'cars' => true,
        // 'ratings' => true,
        // 'image' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
        'token',
    ];

    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    
    }
}
