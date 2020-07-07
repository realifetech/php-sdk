<?php


namespace LiveStyled\Booking;


use LiveStyled\ServiceClient;

class BookingService extends ServiceClient
{
    protected function getPath()
    {
        return '/v4/bookings';
    }

    public static function getModel()
    {
        return new Booking();
    }
}
