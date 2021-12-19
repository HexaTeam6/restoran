<?php

Class Redis{
    function config(){
        $parameters = ['tcp://44.200.147.5?role=master', 'tcp://3.239.13.6', 'tcp://3.236.115.209'];
        $options    = ['replication' => 'predis',
                        'databases'  => 0];
        
        $client = new Predis\Client($parameters, $options);

        return $client;
    }
}