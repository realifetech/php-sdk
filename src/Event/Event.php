<?php


namespace LiveStyled\Event;


use LiveStyled\App\App;
use LiveStyled\EventActivity\EventActivity;
use LiveStyled\EventCategory\EventCategory;
use LiveStyled\EventDate\EventDate;
use LiveStyled\EventTranslation\EventTranslation;
use LiveStyled\Item;
use LiveStyled\SocialMedia\SocialMedia;
use LiveStyled\UsefulInfo\UsefulInfo;
use LiveStyled\Venue\Venue;

/**
 * Class Event
 * @package LiveStyled\Event
 * @property $iri
 * @property $_type
 * @property $id
 * @property $status
 * @property $title
 * @property $description
 * @property $imageUrl
 * @property $externalId
 * @property $promoted
 * @property $createdAt
 * @property $updatedAt
 * @property EventDate[] $eventDates
 * @property App $app
 * @property EventCategory $category
 * @property Venue[] $venues
 * @property SocialMedia[] $socialMedia
 * @property UsefulInfo[] $usefulInfo
 * @property EventTranslation[] $translations
 * @property EventActivity[] $eventActivities
 * @property EventCategory[] $categories
 */
class Event extends Item
{

}
