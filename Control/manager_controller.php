<?php
    include_once('base_controller.php');
    class managerController extends baseController {
        // display home_page_manager
        function home_page_manager() {
            $this->render('View/html/UI_manager/home_page_manager');
        }
        // display employee_table
        function employee_table() {
            $this->render('View/html/UI_manager/employee_table');
        }
        // manager logout display home_page
        function logout() {
            header("Location: index.php?controller=guest&action=home_page");
        }
    }
?>