<?php

    if(!isset($_GET['id']))
    {
        die();
    }

    $baseURL="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    $baseURL=explode("view.php",$baseURL);
    define("API_BASE_URL", $baseURL[0]);

    $api_url        =   API_BASE_URL.'index.php?p=';
    $api_base_url   =   API_BASE_URL;
    
    function curl_request($data , $endpoint ,  $baseurl){
    
        $ch = curl_init( $baseurl.$endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $return = curl_exec($ch);
        $json_data = json_decode($return, true);
        $curl_error = curl_error($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        return $json_data;
    }

?>
<!DOCTYPE html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title>tiktik video Page</title>
    <script src="https://kit.fontawesome.com/ac9b11d13d.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale = 1.0, user-scalable=no">
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<?php
    
    $endpoint = "showAllVideos";
    $data   =   [
        "fb_id"=> "0",
        "video_id"  =>  @$_GET['id']
    ];
    $json_data = curl_request($data, $endpoint, $api_url);
    if($json_data['code'] == 200){
        $RequestedData  =   $json_data['msg'][0];
        ?>
     
    <div class="container">     
        <div class="innertiktikideo">
            <div class="videoPost">
                <video controls  poster="<?= $RequestedData['thum'] ?>"  autoplay width="375">
                    <source src="<?= $RequestedData['video'] ?>" type="video/ogg" >
                    <source src="<?= $RequestedData['video'] ?>" type="video/mp4">    
                </video>
            </div>
            <div class="videoContent">
                <div class="profileImgInText">
                    <a href="#">
                        <img src="<?= ($RequestedData['user_info']['profile_pic'] != "" ? $RequestedData['user_info']['profile_pic'] : "assets/images/profile.png") ?>">
                    </a>
                </div>
                <h4 class="titleName"><?= $RequestedData['user_info']['first_name']." ".$RequestedData['user_info']['last_name'] ?></h4>
                <h5 class="videoDescription"><?= $RequestedData['description'] ?></h5>
                <h6>sound track refference</h6>
            </div>
            <div class="reactonSide">
                <a href="#">
                    <img src="<?= ($RequestedData['user_info']['profile_pic'] != "" ? $RequestedData['user_info']['profile_pic'] : "assets/images/profile.png") ?>">
                </a>
                <a href="#">
                    <i class="fa fa-heart">
                        <small><?= $RequestedData['count']['like_count'] ?></small>
                    </i>
                </a>
                <a href="#">
                    <i class="fas fa-comment-dots">
                        <small><?= $RequestedData['count']['video_comment_count'] ?></small>
                    </i>
                </a>
                <a href="#">
                    <i class="fa fa-share"></i>
                </a>
            </div>
        </div>
    </div>    
        <?php
    }else{
        echo $json_data['msg'];
    }
?>


</body>
</html> 