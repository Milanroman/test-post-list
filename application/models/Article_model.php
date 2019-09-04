<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 03.09.2019
 * Time: 19:56
 */

class Article_model extends CI_Model
{
    /**
     * @var string
     */
    private $table_post = "articles";

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }

    function save_article($data){
        $this->db->set('article_title', $data['article_title']);
        $this->db->set('article_description', $data['article_description']);
        $this->db->set('article_text', $data['article_text']);
        $this->db->insert($this->table_post);
    }
    function get_all_articles(){
        $this->db->select('*');
        $this->db->from($this->table_post);
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_article_by_id($id){
        $this->db->select('*');
        $this->db->from($this->table_post);
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    function update_article($data, $article_id){
        $this->db->where('id', $article_id);
        $this->db->update($this->table_post, $data);
    }
    function delete_article($id){
        $this->db->delete("$this->table_post", array('id' => $id));
    }
}