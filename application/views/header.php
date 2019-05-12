<?php defined('BASEPATH') OR exit('No direct script access allowed')?>

<!DOCTYPE html>
<html lang="en">
    
<!--------------------------------------------------------------------
 ! HTML HEAD
 !-------------------------------------------------------------------->
    <head>
        <meta charset="utf-8">
        <title>Dustin Bayer Portfolio</title>
        <link rel=”icon” type=”image/x-icon” href=”/favicon.ico”>
        
<?php   $this->load->view('css/init_css');
        $this->load->view('css/treeview_css');
        $this->load->view('css/youtube_css');
        $this->load->view('js/doodle_js');
        $this->load->view('js/youtube_js') ?>
        
    </head>
    
<!--------------------------------------------------------------------
 ! HTML BODY
 !-------------------------------------------------------------------->
    <body>
        <div id="container">
            <?php $this->load->view("content/doodle_content")?> 
            <div id="content">

