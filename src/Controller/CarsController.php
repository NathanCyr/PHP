<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cars Controller
 *
 * @property \App\Model\Table\CarsTable $Cars
 *
 * @method \App\Model\Entity\Car[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CarsController extends AppController
{

    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'sortWhitelist' => [
            'id', 'model', 'created', 'modified'
        ]
    ];

    

}
