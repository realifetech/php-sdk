<?php


namespace LiveStyled\Order;


use LiveStyled\App\App;
use LiveStyled\Item;
use LiveStyled\User\User;

/**
 * Class Order
 * @package LiveStyled\Order
 * @property $iri
 * @property $_type
 * @property $id
 * @property App $app
 * @property User $user
 * @property $status
 * @property $grossAmount
 * @property $discount
 * @property $netAmount
 * @property $orderNumber
 * @property $createdAt
 * @property $updatedAt
 * @property $items
 */
class Order extends Item
{

}
