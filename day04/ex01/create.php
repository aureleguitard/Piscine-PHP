<?php 

    if ($_POST['submit'] && $_POST['submit'] == 'OK' && $_POST['login'] && $_POST['passwd']) {
        if (!file_exists('../private/passwd')) {
            mkdir('../private');
            file_put_contents('../private/passwd', null);
        }
        chmod('../private/passwd', 0755);
        $account = unserialize(file_get_contents('../private/passwd'));
        foreach ($account as $key => $username) {
            if ($username["login"] === $_POST["login"] || $username['passwd'] === "") {
                echo "ERROR\n";
                exit;
            }
        }
        $tmp["login"] = $_POST["login"];
        $tmp["passwd"] = hash("whirlpool", $_POST["passwd"]);
        $account[] = $tmp;
        file_put_contents('../private/passwd', serialize($account));
        echo "OK\n";
    }
    else 
        echo "ERROR\n";
?>