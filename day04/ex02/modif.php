<?php 

    if ($_POST['submit'] && $_POST['submit'] == 'OK' && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw']) {
        if (!file_exists('../private/passwd')) {
            mkdir('../private');
            file_put_contents('../private/passwd', null);
        }
        chmod('../private/passwd', 0755);
        $account = unserialize(file_get_contents('../private/passwd'));
        foreach ($account as $key => $username) {
            if ($username['login'] === $_POST['login'] && $username['passwd'] === hash('whirlpool',$_POST['oldpw'])) {
                $account[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
                file_put_contents('../private/passwd', serialize($account));
                echo "OK\n";
                exit;
            }
        }
        echo "ERROR\n";
    }
    else 
        echo "ERROR\n";
?>