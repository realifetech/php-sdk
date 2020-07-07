<?php


namespace LiveStyled\User;


use LiveStyled\Device\Device;
use LiveStyled\Item;
use LiveStyled\MagicFields\MagicField;
use LiveStyled\UserEmail\UserEmail;

/**
 * Class User
 * @package LiveStyled\User
 * @property $iri
 * @property $_type
 * @property $id
 * @property UserEmail[] $userEmails
 * @property MagicField[] $magicFields
 * @property $email
 * @property $token
 * @property $authType
 * @property $status
 * @property $lastLogin
 * @property $createdAt
 * @property $updatedAt
 * @property $userConsent
 * @property Device[] $devices
 * @property $cohorts
 */
class User extends Item
{

}
