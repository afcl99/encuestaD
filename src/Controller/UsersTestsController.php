<?php
declare(strict_types=1);

namespace App\Controller;
use App\Model\Table\EvaluationsTable;
use Cake\Utility\Text;
use Cake\I18n\Time;
use Cake\I18n\Date;
use Cake\Mailer\Mailer;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
/**
 * UsersTests Controller
 *
 * @property \App\Model\Table\UsersTestsTable $UsersTests
 *
 * @method \App\Model\Entity\UsersTest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersTestsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Tests'],
        ];
        $usersTests = $this->paginate($this->UsersTests);

        $this->set(compact('usersTests'));
    }
    public function view($id = null)
    {
        $usersTest = $this->UsersTests->get($id, [
            'contain' => ['Users', 'Tests'],
        ]);

        $this->set('usersTest', $usersTest);
    }
    public function edit($id = null)
    {
        $usersTest = $this->UsersTests->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            if ($this->UsersTests->save($usersTest)) {
                $this->Flash->success(__('The users test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));
        }
        $users = $this->UsersTests->Users->find('list', ['limit' => 200]);
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('usersTest', 'users', 'tests'));
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersTest = $this->UsersTests->get($id);
        if ($this->UsersTests->delete($usersTest)) {
            $this->Flash->success(__('The users test has been deleted.'));
        } else {
            $this->Flash->error(__('The users test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function crear()
    {
        $usersTest = $this->UsersTests->newEmptyEntity();
        if ($this->request->is('post')) {
            $usersTest = $this->UsersTests->patchEntity($usersTest, $this->request->getData());
            $usersTest->user_id = $this->Auth->user('username');
            $fech = $this->request->getData('max_date');
            if ($this->UsersTests->save($usersTest)) {
                $this->Flash->success(__('The users test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users test could not be saved. Please, try again.'));
        }
        $users = $this->UsersTests->Users->find('list', ['limit' => 200]);
        $tests = $this->UsersTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('usersTest', 'users', 'tests'));
    }
    public function enviar($id = null){     
   
        if ($this->request->is('post')) {
            $this->loadModel('Evaluations');
            $evaluation = $this->Evaluations->newEmptyEntity();
                $evaluation->userTests_id= $id ;
                $evaluation->email="andresclarl@unicauca.edu.co";
                $evaluation->toke=Text::UUID();
                $evaluation->state='0';
                $this->Evaluations->save($evaluation);
                $to = "andresclarl@unicauca.edu.co";
                $subject = "Encuesta";
                $message = "Se le ha enviado la encuesta para responder".$evaluation->toke;
                try {
                    $mail = $this->Email->send_mail($to, $subject, $message);
                } catch (Exception $e) {
                    $this->Flash->error(__('Fallo al enviar los correos'));
                }  
            $correos=$this->request->getData("co");
            if (!empty($correos)){     
                $this->loadModel('Evaluations');
                foreach($correos as $c) {
                    $evaluation = $this->Evaluations->newEmptyEntity();
                    $evaluation->user_test_id= $id ;
                    $evaluation->email=$c;
                    $evaluation->toke=Text::UUID();
                    $evaluation->state='0';
                    $this->Evaluations->save($evaluation);
                    $to = $c;
                    $subject = "Encuesta";
                    $message = "Se le ha enviado la encuesta para responder".$evaluation;
                    try {
                        $mail = $this->Email->send_mail($to, $subject, $message);
                    } catch (Exception $e) {
                        $this->Flash->error(__('Fallo al enviar los correos'));
                    }    
                }
                $this->Flash->success(__('Invitaciones enviadas.'));
                return $this->redirect(['action' => 'index']);
            }else{$this->Flash->error(__('Muy pocos correos para una encuesta.'));}
        }   
    }
}
