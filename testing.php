<?php 

$my_socks = 'red';

if($my_socks == 'blue'){
    echo 'my socks are blue';
} elseif($my_socks == 'red') {
    echo 'my socks are red';
} else {
    echo 'my socks are not blue or red';
};

switch ($my_socks) {
    case 'blue':
        echo 'my socks are blue';
        break;
    case 'red';
        echo 'my socks are red';
        break;
    default:
       echo 'my socks are not blue or red';
        break;
}
