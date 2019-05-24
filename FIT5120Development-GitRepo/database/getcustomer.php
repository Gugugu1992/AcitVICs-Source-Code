add_action('wp_ajax_my_action','data_fetch');
add_action('wp_ajax_nopriv_my_action','data_fetch');
function data_fetch() {
	 $clat1 = $_POST['clat1'];
     $clat2 = $_POST['clat2'];
     $clon1 = $_POST['clon1'];
     $clon2 = $_POST['clon2'];
	 global $wpdb;
	 $myQuery = "SELECT * FROM recreation WHERE latitude >= {$clat1} AND latitude <= {$clat2} AND longitude <= {$clon2} AND longitude >= {$clon1}";
	 $result = $wpdb->get_results($myQuery);
	 wp_send_json($result);
	 die();
}







add_action('wp_ajax_my_action','data_fetch');
add_action('wp_ajax_nopriv_my_action','data_fetch');
function data_fetch() {
	 $postID = $_POST['postID'];
	 global $wpdb;
	 $myQuery = "SELECT * FROM userTest WHERE Age= {$postID} ";
	 $result = $wpdb->get_results($myQuery);
	 wp_send_json($result);
	 die();

}


