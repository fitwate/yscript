<?php
$access_ip = array( '10.13.128.*',
            '10.13.29.*',
            '10.13.30.*',
            '10.13.31.*',
            '10.13.32.*',
            '10.13.33.*',
            '10.13.34.*',
            '10.13.35.*' );

$ipregexp = implode('|', str_replace( array('*','.'), array('\d+','\.') ,$access_ip ) );

print($ipregexp);
print("\n################\n");

$ip='1.1.1.1';

$match = preg_match( "/^(".$ipregexp.")$/" , $ip );
    if( $match == False  ){
    echo 'your ip :'.$ip.' is not in 10.13.*.* segments'."\n";
        exit( 0 );
    }
