<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 03.09.2019
 * Time: 19:25
 */

class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('url', 'form'));
        $this->load->library(array('form_validation'));
        $this->load->model('Article_model');

    }
    public function index(){
        $data['articles'] = $this->Article_model->get_all_articles();
        $data['template'] = 'article/article_list';
        $this->load->view('layout', $data);
    }
    public function save_article(){
        $data = $this->input->post();
        $this->Article_model->save_article($data);

        redirect('main/');
    }
    public function add_article(){
        $data['template'] = 'article/add_article';
        $this->load->view('layout', $data);
    }
    public function read_article($article_id){
        $data['article'] = $this->Article_model->get_article_by_id($article_id);
        $data['template'] = 'article/single_article';
        $this->load->view('layout', $data);
    }
    public function edit_article($article_id){
        $data['article'] = $this->Article_model->get_article_by_id($article_id);
        $data['template'] = 'article/edit_article';
        $this->load->view('layout', $data);
    }
    public function update_article($article_id){
        $data = $this->input->post();
        $this->Article_model->update_article($data, $article_id);

        redirect('/');
    }
    public function delete_article($article_id){
        $this->Article_model->delete_article($article_id);

        redirect('/');
    }
}