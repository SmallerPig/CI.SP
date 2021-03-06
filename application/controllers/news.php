<?php

/**
 * news short summary.
 *
 * news description.
 *
 * @version 1.0
 * @author smileshute
 */
class News extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('News_model');
        //echo "construct compulete!";
    }
    
    
    public function index()
    {
        $data['news_list'] = $this->News_model->get_news_list();        
        print_r($data['news_list']);
        $data['title'] = 'home';
        $data['home_navigation'] ='current';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navigation', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug)
    {
        $data['news_list'] = $this->news_model->get_news($slug);        
        
        if (empty($data['news_item']))
        {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);

        $this->load->view('news/view', $data);
        $this->load->view('templates/footer');
    }
    
    
    public function get_news($slug = FALSE){
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }    
    
}
