<?php
/**
 * The sidebar containing the main content area .
 *
 * @package Aquila
 *
 */
?>
<aside id="secondery" role="conplementary">
    <h2 class="h5"> This text is from sidebar.php file </h2>
    <?php
    // if (is_active_sidebar('sidebar-2')) {
        // echo "side bar is active ";
        // dynamic_sidebar('Sidebar-1') ;
        // implementing footer sidebar
        dynamic_sidebar("sidebar-1");
        // echo "<pre>";
        // var_dump(get_option('sidebars_widgets'));
        // echo "</pre>";
        // die("hello sidebar");
 
    // } else {
    //     echo "<h1> doesn't exits this side bar </h1>";
    // }
     ?>

</aside>
<!-- this side bar is not showing on the front-end  -->