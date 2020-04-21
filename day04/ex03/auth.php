<?php
    function auth($login, $passwd) {
        if ($login && $passwd) {
            $account = file_get_contents(unserialize('../private/passwd'));
            foreach ($account as $key => $username) {
                if ($username['login'] === $login && $username['passwd'] === hash('whirlpool', $passwd)) {
                    return (true);
                }
                else
                    return (false);
            }
        }
        else
            return(false);
        }

?>