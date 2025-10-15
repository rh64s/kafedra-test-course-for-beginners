<?php
setcookie('login', 'admin', 0, '/');
$ttl = 20;
setcookie($ttl, '20', 0, '/');
setcookie('login', 'admin', time() + $ttl, '/');