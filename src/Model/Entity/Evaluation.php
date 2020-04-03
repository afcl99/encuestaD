<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evaluation Entity
 *
 * @property int $id
 * @property int $userTests_id
 * @property string $email
 * @property string $toke
 * @property int $state
 * @property int $age
 * @property string $gender
 * @property string $location
 * @property \Cake\I18n\FrozenDate $date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\UsersTest $users_test
 */
class Evaluation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'userTests_id' => true,
        'email' => true,
        'toke' => true,
        'state' => true,
        'age' => true,
        'gender' => true,
        'location' => true,
        'date' => true,
        'created' => true,
        'modified' => true,
        'users_test' => true,
    ];
}