<?php



function adminLogin(){
    session_start();
    if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
        echo "
    <script>window.location.href='index.php';</script>";
    exit;
    }
// session_regenerate_id(true);        // generate new session id -> every reload
}

function redirect($url){
    echo "
    <script>window.location.href='$url';</script>";
    exit;
}

function alert($type, $msg){
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    // using hero-doc method
    echo <<<alert
    <div class="alert $bs_class alert-dismissible fade show" role="alert" style="position: fixed; top: 25px; right: 25px;">
        <strong>$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
alert;
}




?>