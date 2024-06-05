<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(["form", "url"]);
        $this->load->library(["form_validation", "email"]);
        $this->form_validation->set_error_delimiters(
            '<span style="color:red">',
            "</span>"
        );
        $this->load->library("upload");
    }

    // ====================================admin=========================================

    public function adminlogin($username = "", $password = "")
    {
        if ($this->session->userdata("magazine_type") != "a") {
            $data["password"] = $password;
            $data["username"] = $username;
            $this->load->view("admin/login_page", $data);
        } else {
            $this->load->view("admin/dashboard");
        }
    }
    public function adminlogout()
    {
        $this->session->set_userdata("magazine_admin", "");
        $this->session->set_userdata("magazine_type", "");
        redirect("adminlogin", "refresh");
    }

    public function login()
    {
        if ($this->input->is_ajax_request()) {
            $username = $this->input->post("username");
            $password = $this->input->post("password");

            $check = $this->admin->login($username, $password);

            if ($check != false) {
                $this->session->set_userdata(
                    "magazine_admin",
                    $check["username"]
                );
                $this->session->set_userdata(
                    "magazine_type",
                    $check["user_type"]
                );
                $this->session->set_flashdata("success_message", "Welcome");

                echo json_encode(["replay" => "success"]);
            } else {
                echo json_encode([
                    "replay" => "failed",
                    "message" => "Please enter valid user ID and password",
                    "password" => $this->input->post("password"),
                    "username" => $this->input->post("username"),
                ]);
            }
        } else {
            $this->load->view("admin/login_cover");
        }
    }

    public function add_article()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $image_config = [
            "upload_path" => "assets/article", // Use a relative path from the root directory
            "allowed_types" => "gif|jpg|png|jpeg",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];

        $this->upload->initialize($image_config); // Initialize the upload configuration

        if ($this->input->is_ajax_request()) {
            if ($this->upload->do_upload("image")) {
                $imgdata = $this->upload->data();
                $imagename = $imgdata["file_name"];

                $add = $this->admin->insert_article($imagename);
                if ($add) {
                    echo "Article added successfully!";
                } else {
                    echo "Failed to add article. Please check the data.";
                }
            } else {
                echo $this->upload->display_errors(); // Display upload errors for debugging
            }
        } else {
            $this->load->view("admin/article");
        }
    }

    public function notification()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        if ($this->input->is_ajax_request()) {
            $add = $this->admin->insert_notification();
            if ($add) {
                echo "Notification added successfully!";
            } else {
                echo "Failed to add notification. Please check the data.";
            }
        } else {
            $this->load->view("admin/notification");
        }
    }

    public function edit_article()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $image_config = [
            "upload_path" => "assets/article", // Use a relative path from the root directory
            "allowed_types" => "gif|jpg|png|jpeg",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];

        $this->upload->initialize($image_config); // Initialize the upload configuration

        if ($this->input->is_ajax_request()) {
            $this->upload->do_upload("image");
            $imgdata = $this->upload->data();
            $imagename = $imgdata["file_name"];

            $add = $this->admin->article_edit($imagename);
            if ($add) {
                echo "Article update successfully!";
            } else {
                echo "Failed to update article. Please check the data.";
            }
        } else {
            $this->load->view("admin/article");
        }
    }
    public function video()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $video_config = [
            "upload_path" => "assets/video", // Use a relative path from the root directory
            "allowed_types" => "mp4|avi|Wmv",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];

        $this->upload->initialize($video_config); // Initialize the upload configuration

        if ($this->input->is_ajax_request()) {
            if ($this->upload->do_upload("video")) {
                $viddata = $this->upload->data();
                $videoname = $viddata["file_name"];

                $add = $this->admin->insert_video($videoname);
                if ($add) {
                    echo "Video added successfully!";
                } else {
                    echo "Failed to add video. Please check the data.";
                }
            } else {
                echo $this->upload->display_errors(); // Display upload errors for debugging
            }
        } else {
            $this->load->view("admin/video");
        }
    }

    public function add_magazine()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }
    
        $image_config = [
            "upload_path" => "assets/magazine", 
            "allowed_types" => "gif|jpg|png|jpeg",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];
    
        $pdf_config = [
            "upload_path" => "assets/magazine_pdf",
            "allowed_types" => "pdf",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];
    
        if ($this->input->is_ajax_request()) {
            $this->upload->initialize($image_config); 
    
            if ($this->upload->do_upload("image")) {
                $imgdata = $this->upload->data();
                $imagename = $imgdata["file_name"];
    
                $this->upload->initialize($pdf_config);
    
                if ($this->upload->do_upload("pdf")) {
                    $pdfdata = $this->upload->data();
                    $pdfname = $pdfdata["file_name"];
    
                    $add = $this->admin->insert_magazine($imagename, $pdfname);
                    if ($add) {
                        echo "Magazine added successfully!";
                    } else {
                        echo "Failed to add magazine. Please check the data.";
                    }
                } else {
                    echo $this->upload->display_errors(); // Display upload errors for debugging
                }
            } else {
                echo $this->upload->display_errors(); // Display upload errors for debugging
            }
        } else {
            $this->load->view("admin/add_magazine");
        }
    }
    

    public function edit_magazine()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }
    
        $image_config = [
            "upload_path" => "assets/magazine",
            "allowed_types" => "gif|jpg|png|jpeg",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];
    
        $pdf_config = [
            "upload_path" => "assets/magazine_pdf",
            "allowed_types" => "pdf",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];
    
        if ($this->input->is_ajax_request()) {
            $imagename = null;
            $pdfname = null;
    
            if (!empty($_FILES['image']['name'])) {
                $this->upload->initialize($image_config);
    
                if ($this->upload->do_upload("image")) {
                    $imgdata = $this->upload->data();
                    $imagename = $imgdata["file_name"];
                } else {
                    echo $this->upload->display_errors();
                    return;
                }
            }
    
            if (!empty($_FILES['pdf']['name'])) {
                $this->upload->initialize($pdf_config);
    
                if ($this->upload->do_upload("pdf")) {
                    $pdfdata = $this->upload->data();
                    $pdfname = $pdfdata["file_name"];
                } else {
                    echo $this->upload->display_errors();
                    return;
                }
            }
    
            $add = $this->admin->update_magazine($imagename, $pdfname);
            if ($add) {
                echo "Magazine updated successfully!";
            } else {
                echo "Failed to update magazine. Please check the data.";
            }
        } else {
            $this->load->view("admin/edit_magazine");
        }
    }
    

    public function gallery()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $image_config = [
            "upload_path" => "assets/gallery", // Use a relative path from the root directory
            "allowed_types" => "gif|jpg|png|jpeg",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];

        $this->upload->initialize($image_config); // Initialize the upload configuration

        if ($this->input->is_ajax_request()) {
            if ($this->upload->do_upload("image")) {
                $imgdata = $this->upload->data();
                $imagename = $imgdata["file_name"];

                $add = $this->admin->insert_gallery($imagename);
                if ($add) {
                    echo "Gallery added successfully!";
                } else {
                    echo "Failed to add gallery. Please check the data.";
                }
            } else {
                echo $this->upload->display_errors(); // Display upload errors for debugging
            }
        } else {
            $this->load->view("admin/gallery");
        }
    }

    public function edit_gallery()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $image_config = [
            "upload_path" => "assets/gallery", // Use a relative path from the root directory
            "allowed_types" => "gif|jpg|png|jpeg",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];

        $this->upload->initialize($image_config); // Initialize the upload configuration
        $this->upload->do_upload("new_image");
        $imgdata = $this->upload->data();
        $imagename = $imgdata["file_name"];

        $add = $this->admin->gallery_edit($imagename);
        if ($add) {
            echo "Gallery edit successfully!";
        } else {
            echo "Failed to edit gallery. Please check the data.";
        }
    }

    public function edit_video()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $video_config = [
            "upload_path" => "assets/video", // Use a relative path from the root directory
            "allowed_types" => "mp4|avi|Wmv",
            "max_size" => 50000,
            "encrypt_name" => true,
        ];

        $this->upload->initialize($video_config); // Initialize the upload configuration

        $this->upload->do_upload("new_video");
        $viddata = $this->upload->data();
        $videoname = $viddata["file_name"];

        $add = $this->admin->video_edit($videoname);
        if ($add) {
            echo "Video edit successfully!";
        } else {
            echo "Failed to edit video. Please check the data.";
        }
    }
    public function edit_notification()
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $add = $this->admin->notification_edit();
        if ($add) {
            echo "Notification edit successfully!";
        } else {
            echo "Failed to edit notification. Please check the data.";
        }
    }

   
    public function view_data($id = "", $table = "", $view_page = "")
    {
        $data["id_data"] = $this->db
            ->where("id", hex2bin($id))
            ->get($table)
            ->row_array();
        $data["table"] = $table;
        $this->load->view("admin/" . $view_page, $data);
    }

    public function delete_data($id = "", $table = "", $page = "")
    {
        if ($this->session->userdata("magazine_type") != "a") {
            redirect("adminlogin", "refresh");
        }

        $delete = $this->admin->data_delete(hex2bin($id), $table, $page);

        if ($delete) {
            $this->session->set_flashdata(
                "success_message",
                $table . " delete successfully"
            );
            redirect($page, "refresh");
        } else {
            $this->session->set_flashdata(
                "success_message",
                $table . "delete successfully"
            );
            redirect($page, "refresh");
        }
    }

    public function index()
    {
        $data['index'] ='active';
        $this->load->view("index",$data);
    }
    public function magazine()
    {
        $data['magazine'] ='active';
        $this->load->view("magazine",$data);
    }


    public function contact(){
        if($this->input->is_ajax_request()){
            $contact=$this->admin->insert_contact();
            if($contact){
               echo "Your request sent to admin successfully";
            }
            else{
                echo "Please check the data";
            }
    
        }else{
           $data['contact'] ='active';
           $this->load->view('contact',$data);
        }
    }
    
    public function featured_video()
    {
        $data['featured_video'] ='active';
        $this->load->view("featured_video",$data);
    }

    public function site_gallery()
    {
        $data['site_gallery'] ='active';
        $this->load->view("gallery",$data);
    }

    public function site_notification()
    {
        $data['site_notification'] ='active';
        $this->load->view("notification",$data);
    }

    public function articles()
    {
        $data['articles'] ='active';
        $this->load->view("articles",$data);
    }

    public function notification_detail($id="")
    {
        $data['notification_detail'] ='active';
        $data['detail'] = $this->db->where('id',hex2bin($id))->get('notification')->row_array();
        $this->load->view("notification_detail",$data);
    }
}
