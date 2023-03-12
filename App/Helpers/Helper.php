<?php
    namespace Helper;

    function formatDate(string $date)
    {
        $date_obj = date_create_from_format('Y/m/d', $date);
        return $date_obj->format("d/m/Y");
    }
