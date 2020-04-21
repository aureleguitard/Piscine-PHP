<?php
    function ft_is_sort($str)
    {
        $new_str = $str;
        sort($str);
        if ($new_str == $str)
            return true;
        else
            return false;
    }
?>
