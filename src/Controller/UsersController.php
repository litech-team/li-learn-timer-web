<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * アカウント関連のコントローラークラス
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['login', 'add']);
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function add()
    {
        $title = 'アカウント作成';
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $this->loadModel('Units');
            $data = $this->request->getData();
            $serialNumber = $this->Units
                ->find('all')
                ->where(['serial_number' => $data['serial_number'], 'status' => '未登録']);

            if (!$serialNumber->count()) {
                $this->Flash->error(__('入力されたシリアル番号は存在しないか、既に登録されています。'));
                $this->set(compact('user', 'title'));
                return;
            }

            $user = $this->Users->patchEntity($user, $data);
            $serialNumber = $serialNumber->first();
            $serialNumber->status = '登録済み';
            if ($this->Users->save($user) && $this->Units->save($serialNumber)) {
                $this->Flash->success(__('アカウントの作成が完了しました。'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('アカウントの作成に失敗しました。もう一度お試しください。'));
        }
        $this->set(compact('user', 'title'));
    }

    public function login()
    {
        $title = 'ログイン';
        $this->request->allowMethod(['get', 'post']);
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'Users',
                'action' => 'index',
            ]);

            return $this->redirect($redirect);
        }

        // ユーザーの送信と認証に失敗した場合のエラー表示
        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error(__('メールアドレス、またはパスワードが間違っています。'));
        }
        $this->set(compact('title'));
    }

    public function logout()
    {
        $result = $this->Authentication->getResult();
        if ($result->isValid()) {
            $this->Authentication->logout();
            return $this->redirect(['controller' => 'Users', 'action' => 'login']);
        }
    }
}
