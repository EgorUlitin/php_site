<?php 
function getDataFromFile($filename) {
	$fp = fopen($filename, "r");
	if ($fp) {
		while (($data = fread($fp, 4096)) !== false) {
			return $data;
		}
	fclose($fp);
	}
	return false;
	
}

function addDataFile($data, $filename) {
	if (file_put_contents($filename, serialize($data), FILE_APPEND) !== false) {
        return true;
    }
    return false;
}

?>