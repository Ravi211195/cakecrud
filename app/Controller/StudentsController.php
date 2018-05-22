<?php
App::uses('AppController','Controller');

class StudentsController extends AppController{

    //####################  INDEX  ######################
    public function index(){
        $this->set('students',$this->Student->find('all'));    
    }
    //####################  VIEW  ######################
    public function view($id=null){
        if(!$id){
            throw new NotFoundException(__('InvalidStudent.'));
        }
        $stud = $this->Student->findById($id);
        if(!$stud){
            throw new NotFoundException(__('InvalidStudent.'));
        }

        $this->set('stud',$stud);    
    }
    //####################  ADD  ######################
    public function add(){
        if($this->request->is('POST')){
            $this->Student->create();
            if($this->Student->save($this->request->data)){
                $this->Session->setFlash(__('Your Student has been saved'));
                return $this->redirect(array('action' => 'index'));
            }            
            $this->Session->setFlash(__('Unable to add you post.'));
        } 
    }     
    //####################  EDIT  ######################
    public function edit($id=null){
        if(!$id){
            throw new NotFoundException(__('InvalidStudent.'));
        }
        $studd = $this->Student->findById($id);
      // print_r($studd);
        if(!$studd){
            throw new NotFoundException(__('InvalidStudent.'));
        }
        if($this->request->is(array('post','put'))){
            $this->Student->id = $id;
            if($this->Student->save($this->request->data)){
                $this->Session->setFlash(__('Your student has been updated'));
                return $this->redirect(array('action'=>'index'));
            } 
            $this->Session(__('Unable to update your student '));
        }
        if(!$this->request->data){
                $this->request->data = $studd;
        }
    }
    //####################  DELETE  ######################
    public function delete($id){
        if($this->request->is('GET')){
           throw new MethodNotAllowedException();
        }
        if($this->Student->delete($id)){
            $this->Session->setFlash(__('Student id %s has been deleted.',h($id)));
            return $this->redirect(array('action'=>'index'));
        }
    }
}
?>