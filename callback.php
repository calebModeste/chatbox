<?php

use Run\Model\Chat;
use Run\Model\DataPDO;
use Run\Model\User;
use Run\Model\Message;

require('./src/Model/User.class.php');
require('./src/Model/Database.class.php');
require('./src/Model/Chat.class.php');
$connect = new DataPDO();
$user = new User();
$chat = new Chat();








