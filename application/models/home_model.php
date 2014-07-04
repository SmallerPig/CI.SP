<?php

/**
 * news short summary.
 *
 * news description.
 *
 * @version 1.0
 * @author smileshute
 */
class home_model extends CI_Model {

	public function __construct()
	{
        parent::__construct();
        $this->load->database();
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
	
	public function set_news()
	{
        $this->load->helper('url');
        
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        
        $data = array(
          'title' => $this->input->post('title'),
          'slug' => $slug,
          'text' => $this->input->post('text')
        );
        
        return $this->db->insert('news', $data);
	}


    public function get_news_list()
    {
        $sql = 'SELECT * FROM sp_news';
        $query = $this->db->query('select * from sp_news order by id desc');
        return $query->result();
    }
  
  


  public function get_topic_list()
  {
    $sql = 'SELECT id , title, summary FROM sp_topic order by id desc';
    $query = $this->db->query($sql);
    return $query->result();
  }
  
}

// end of the php file home_model
