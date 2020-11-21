<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Model {

  protected $_alias;
  protected $_author;
  protected $_author_id;
  protected $_content;
  protected $_date;
  protected $_id;
  protected $_status;
  protected $_title;

  public function __construct() {
    parent::__construct();
    $this->clear_data();
  }

  public function __get($key) {
    $method_name = 'get_property_' . $key;
    if (method_exists($this, $method_name)) {
      return $this->$method_name();
    } else {
      return parent::__get($key);
    }
  }

  public function __set($key, $value) {
    $method_name = 'set_property_' . $key;
    if (method_exists($this, $method_name)) {
      $this->$method_name($value);
    } else {
      parent::__set($key, $value);
    }
  }

  protected function clear_data() {
    $this->_alias = NULL;
    $this->_author = NULL;
    $this->_author_id = NULL;
    $this->_content = NULL;
    $this->_date = NULL;
    $this->_id = NULL;
    $this->_status = NULL;
    $this->_title = NULL;
  }

  public function delete() {
    if ($this->is_found) {
      $this->_status = 'D';
      $this->save();
    }
  }

  protected function get_property_alias() {
    return $this->_alias;
  }

  protected function get_property_author() {
    return $this->_author;
  }

  protected function get_property_author_id() {
    return $this->_author_id;
  }

  protected function get_property_content() {
    return $this->_content;
  }

  protected function get_property_date() {
    return $this->_date;
  }

  protected function get_property_id() {
    return $this->_id;
  }

  protected function get_property_is_found() {
    return $this->_id !== NULL;
  }

  protected function get_property_status() {
    return $this->_status;
  }

  protected function get_property_title() {
    return $this->_title;
  }

  public function load($id, $show_hidden = FALSE) {
    $this->clear_data();
    $this->db
        ->from('article_username')
        ->where('id', $id);
    if (!$show_hidden) {
      $this->db->where('status', 'P');
    }
    $data = $this->db
        ->get()
        ->first_row();
    if ($data !== NULL) {
      $this->_alias = $data->alias;
      $this->_author = $data->author;
      $this->_author_id = $data->author_id;
      $this->_content = $data->content;
      $this->_date = $data->date;
      $this->_id = $data->id;
      $this->_status = $data->status;
      $this->_title = $data->title;
    }
  }

  public function save() {
    $data = [
        'alias' => $this->_alias,
        'author_id' => $this->_author_id,
        'content' => $this->_content,
        'status' => $this->_status,
        'title' => $this->_title
    ];
    if ($this->is_found) {
      $this->db->where('id', $this->_id)
          ->update('article', $data);
    } else {
      $data['date'] = date('Y-m-d H:i:s');
      $this->db->insert('article', $data);
      $id = $this->db->insert_id();
      $this->load($id, TRUE);
    }
  }

  protected function set_property_author_id($author_id) {
    $this->_author_id = $author_id;
  }

  protected function set_property_content($content) {
    $this->_content = $content;
  }

  protected function set_property_status($status) {
    $this->_status = $status;
  }

  protected function set_property_title($title) {
    $alias = url_title($title, 'underscore', TRUE);
    $this->_title = $title;
    $this->_alias = $alias;
  }
}
