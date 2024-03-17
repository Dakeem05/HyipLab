<?php


return [
    "basic"=>[
        "name"=>"Basic",
        "timer"=>60 * 60 *24,
        "frequency"=>"Every Day",
        "profit"=>3.5,
        "duration"=>5,
        "minimum"=> number_format(100.00,2) ,
        "maximum"=> number_format(999.00,2)
    ],
    "silver"=>[
        "name"=>"Silver",
        "frequency"=>"Every Day",
        "timer"=>60 * 60 *24,
        "profit"=>5,
        "duration"=>7,
        "minimum"=>number_format(1000.00,2),
        "maximum"=> number_format(19999.00,2) 
    ],
    "pro"=>[
        "name"=>"Pro",
        "frequency"=>"Every Day",
        "timer"=>60 * 60 *24,
        "profit"=>10,
        "duration"=>7,
        "minimum"=> number_format(20000.00,2),
        "maximum"=>"unlimited"
    ]
];