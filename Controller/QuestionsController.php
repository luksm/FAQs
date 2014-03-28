<?php
App::uses('FAQAppController', 'FAQ.Controller');
/**
 * Questions Controller
 *
 */
class QuestionsController extends FAQAppController
{

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'Session');

    /**
     * admin_index method
     *
     * @param int $limit number of records per page
     *
     * @return void
     */
    public function admin_index($limit = 100)
    {
        $this->Paginator->settings = array(
            'order' => array(
                'Question.name' => 'asc'
            ),
            'limit' => $limit
        );
        $this->Question->recursive = 0;
        $this->set('faqs', $this->Paginator->paginate());
    }

    /**
     * admin_view method
     *
     * @param string $id Question ID
     *
     * @throws NotFoundException
     * @return void
     */
    public function admin_view($id = null)
    {
        if (!$this->Question->exists($id)) {
            throw new NotFoundException(__('Invalid faq'));
        }
        $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
        $this->set('faq', $this->Question->find('first', $options));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add()
    {
        if ($this->request->is('post')) {
            $this->Question->create();
            if ($this->Question->save($this->request->data)) {
                $this->Session->setFlash(__('The faq has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The faq could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * admin_edit method
     *
     * @param string $id Question ID
     *
     * @throws NotFoundException
     * @return void
     */
    public function admin_edit($id = null)
    {
        if (!$this->Question->exists($id)) {
            throw new NotFoundException(__('Invalid faq'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Question->save($this->request->data)) {
                $this->Session->setFlash(__('The faq has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The faq could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
            $this->request->data = $this->Question->find('first', $options);
        }
    }

    /**
     * admin_translate method
     *
     * @param string $id Question ID
     *
     * @throws NotFoundException
     * @return void
     */
    public function admin_translate($id = null)
    {
        if (!$this->Question->exists($id)) {
            throw new NotFoundException(__('Invalid Question'));
        }
        if ($this->request->is(array('post', 'put'))) {
            $this->Question->locale = $this->request->data['Question']['locale'];
            if ($this->Question->save($this->request->data)) {
                $this->Session->setFlash(__('The Question has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Question could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
            $this->request->data = $this->Question->find('first', $options);
        }
    }

    /**
     * admin_delete method
     *
     * @param string $id Question ID
     *
     * @throws NotFoundException
     * @return void
     */
    public function admin_delete($id = null)
    {
        $this->Question->id = $id;
        if (!$this->Question->exists()) {
            throw new NotFoundException(__('Invalid faq'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Question->delete()) {
            $this->Session->setFlash(__('The faq has been deleted.'));
        } else {
            $this->Session->setFlash(__('The faq could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }
}
