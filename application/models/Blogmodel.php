<?php

class Blogmodel extends CI_Model {

	
		public function getBlogs()
		{
			$filter= $this->input->get('find');
			$this->db->like('title',$filter);
		     return $this->db->get('artikel');
		    
		}

		public function getambil($field, $value)
		{
		   $this->db->where($field, $value);
		   return $this->db->get('artikel');
		}

		public function insertBlog($data){

			$this->db->insert('artikel',$data);
			return $this->db->insert_id();
		}
		public function updateBlog($id, $post){
			$this->db->where('id', $id);
			$this->db->update('artikel', $post);

			return $this->db->affected_rows();

		}
		public function deleteBlog($id){
			$this->db->where('id', $id);
			$this->db->delete('artikel');

			return $this->db->affected_rows();
		}

		
}
?>