
<?php

function func(){
    require_once 'calculationsApi.php';

    try {
        $api = new calculationsApi();
        echo $api->run();
    } catch (Exception $e) {
        echo json_encode(Array('error' => $e->getMessage()));
    }
}

?>
