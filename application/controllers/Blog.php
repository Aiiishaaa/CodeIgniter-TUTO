<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

  public function article($id = NULL) {
    if (!is_numeric($id)) {
      redirect('blog/index');
    }
    $this->load->helper('date');
    $this->load->model('article');
    $this->load->model('article_status');
    $this->article->load($id, $this->auth_user->is_connected);
    if ($this->article->is_found) {
      $data['title'] = htmlentities($this->article->title);
      $data['script'] = '<script src="' . base_url('js/article.js') . '"></script>';
      $this->load->view('common/header', $data);
      $this->load->view('blog/article', $data);
      $this->load->view('common/footer', $data);
    } else {
      redirect('blog/index');
    }
  }

  public function edition($id = NULL) {
    if (!$this->auth_user->is_connected) {
      redirect('blog/index');
    }
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->model('article_status');
    $this->load->model('article');
    if ($id !== NULL) {
      if (is_numeric($id)) {
        $this->article->load($id, TRUE);
        if (!$this->article->is_found) {
          redirect('blog/index');
        }
      } else {
        redirect('blog/index');
      }
      $data['title'] = "Modification article";
    } else {
      $data['title'] = "Nouvel article";
      $this->article->author_id = $this->auth_user->id;
    }
    $this->set_blog_post_validation();
    if ($this->form_validation->run() == TRUE) {
      $this->article->content = $this->input->post('content');
      $this->article->status = $this->input->post('status');
      $this->article->title = $this->input->post('title');
      $this->article->save();
      if ($this->article->is_found) {
        redirect('blog/' . $this->article->alias . '_' . $this->article->id);
      }
    }
    $this->load->view('common/header', $data);
    $this->load->view('blog/form', $data);
    $this->load->view('common/footer', $data);
  }

  public function index() {
    $this->load->helper('date');
    $this->load->model('articles');
    $this->load->model('article_status');
    $this->articles->load($this->auth_user->is_connected);
    $data['title'] = "Blog";
    $this->load->view('common/header', $data);
    $this->load->view('blog/index', $data);
    $this->load->view('common/footer', $data);
  }

  public function publication($id = NULL) {
    if (!$this->auth_user->is_connected) {
      redirect('blog/index');
    }
    if (!is_numeric($id)) {
      redirect('blog/index');
    }
    $this->load->model('article');
    $this->article->load($id, TRUE);
    if (!$this->article->is_found) {
      redirect('blog/index');
    }
    $this->article->status = 'P';
    $this->article->save();
    redirect('blog/' . $this->article->alias . '_' . $id);
  }

  protected function set_blog_post_validation() {
    $list = join(',', $this->article_status->codes);
    $this->form_validation->set_rules('title', 'Titre', 'required|max_length[64]');
    $this->form_validation->set_rules('content', 'Contenu', 'required');
    $this->form_validation->set_rules('status', 'Statut', 'required|in_list[' . $list . ']');
  }

  public function suppression($id = NULL) {
    if (!$this->auth_user->is_connected) {
      redirect('blog/index');
    }
    if (!is_numeric($id)) {
      redirect('blog/index');
    }
    $this->load->model('article');
    $this->article->load($id, TRUE);
    if (!$this->article->is_found) {
      redirect('blog/index');
    }
    $this->load->helper('form');
    if ($this->input->is_ajax_request()) {
      $this->load->view('blog/delete_confirm');
    } else {
      if ($this->input->post('confirm') === NULL) {
        $data['action'] = "confirm";
      } else {
        $this->article->delete();
        $data['action'] = "result";
      }
      $data['title'] = "Suppression article";
      $this->load->view('common/header', $data);
      $this->load->view('blog/delete', $data);
      $this->load->view('common/footer', $data);
    }
  }
}
