<?php
<<<<<<< HEAD
// insert();

// function select() {
//     echo "The select function is called.";
//     exit;
// }

// function insert() {
//     echo "The insert function is called.";
//     exit;
// }

// $dirs = array_filter(glob('*'), 'is_dir');
// print_r($dirs);

=======
>>>>>>> 7323a5c11edce577f2b769d4e5c7da5463a1763a
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
<<<<<<< HEAD
        // var_dump($value);
        // var_dump($year);
        $test_path = $value . '/' . $company . '.json';
        $test_cited_path = $value . '/cited/' . $company . '.json';
        $test_filed_path = $value . '/filed/' . $company . '.json';
        // var_dump($test_path);
=======
        $test_path = $value . '/' . $company . '.json';
        $test_cited_path = $value . '/cited/' . $company . '.json';
        $test_filed_path = $value . '/filed/' . $company . '.json';    
>>>>>>> 7323a5c11edce577f2b769d4e5c7da5463a1763a
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
<<<<<<< HEAD
// var_dump($directory);
// $files = getDirContents('/var/www/html/corporate_network/json.full/converted');
$dirs = getAllDirs($directory);
// var_dump($dirs);
$years = getValidYears($dirs, $comp_name);
// var_dump($years);
=======
$dirs = getAllDirs($directory);
$years = getValidYears($dirs, $comp_name);
>>>>>>> 7323a5c11edce577f2b769d4e5c7da5463a1763a
echo json_encode($years);
?>