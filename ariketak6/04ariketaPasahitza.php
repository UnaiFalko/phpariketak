<?php
return isset($_POST['pasahitza'], $passwordHash)
    && password_verify($_POST['pasahitza'], $passwordHash);