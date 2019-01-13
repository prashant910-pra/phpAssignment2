<?php

$flat_json = $_REQUEST['json_data'];
if($flat_json){
$records = json_decode($flat_json, true);
      $json_arr = [];
      $json_arr1 = [];
      $arr=array();
      $arr2 = array();
      
      $parent_arr = array_column($records, 'parent');
      $record_arr = array_column($records, 'id');
      array_diff($record_arr,$parent_arr);
      $missingManagerIds = array_filter(array_diff($record_arr, $parent_arr));
      foreach ($records as $record) {
        if (in_array($record['id'], $missingManagerIds)) {
          $json_arr[] = $record;
        }else{
          $json_arr1[] = $record;
        }
      }
      
    foreach($json_arr1 as $row1){
         $id = $row1["id"];
         foreach($json_arr as $row){
          if($row['parent']==$row1["id"]){
            $arr[$id][] = $row;
          }
       }
       $row1['children'] = $arr[$id];
       $arr2[] = $row1;

       
      }
      
echo json_encode($arr2,JSON_PRETTY_PRINT);

}

?>

