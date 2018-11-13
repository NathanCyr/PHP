<?php
namespace App\Controller\Api;
class CarsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'name','created','modified'
        ]
    ];
}