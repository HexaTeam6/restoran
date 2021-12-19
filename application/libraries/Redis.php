<?php

Class Redis{
    function config(){
        $parameters = ['tcp://3.237.21.103?role=master', 'tcp://3.239.118.215', 'tcp://3.81.28.115'];
        $options    = ['replication' => 'predis',
                        'databases'  => 0];
        
        $client = new Predis\Client($parameters, $options);

        return $client;
    }
}