<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * OrdersShipping Entity
 *
 * @property int $id
 * @property int $order_id
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $street_address
 * @property string $city
 * @property string $country
 * @property string $pincode
 * @property string $phone
 * @property string $mobile
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Order $order
 */
class OrdersShipping extends Entity
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
        '*' => true,
        'id' => false
    ];
}
