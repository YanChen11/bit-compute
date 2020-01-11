<?php
require 'addition.php';

    function subtract($minuend, $subtrahend)
    {
        //  先求得减数的补码，然后求和
        $subtrahend = add(~$subtrahend, 1);

        return add($minuend, $subtrahend);
    }
