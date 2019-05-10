<!--------------------------------------------------------------------
! TREEVIEW 
!-------------------------------------------------------------------->

<h1>DUSTIN BAYER PORTFOLIO</h1>
<div id="body">
	<div class="css-treeview">
    <ul>
    <?php 
        
        ksort($treeview_array);
        
        $i = 0;
        foreach ($treeview_array as $category => $title_array) {
            
            echo "<li><input type='checkbox' id='item-" . $i . "' /><label for='item-" . $i . "' class='category'>" 
                . str_replace("/", "",$category) 
                . "</label>
            <ul>";
            
            ksort($title_array);
            
            $j = 0;
            foreach ($title_array as $title => $detail) {
                
                echo "<li><input type='checkbox' id='item-" . $i . "-" . $j . "' />
                <label for='item-" . $i . "-" . $j . "' class='subcategory'>" 
                    . str_replace("/", "",$title) 
                    . "</label>
                <ul> 
                <li> <div class='details'>";
                
                $this->load->view($treeview_url . $category . $title . $detail[0]);
                
                echo "<h2 class='title'></h2>
                </div> </li>
                </ul>
                </li>";
                
                $j = $j + 1;
            }
            
            echo "</ul>
            </li>";
            
            $i = $i + 1;
        }
        
    ?>
    </ul>
    </div>
</div>

