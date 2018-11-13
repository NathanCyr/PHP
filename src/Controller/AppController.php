<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\I18n;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    use \Crud\Controller\ControllerTrait;

    public $components = [
        'RequestHandler',
        'Crud.Crud' => [
            'actions' => [
                'Crud.Index',
                'Crud.View',
                'Crud.Add',
                'Crud.Edit',
                'Crud.Delete'
            ],
        ]
    ];

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {

        I18n::setLocale($this->request->session()->read('Config.language'));

        // Code existant
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authorize'=> 'Controller',
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
            // Si pas autorisé, on renvoit sur la page précédente
            'unauthorizedRedirect' => $this->referer()
        ]);

        // Permet à l'action "display" de notre PagesController de continuer
        // à fonctionner. Autorise également les actions "read-only".
        $this->Auth->allow(['display', 'view', 'index', 'changelang', 'aPropos','carAction']);
    }



    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        if(in_array($action,['add', 'edit', 'delete'])){
            if($user['role']=='admin'){
                return true;
            }
        }else if(in_array($action,['edit', 'delete'])){
            if($user['role']=='super'){
                return true;
            }
        }else if(in_array($action,['view', 'aPropos'])){
            if($user['role']=='user'){
                return true;
            }
        }else{
            return false;
        }

    }

    public function changeLang($lang = 'en_US') {
        I18n::setLocale($lang);
        $this->request->session()->write('Config.language', $lang);
        return $this->redirect($this->request->referer());
    }

}
