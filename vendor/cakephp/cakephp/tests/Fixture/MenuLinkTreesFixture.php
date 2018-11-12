<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         3.0.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
namespace Cake\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * NumberTreeFixture
 *
 * Generates a tree of data for use testing the tree behavior
 */
class MenuLinkTreesFixture extends TestFixture
{

    /**
     * fields property
     *
     * @var array
     */
    public $fields = [
        'id' => ['type' => 'integer'],
        'menu' => ['type' => 'string', 'null' => false],
        'lft' => ['type' => 'integer'],
        'rght' => ['type' => 'integer'],
        'parent_id' => 'integer',
        'url' => ['type' => 'string', 'null' => false],
        'title' => ['type' => 'string', 'null' => false],
        '_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']]]
    ];

    /**
     * Records
     *
     * # main-menu:
     *
     *  - Link 1:1
     *      - Link 2:2
     *      - Link 3:3
     *          - Link 4:4
     *              - Link 5:5
     *  - Link 6:6
     *      - Link 7:7
     *  - Link 8:8
     *
     * ***
     *
     * # cars:
     *
     *  - electronics:9
     *      - televisions:10
     *          - tube:11
     *          - lcd:12
     *          - plasma:13
     *      - portable:14
     *          - mp3:15
     *              - flash:16
     *          - cd:17
     *          - radios:18
     *
     * **Note:** title:id
     */
    public $records = [
        [
            'menu' => 'main-menu',
            'lft' => '1',
            'rght' => '10',
            'parent_id' => null,
            'url' => '/link1.html',
            'title' => 'Link 1',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '2',
            'rght' => '3',
            'parent_id' => '1',
            'url' => 'http://example.com',
            'title' => 'Link 2',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '4',
            'rght' => '9',
            'parent_id' => '1',
            'url' => '/what/even-more-links.html',
            'title' => 'Link 3',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '5',
            'rght' => '8',
            'parent_id' => '3',
            'url' => '/lorem/ipsum.html',
            'title' => 'Link 4',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '6',
            'rght' => '7',
            'parent_id' => '4',
            'url' => '/what/the.html',
            'title' => 'Link 5',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '11',
            'rght' => '14',
            'parent_id' => null,
            'url' => '/yeah/another-link.html',
            'title' => 'Link 6',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '12',
            'rght' => '13',
            'parent_id' => '6',
            'url' => 'https://cakephp.org',
            'title' => 'Link 7',
        ],
        [
            'menu' => 'main-menu',
            'lft' => '15',
            'rght' => '16',
            'parent_id' => null,
            'url' => '/page/who-we-are.html',
            'title' => 'Link 8',
        ],
        [
            'menu' => 'cars',
            'lft' => '1',
            'rght' => '10',
            'parent_id' => null,
            'url' => '/cagetory/electronics.html',
            'title' => 'electronics',
        ],
        [
            'menu' => 'cars',
            'lft' => '2',
            'rght' => '9',
            'parent_id' => '9',
            'url' => '/car/televisions.html',
            'title' => 'televisions',
        ],
        [
            'menu' => 'cars',
            'lft' => '3',
            'rght' => '4',
            'parent_id' => '10',
            'url' => '/car/tube.html',
            'title' => 'tube',
        ],
        [
            'menu' => 'cars',
            'lft' => '5',
            'rght' => '8',
            'parent_id' => '10',
            'url' => '/car/lcd.html',
            'title' => 'lcd',
        ],
        [
            'menu' => 'cars',
            'lft' => '6',
            'rght' => '7',
            'parent_id' => '12',
            'url' => '/car/plasma.html',
            'title' => 'plasma',
        ],
        [
            'menu' => 'cars',
            'lft' => '11',
            'rght' => '20',
            'parent_id' => null,
            'url' => '/car/portable.html',
            'title' => 'portable',
        ],
        [
            'menu' => 'cars',
            'lft' => '12',
            'rght' => '15',
            'parent_id' => '14',
            'url' => '/car/mp3.html',
            'title' => 'mp3',
        ],
        [
            'menu' => 'cars',
            'lft' => '13',
            'rght' => '14',
            'parent_id' => '15',
            'url' => '/car/flash.html',
            'title' => 'flash',
        ],
        [
            'menu' => 'cars',
            'lft' => '16',
            'rght' => '17',
            'parent_id' => '14',
            'url' => '/car/cd.html',
            'title' => 'cd',
        ],
        [
            'menu' => 'cars',
            'lft' => '18',
            'rght' => '19',
            'parent_id' => '14',
            'url' => '/car/radios.html',
            'title' => 'radios',
        ],
    ];
}
