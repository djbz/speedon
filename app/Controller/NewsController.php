<?php
// Gestionnaire de news author Pierre Gaillard
class NewsController extends AppController {
    public $helper = array('Html','Form');

    public function index() {
        $this->set('news', $this->News->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Poste invalide !'));
        }

        $news = $this->News->findById($id);
        if (!$news) {
            throw new NotFoundException(__('Poste Invalide !'));
        }
        $this->set('news', $news);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->News->create();
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash(__('Votre post à été sauvegardé avec succès !'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Erreur'));
        }
    }

    public function edit($id) {
        if (!$id) {
            throw new NotFoundException(__('Poste invalide !'));
        }

        $news = $this->News->findById($id);
        if (!$news) {
            throw new NotFoundException(__('Poste invalide !'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->News->id = $id;
            if ($this->News->save($this->request->data)) {
                $this->Session->setFlash(__('Votre post à été modifiée avec succès'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Impossible de mettre à jour le post'));
        }

        if (!$this->request->data) {
            $this->request->data = $news;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }
        if ($this->News->delete($id)) {
            $this->Session->setFlash(
                __('Le post avec id : %s a été supprimé.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}
?>