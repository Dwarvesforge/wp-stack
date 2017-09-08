<?php

t_define('WPS_PROTOCOL',(!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://',true);
t_define('WPS_DOMAIN',$_SERVER['HTTP_HOST']);
t_define('WPS_ROOT_URL', T_PROTOCOL . T_DOMAIN);