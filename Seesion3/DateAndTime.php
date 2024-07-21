<?php
/*
    Date And Time Functions

    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

*/

// timezone
echo date_default_timezone_get(). "<br>";
echo date("y-m-d-h-i-s"). "<br>";

date_default_timezone_set("Africa/cairo") ;// search => list of timezone

echo date_default_timezone_get(). "<br>";
echo date("y-m-d-h-i-s"). "<br>";



?>