<?php
// vim: set expandtab cindent tabstop=4 shiftwidth=4 fdm=marker:
// +----------------------------------------------------------------------+
// | WUXI.SourceCode.Smallerpig                                           |
// +----------------------------------------------------------------------+
// | Copyright (c) 2014, WUXI.SOURCECODE Inc. All rights reserved.        |
// +----------------------------------------------------------------------+
// | Authors: smallerpig. www.smallerpig.com                              |
// |                                                                      |
// +----------------------------------------------------------------------+
 
/**
 * @version  1.0
 * @author   smallerpig
 * @date     
 */
 
 class Topic_model extends CI_Model{
 	public function __construct(){
 		parent::__construct();
 		//$this->load->database();
 	}

 	public function topic_list()
 	{
 		$query =  $this->db->query('SELECT * FROM sp_topic');
 		return $query->result();
 	}


 	public function topic_list_linq()
 	{
 		$list = $this->db->select('id,title,summary,cover')
 					->from('topic')
 					->where('id >=',2)
 					->limit(2,0)
 					->order_by('id desc')
 					->get();
 		return $list->result();
 	}



 }