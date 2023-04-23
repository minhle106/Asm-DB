<?php
    include_once('base_controller.php');
    class userController extends baseController {

        // display home_page_user
        function home_page_user() {
            $this->render("View/html/UI_user/home_page_user");
        }
        
        // user logout display home_page
        function logout() {
            header("Location: index.php?controller=guest&action=home_page");
        }

        //display profile user
        function profile_user(){
            $this->render('View/html/UI_user/profile_user');
        }
    }
?>