<?php
function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
function get_full_data($request_data){
	$full_data ='';
	 $ls_hash = DB_PREFIX.'settings';
         $access_key = get_data_from_hash($ls_hash,"access_key");
         $secret_key = get_data_from_hash($ls_hash,"secret_key");
	$meta_data_hash=array();
	$meta_data_arr = json_decode(get_metadata($access_key,$secret_key),true);
	foreach($meta_data_arr as $meta){
  		$meta_data_hash[$meta['SchemaName']] =$meta['DisplayName'];
 	}
        foreach ($request_data as $key => $value) {
		if(isset($meta_data_hash[$key])){
			$key = $meta_data_hash[$key];
		}
                if($key == 'LandingPageURL' || $key == 'LandingPageId'){

                } else {
                        $full_data= $full_data."$key : $value <br />";
                }
        }
return $full_data;
}
?>


