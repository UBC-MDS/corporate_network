<?php
function getDirContents($dir, &$results = array()){
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(!is_dir($path)) {
            $results[] = $path;
        } else if($value != "." && $value != "..") {
            getDirContents($path, $results);
            $results[] = $path;
        }
    }

    return $results;
}

function getAllDirs($dir, &$results = array()) {
    $files = scandir($dir);

    foreach($files as $key => $value){
        $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
        if(is_dir($path) && $value != "." && $value != "..") {
            $results[] = $path;
        } 
    }

    return $results;
}

function getValidYears($dirs, $company, &$results = array()) {
    foreach($dirs as $value) {
        $arr_filepath = explode("/", $value);
        $year = array_values(array_slice($arr_filepath, -1))[0];
        $test_path = $value . '/' . $company . '.json';
        $test_cited_path = $value . '/cited/' . $company . '.json';
        $test_filed_path = $value . '/filed/' . $company . '.json';    
        if (file_exists($test_cited_path) || file_exists($test_filed_path) || file_exists($test_path)) {            
            $results[] = $year;
        }
    }

    return $results;
}

if (isset($_POST['company'])) {
    $comp_name = $_POST['company'];
}

if (isset($_POST['metric'])) {
    $metric = $_POST['metric'];
}

$directory = './json.' . $metric . '/converted';
$dirs = getAllDirs($directory);
$years = getValidYears($dirs, $comp_name);
echo json_encode($years);
?>