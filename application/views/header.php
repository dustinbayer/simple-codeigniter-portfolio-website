<?php defined('BASEPATH') OR exit('No direct script access allowed')?>

<!DOCTYPE html>
<html lang="en">
    
<!--------------------------------------------------------------------
 ! HTML HEAD
 !-------------------------------------------------------------------->
    <head>
        <meta charset="utf-8">
        <title>Dustin Bayer Portfolio</title>
        
<?php $this->load->view('favicon');
    $this->load->view('css/init_css');
    $this->load->view('css/treeview_css');
    $this->load->view('css/youtube_css');
    $this->load->view('js/doodle_js');
    $this->load->view('js/youtube_js'); ?>
        
    </head>
    
<!--------------------------------------------------------------------
 ! HTML BODY
 !-------------------------------------------------------------------->
    <body>

<?php $this->load->view("content/doodle_content")?>
<?php $this->load->view('content/comment_content')?>
        
        <div id="container">
            <div id="content">

