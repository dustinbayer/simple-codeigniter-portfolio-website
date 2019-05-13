<!--------------------------------------------------------------------
! TREEVIEW 
!-------------------------------------------------------------------->

<h1>DUSTIN BAYER PORTFOLIO</h1>
<div id="body">
	<div class="css-treeview">
    <ul>
        
<?php 

    $i = 0;

    ksort($treeview_array);
    foreach ($treeview_array as $category => $subcategory_array) {

        $category_path = $treeview_url . $category;
        $category_id = "item-" . $i;
        $category_title = str_replace("/", "", $category);
        $category_comment = $this->load->view($category_path."comment", "", true);
        $category_onclick = "getElementById('comment_text').innerHTML = '" . $category_comment . "'";

        echo '<li><input type="checkbox" id="' . $category_id . '"'
            . 'onclick="' . $category_onclick . '" />'
            . "\n\n" . '<label for="' . $category_id . '"'
            . 'class="category">' . $category_title
            . '</label> <ul>';

        $j = 0;

        ksort($subcategory_array);
        foreach ($subcategory_array as $subcategory => $content) {

            if(is_numeric($subcategory)) { continue; }

            $subcategory_path = $category_path . $subcategory;
            $subcategory_id = "item-" . $i . "-" . $j;
            $subcategory_title = str_replace("/", "", $subcategory);
            $subcategory_comment = $this->load->view($subcategory_path."comment", "", true);
            $subcategory_onclick = "getElementById('comment_text').innerHTML = '" . $subcategory_comment . "'";
            $details = $this->load->view($subcategory_path."detail", "", true);

            echo '<li><input type="checkbox" id="' . $subcategory_id . '"'
                . 'onclick="' . $subcategory_onclick . '" />'
                . "\n\n" . '<label for="' . $subcategory_id  . '"'
                . 'class="subcategory">' . $subcategory_title 
                . '</label> <ul> <li>' . "\n" . '<div class="details">' . $details
                . '<h2 class="title"> </h2> </div> </li> </ul> </li>';

            $j = $j + 1;
        }

        echo '</ul> </li>';
        echo "\n\n";

        $i = $i + 1;
    } ?>
        
    </ul>
    </div>
</div>

