<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Task Entity
 *
 * @property string $id
 * @property string $taskname
 * @property int $pomodoro_count
 * @property int $importance_level
 * @property int $urgency_level
 * @property string $memo
 * @property string $status
 * @property string $user_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Task extends Entity
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
        'taskname' => true,
        'pomodoro_count' => true,
        'importance_level' => true,
        'urgency_level' => true,
        'memo' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
