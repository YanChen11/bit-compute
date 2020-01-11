<?php

    function add($summand, $addend)
    {
        $sum = $summand ^ $addend;
        //  判断进位
        $carry = $summand & $addend;

        while ($carry <<= 1) {
            $summand = $sum;
            $addend = $carry;

            $sum = $summand ^ $addend;
            $carry = $summand & $addend;
        }

        return $sum;
    }
