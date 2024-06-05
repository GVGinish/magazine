<?php
error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model {
    
   
    
    public function login($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',sha1($password));
        $this->db->where('user_type','a');
        $details = $this->db->get('user_role')->row_array();
        if (!empty($details)) {
            return $details;
        }
        else {
            return false;
        }
    }


    public function insert_article($image="") {
      
    
        $this->db->trans_start();

      
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'show' => ($this->input->post('show') == 'yes')? 'show':'no',
            'image' => $image,
            'entry_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('article', $data);
    
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function article_edit($image="") {

    $this->db->trans_start();


    if(!empty($image)){

        $image_old=$this->db->select('image')->where('id',$this->input->post('id'))->get('article')->row()->image;
        $article_path = FCPATH . 'assets/article/' . $image_old;
        if (file_exists($article_path)) {
            @unlink($article_path);
        }

        $im=$image;

    }else{
        $im=$this->input->post('old_image');
    }
  

    $data = array(
        'title' => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'show' => ($this->input->post('show') == 'yes')? 'show':'no',
        'image' => $im,
    );
    $this->db->where('id',$this->input->post('id'));
    $this->db->update('article', $data);

    if ($this->db->trans_status() === false) {
        $this->db->trans_rollback();
        return false;
    } else {
        $this->db->trans_commit();
        return true;
    }
}

    

    public function update_magazine($image="",$pdf="") {
      
    
        $this->db->trans_start();

          if(!empty($image)){

                $magazine_path = FCPATH . 'assets/magazine/' . $this->input->post('old_image');
                if (file_exists($magazine_path)) {
                    @unlink($magazine_path);
                }

                $im=$image;

            }else{
                $im=$this->input->post('old_image');
            }

            if(!empty($pdf)){

                $pdf_path = FCPATH . 'assets/magazine_pdf/' . $this->input->post('old_pdf');
                if (file_exists($pdf_path)) {
                    @unlink($pdf_path);
                }

                $m_pdf=$pdf;

            }else{
                $m_pdf=$this->input->post('old_pdf');
            }
  
  
      
        $data = array(
            'title' => $this->input->post('title'),
            'show' => ($this->input->post('show') == 'yes')? 'show':'no',
            'image' => $im,
            'pdf' => $m_pdf,

        );
        $this->db->where('id',$this->input->post('id'));
        $this->db->update('magazine', $data);
    
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function insert_magazine($image="",$pdf="") {
      
        $this->db->trans_start();

        $data = array(
            'title' => $this->input->post('title'),
            'show' => ($this->input->post('show') == 'yes')? 'show':'no',
            'image' => $image,
            'pdf'=>$pdf,
            'entry_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('magazine', $data);
    
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function insert_notification() {
      
    
        $this->db->trans_start();

      
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'entry_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('notification', $data);
    
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }



    



    public function insert_video($video="") {
      
    
        $this->db->trans_start();

      
        $data = array(
            'title' => $this->input->post('title'),
            'video' => $video,
            'entry_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('video', $data);
    
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    


    public function insert_gallery($image="") {
      
    $this->db->trans_start();

        $data = array(
            'image' => $image,
            'entry_date' => date('Y-m-d H:i:s')
        );
        $this->db->insert('gallery', $data);
    
        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function gallery_edit($image="") {
      
        $this->db->trans_start();

        $im = (!empty($image))? $image : $this->input->post('old_image') ;

        if(!empty($image)){
        $image_path = FCPATH . 'assets/gallery/' . $this->input->post('old_image');
        if (file_exists($image_path)) {
            @unlink($image_path);
        }
    }
         
            $this->db->set('image',$im);
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('gallery', $data);
        
            if ($this->db->trans_status() === false) {
                $this->db->trans_rollback();
                return false;
            } else {
                $this->db->trans_commit();
                return true;
            }
        }


        public function video_edit($video="") {
      
            $this->db->trans_start();
    
            $im = (!empty($video))? $video : $this->input->post('old_video') ;
        if(!empty($video)){
            $video_path = FCPATH . 'assets/video/' . $this->input->post('old_video');
            if (file_exists($video_path)) {
                @unlink($video_path);
            }
        }
             
                $this->db->set('video',$im);
                $this->db->where('id',$this->input->post('id'));
                $this->db->update('video');
            
                if ($this->db->trans_status() === false) {
                    $this->db->trans_rollback();
                    return false;
                } else {
                    $this->db->trans_commit();
                    return true;
                }
            }

            public function notification_edit() {
      
                $this->db->trans_start();

                $data=[
                    'title' =>$this->input->post('title'),
                    'description' =>$this->input->post('description'),
                    'entry_date' => date('Y-m-d H:i:s')

                ];
        
                
                    $this->db->where('id',$this->input->post('id'));
                    $this->db->update('notification', $data);
                
                    if ($this->db->trans_status() === false) {
                        $this->db->trans_rollback();
                        return false;
                    } else {
                        $this->db->trans_commit();
                        return true;
                    }
                }
        
            
    
        
   
    


    public function data_delete($id="",$table="",$page="") {
        $this->db->trans_start();

     
      if($page == "add_article"){
        $article_image=$this->db->select('image')->where('id',$id)->get('article')->row()->image;

            $article_path = FCPATH . 'assets/article/' . $article_image;
            if (file_exists($article_path)) {
                @unlink($article_path);
            }
        }

        if($page == "add_magazine"){
            $magazine_data=$this->db->where('id',$id)->get('magazine')->row_array();
    
                $magazine_path = FCPATH . 'assets/magazine/' . $magazine_data['image'];
                if (file_exists($magazine_path)) {
                    @unlink($magazine_path);
                }
    
                $magazine_pdf_path = FCPATH . 'assets/magazine_pdf/' . $magazine_data['pdf'];
                if (file_exists($magazine_pdf_path)) {
                    @unlink($magazine_pdf_path);
                }
            }
            if($page == "gallery"){
                $gallery_image=$this->db->select('image')->where('id',$id)->get('gallery')->row()->image;
        
                    $gallery_path = FCPATH . 'assets/gallery/' . $gallery_image;
                    if (file_exists($gallery_path)) {
                        @unlink($gallery_path);
                    }
                }
                if($page == "video"){
                    $video=$this->db->select('video')->where('id',$id)->get('video')->row()->video;
            
                        $video_path = FCPATH . 'assets/video/' . $video;
                        if (file_exists($video_path)) {
                            @unlink($video_path);
                        }
                    }



            $this->db->where('id',$id);
            $this->db->delete($table);

        if ($this->db->trans_status() === false) {
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }

    public function insert_contact(){
        $this->db->trans_start();
        
        $data=[ 
                'name'=>$this->input->post('name'), 
                'email'=>$this->input->post('email'),
                'subject'=>$this->input->post('subject'),
                'message'=>$this->input->post('message'),
                'entry_date'=>date('Y-m-d H:i:s'),
                ];
             $this->db->insert('enquiry',$data);

             $this->load->library('email');
                    
                $config = array();
                $config['mailtype'] = 'html';
                $config['charset'] = 'utf-8';
                $config['wordwrap'] = TRUE;
                $this->email->initialize($config);
                $this->email->set_newline("\r\n");
                $this->email->from('noreplay@backofficee.com', 'Enquiry');
                $this->email->reply_to('noreplay@backofficee.com', 'Enquiry');
                $this->email->to("gin1994ish@gmail.com");
                $this->email->subject("Magazine Enquiry");
                $this->email->message($this->load->view('mail_success',$data,true));   
                $this->email->send();

            if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        }
    }


                





                }















  



?>
