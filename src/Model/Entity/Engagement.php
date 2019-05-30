<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Engagement Entity
 *
 * @property int $id
 * @property int|null $engagement
 * @property int|null $user_id
 * @property int|null $event_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Event $event
 */
class Engagement extends Entity
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
        'engagement' => true,
        'user_id' => true,
        'event_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'event' => true
    ];
}
