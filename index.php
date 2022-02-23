<?php 

$data = [
    "no_awb" => "3452440340005",
    "shipper" => "OTTEN COFFEE INDONESIA PT INFINIA PARK BLK B 72 KOMP",
    "services" => "REG",
    "date_of_shipment" => "03-02-2021 20:26",
    "origin" => "Jakarta",
    "destination" => "PONDOKGEDE, BEKASI",
    "consignee" => "Affandy Murad", 
    "consigne_as" => "PAK MURADI",
    "history" =>
       [
           [
                "description" =>"DELIVERED TO [PAK MURADI  | 04-02-2021 10:22 | BEKASI ]",
                "createdAt" => "2021-02-04T10:22:00+07:00",
                "formatted" => ["createdAt" => "04 Februari 2021, 10:22 WIB"]
            ],
            [
                "description" => "WITH DELIVERY COURIER [BEKASI]",
                "createdAt" => "2021-02-03T08:55:00+07:00",
                "formatted" => ["createdAt" => "04 Februari 2021, 08:55 WIB"]
            ],
            [
                "description" => "RECEIVED AT INBOUND STATION [BEKASI, HUB JATIASIH 4]",
                "createdAt" => "2021-02-03T08:00:00+07:00",
                "formatted" => ["createdAt" => "04 Februari 2021, 08:00 WIB"]
            ],
            [
                "description" => "SHIPMENT FORWARDED TO DESTINATION [BEKASI, HUB JATIASIH 4]",
                "createdAt" => "2021-02-03T06:40:00+07:00",
                "formatted" => ["createdAt" => "04 Februari 2021, 06:40 WIB"]
            ],
            [
                "description" => "RECEIVED AT WAREHOUSE [INBOUND BKI1]",
                "createdAt" => "2021-02-03T02:06:00+07:00",
                "formatted" => ["createdAt" => "04 Februari 2021, 02:06 WIB"]
            ],
            [
                "description" => "RECEIVED AT ORIGIN GATEWAY [JAKARTA]",
                "createdAt" => "2021-02-03T00:15:00+07:00",
                "formatted" => ["createdAt" => "04 Februari 2021, 00:15 WIB"]
            ],
            [
                "description" => "PROCESSED AT SORTING CENTER [JAKARTA, BANDARA MAS(OUTBOUND)]",
                "createdAt" => "2021-02-03T22:38:00+07:00",
                "formatted" => ["createdAt" => "03 Februari 2021, 22:38 WIB"]
            ],
            [
                "description" => "RECEIVED AT SORTING CENTER [JAKARTA]",
                "createdAt" => "2021-02-03T21:44:00+07:00",
                "formatted" => ["createdAt" => "03 Februari 2021, 21:44 WIB"]
            ],
            [
                "description" => "SHIPMENT RECEIVED BY JNE COUNTER OFFICER AT [JAKARTA]",
                "createdAt" => "2021-02-03T20:26:00+07:00",
                "formatted" => ["createdAt" => "03 Februari 2021, 20:26 WIB"]
            ]
          
       ]
];

$result[] = [
    "status" => [
        "code" => "060101",
        "message" => "Delivery tracking detail fetched successfully"
    ],
        "data" =>[
            "nama" => $data['consigne_as'],
            "history" => $data['history']
        ]
    ];

echo json_encode($result);