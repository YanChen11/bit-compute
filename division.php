<?php
    require 'addition.php';

    function divide($dividend, $divisor)
    {
        //  判断符号位
        $flag = ($dividend ^ $divisor) < 0 ? false : true;
        //  取得被除数符号位
        $dividend_flag = $dividend < 0 ? false : true;
        // 取绝对值
       $dividend = $dividend < 0 ? add(~$dividend, 1) : $dividend;
       $divisor = $divisor < 0 ? add(~$divisor, 1) : $divisor;

       $quotient = 0;
       $remainder = 0;

       if ($dividend < $divisor) {
           // 被除数小于除数的情况
           $remainder = $dividend;
           return 'quotient = ' . $quotient . ' remainder = ' . $remainder;
       }

       while ($dividend >= $divisor) {
           $i = 0;
           $mul_divisor = $divisor;

           while ($dividend >= ($mul_divisor << 1)) {
               $i ++;
               $mul_divisor <<= 1;
           }

           $dividend -= $mul_divisor;
           $quotient += 1 << $i;
       }

      $remainder = $dividend;
      if (! $flag) {
          $quotient = add(~ $quotient, 1);
      }
      if (! $dividend_flag) {
          $remainder = add(~$remainder, 1);
      }

      return 'quotient = ' . $quotient . ' remainder = ' . $remainder;
    }
