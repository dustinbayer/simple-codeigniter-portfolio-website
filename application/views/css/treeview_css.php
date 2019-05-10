<!--------------------------------------------------------------------
 ! CSS TREEVIEW
 !-------------------------------------------------------------------->

<style type="text/css">
    
.css-treeview ul,
.css-treeview li
{
    padding: 0;
    margin: 0;
    list-style: none;
}

.css-treeview input
{
    position: absolute;
    opacity: 0;
}

.css-treeview
{
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    margin: auto;
}

.css-treeview input + label + ul
{
    display: none;
}

.css-treeview input:checked + label + ul
{
    display: block;
}

/* webkit adjacent element selector bugfix */
@media screen and (-webkit-min-device-pixel-ratio:0)
{
    .css-treeview 
    {
        -webkit-animation: webkit-adjacent-element-selector-bugfix infinite 1s;
    }
    
    @-webkit-keyframes webkit-adjacent-element-selector-bugfix 
    {
        from 
        { 
            padding: 0;
        } 
        to 
        { 
            padding: 0;
        }
    }
}
    
</style>

