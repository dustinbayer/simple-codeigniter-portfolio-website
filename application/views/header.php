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
        
<?php   $this->load->helper('url');
        $this->load->view('css/init_css');
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
            <css-doodle grid="5" class="doodle">
                :doodle {
                    @grid: 5 / 100vmax;
                    grid-gap: 4vmax;
                }

                background: #34372C;
                transform: scale(@rand(1, 5)) translate3d(@r(50px), @r(100px), 0);
                background: hsla(@r(70, 82), 11%, @r(15%, 23%), @r(.5));
                border-radius: @r(10px);
            </css-doodle>
            <div id="content">

