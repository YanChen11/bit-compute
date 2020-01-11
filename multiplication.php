<?php
    require 'addition.php';

    function multiply($multiplicand, $multiplicator)
    {
        // 判断符号位
        $flag = ($multiplicand ^ $multiplicator) < 0 ? false : true;
        //  被乘数和乘数去绝对值
        $multiplicand = $multiplicand < 0 ? add(~$multiplicand, 1) : $multiplicand;
        $multiplicator = $multiplicator < 0 ?  add(~$multiplicator, 1) : $multiplicator;

        $product = 0;
        $multiplicator = decbin($multiplicator);
        $length = strlen($multiplicator);

        for ($i = 0; $i < $length; $i ++) {
            if ($multiplicator[$i]) {
                $product += $multiplicand << $length - $i - 1;
            }
        }

        if (! $flag) {
            $product = add(~$product, 1);
        }

        return $product;
    }
