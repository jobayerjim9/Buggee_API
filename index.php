<?php


ini_set('display_errors', 1);

use \Firebase\JWT\JWT;

require './vendor/autoload.php';
if (isset($_GET["p"])) {
    if ($_GET["p"] == "uploadVideo") {
        uploadvideo();
    } else if ($_GET["p"] == "gifupload") {
        gifupload();
    } else if ($_GET["p"] == "signupemail") {
        signupemail();
    } else if ($_GET["p"] == "usernameexist") {
        checkeusernamexist();
    } else if ($_GET["p"] == "loginphone") {
        loginphone();
    } else if ($_GET["p"] == "createLive") {
        createLive();
    } else if ($_GET["p"] == "getAllLive") {
        getAllLive();
    } else if ($_GET["p"] == "deleteLive") {
        deleteLive();
    } else if ($_GET["p"] == "checkphoneexist") {
        checkphoneexist();
    } else if ($_GET["p"] == "loginemail") {
        loginemail();
    } else if ($_GET["p"] == "changeAccountType") {
        updateAccountPrivacy();
    } else if ($_GET["p"] == "messagePrivacy") {
        updateMessagePrivacy();
    } else if ($_GET["p"] == "commentPrivacy") {
        updateCommentPrivacy();
    } else if ($_GET["p"] == "livePrivacy") {
        updateLivePrivacy();
    } else if ($_GET["p"] == "getPrivacy") {
        getPrivacy();
    } else if ($_GET["p"] == "loginusername") {
        loginusername();
    } else if ($_GET["p"] == "userexist") {
        checkexist();
    } else if ($_GET["p"] == "createImageStory") {
        createImageStory();
    } else if ($_GET["p"] == "signup") {
        signup();
    } else if ($_GET["p"] == "showAllVideos") {
        showAllVideos();
    } else if ($_GET["p"] == "showAllStory") {
        showAllStory();
    } else if ($_GET["p"] == "publishUnpublishPage") {
        publishUnpublishPage();
    } else if ($_GET["p"] == "getImageStory") {
        getImageStory();
    } else if ($_GET["p"] == "showMyAllVideos") {
        showMyAllVideos();
    } else if ($_GET["p"] == "likeDislikeVideo") {
        likeDislikeVideo();
    } else if ($_GET["p"] == "postComment") {
        postComment();
    } else if ($_GET["p"] == "showVideoComments") {
        showVideoComments();
    } else if ($_GET["p"] == "updateVideoView") {
        updateVideoView();
    } else if ($_GET["p"] == "allSounds") {
        allSounds();
    } else if ($_GET["p"] == "fav_sound") {
        fav_sound();
    } else if ($_GET["p"] == "my_FavSound") {
        my_FavSound();
    } else if ($_GET["p"] == "my_liked_video") {
        my_liked_video();
    } else if ($_GET["p"] == "discover") {
        discover();
    } else if ($_GET["p"] == "edit_profile") {
        edit_profile();
    } else if ($_GET["p"] == "follow_users") {
        follow_users();
    } else if ($_GET["p"] == "sentFollowRequest") {
        sentFollowRequest();
    } else if ($_GET["p"] == "checkFriend") {
        checkFollow();
    } else if ($_GET["p"] == "get_user_data") {
        get_user_data();
    } else if ($_GET["p"] == "updateBio") {
        updateBio();
    } else if ($_GET["p"] == "get_followers") {
        get_followers();
    } else if ($_GET["p"] == "updatePageCategory") {
        updatePageCategory();
    } else if ($_GET["p"] == "updatePageButton") {
        updatePageButton();
    } else if ($_GET["p"] == "getUserLiveStatus") {
        getUserLiveStatus();
    } else if ($_GET["p"] == "get_followings") {
        get_followings();
    } else if ($_GET["p"] == "SearchByHashTag") {
        SearchByHashTag();
    } else if ($_GET["p"] == "DeleteSound") {
        DeleteSound();
    } else if ($_GET["p"] == "DeleteVideo") {
        DeleteVideo();
    } else if ($_GET["p"] == "sendPushNotification") {
        sendPushNotification();
    } else if ($_GET["p"] == "uploadImage") {
        uploadImage();
    } else if ($_GET["p"] == "editSoundSection") {
        editSoundSection();
    } else if ($_GET["p"] == "getNotifications") {
        getNotifications();
    } else if ($_GET["p"] == "search") {
        search();
    } else if ($_GET["p"] == "createPage") {
        createPage();
    } else if ($_GET["p"] == "getPageInfo") {
        getPageInfo();
    } else if ($_GET["p"] == "updatePageName") {
        updatePageName();
    } else if ($_GET["p"] == "updatePageDesc") {
        updatePageDesc();
    } else if ($_GET["p"] == "updatePagePic") {
        updatePagePic();
    } else if ($_GET["p"] == "report") {
        report();
    } else if ($_GET["p"] == "reportProblem") {
        reportProblem();
    } else if ($_GET["p"] == "useThisIdAsPage") {
        useThisIdAsPage();
    } else if ($_GET["p"] == "updateToken") {
        updateToken();
    } //admin panel functions
    else if ($_GET["p"] == "Admin_Login") {
        Admin_Login();
    } else if ($_GET["p"] == "All_Users") {
        All_Users();
    } else if ($_GET["p"] == "admin_all_sounds") {
        admin_all_sounds();
    } else if ($_GET["p"] == "admin_uploadSound") {
        admin_uploadSound();
    } else if ($_GET["p"] == "admin_getSoundSection") {
        admin_getSoundSection();
    } else if ($_GET["p"] == "admin_show_allVideos") {
        admin_show_allVideos();
    } else if ($_GET["p"] == "admin_addSection") {
        admin_addSection();
    } else if ($_GET["p"] == "DeleteSoundSection") {
        DeleteSoundSection();
    } else if ($_GET["p"] == "all_discovery_sections") {
        all_discovery_sections();
    } else if ($_GET["p"] == "deleteSection") {
        deleteSection();
    } else if ($_GET["p"] == "assignSection") {
        assignSection();
    } else if ($_GET["p"] == "blockUser") {
        blockUser();
    } else if ($_GET["p"] == "getSingleSectionDetails") {
        getSingleSectionDetails();
    } else if ($_GET["p"] == "addVideointoDiscovry") {
        addVideointoDiscovry();
    } else if ($_GET["p"] == "discovery_sections_edit") {
        discovery_sections_edit();
    } else if ($_GET["p"] == "add_discovery_Section") {
        add_discovery_Section();
    } else if ($_GET["p"] == "delete_discovery_Section") {
        delete_discovery_Section();
    } else if ($_GET["p"] == "allProfileVerification") {
        allProfileVerification();
    } else if ($_GET["p"] == "updateVerificationStatus") {
        updateVerificationStatus();
    } else if ($_GET["p"] == "getVerified") {
        getVerified();
    } else if ($_GET["p"] == "deleteUser") {
        deleteUser();
    } else if ($_GET["p"] == "editUser") {
        editUser();
    } else if ($_GET["p"] == "adminChangePassword") {
        adminChangePassword();
    } else if ($_GET["p"] == "getCommentsByVideo") {
        getCommentsByVideo();
    } else if ($_GET["p"] == "deleteComment") {
        deleteComment();
    } else if ($_GET["p"] == "getAllPage") {
        getAllPage();
    } else if ($_GET["p"] == "deletePage") {
        deletePage();
    } else if ($_GET["p"] == "blockPage") {
        blockPage();
    } else if ($_GET["p"] == "turnOnOffLive") {
        turnOnOffLive();
    } else if ($_GET["p"] == "viewReport") {
        viewReport();
    }


} else {
    echo "Not Found";

}


function updateToken()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $tokon = $event_json["token"];
    $sql = "UPDATE users SET tokon='$tokon' WHERE fb_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));
}

function getUserLiveStatus()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $sql = "SELECT * FROM `users` WHERE fb_id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $user = mysqli_fetch_object($result);
        $response["success"] = true;
        $response["status"] = $user->live_off_on;
    } else {
        $response["success"] = false;
        $response["message"] = "Something Error With Server!";
    }
    print_r(json_encode($response, true));
}

function getAllLive()
{
    require_once("config.php");

    $sql = "SELECT * FROM live_video";
    $result = mysqli_query($conn, $sql);
    $array_out = array();
    while ($row = mysqli_fetch_array($result)) {
        $id = $row["live_id"];
        $user_sql = "SELECT * FROM users WHERE  fb_id='$id'";
        $user_result = mysqli_query($conn, $user_sql);
        $user = mysqli_fetch_object($user_result);
        $array_out[] = array(
            "video_info" => array(
                "live_id" => $row["live_id"],
                "live_name" => $row["live_name"],
                "live_details" => $row["live_details"],
                "thumbnail" => $row["thumbnail"]
            ),
            "user_info" => array(
                "fb_id" => $user->fb_id,
                "username" => $user->username,
                "first_name" => $user->first_name,
                "last_name" => $user->last_name,
                "profile_pic" => $user->profile_pic,
                "block" => $user->block,
                "account_type" => $user->account_type,
                "message_privacy" => $user->message_privacy,
                "comment_privacy" => $user->comment_privacy,
                "verified" => $user->verified,
                "live_privacy" => $user->live_privacy
            )
        );
    }
    $output = array("code" => "200", "msg" => $array_out);
    print_r(json_encode($output, true));


}

function updatePageName()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $name = $event_json["name"];
    $sql = "UPDATE `pages` SET name='$name' WHERE owner_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function publishUnpublishPage()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $status = $event_json["status"];
    $sql = "UPDATE pages SET published='$status' WHERE owner_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;

    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function useThisIdAsPage()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $sql = "UPDATE users SET id_as_page=1 WHERE fb_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
//        $sql = "SELECT * FROM `users` WHERE fb_id='$id'";
//        $query = mysqli_query($conn, $sql);
//        $data = mysqli_fetch_object($query);
//        $name = $data->first_name . " " . $data->last_name;
//        $page_sql = "INSERT INTO pages(owner_id, profile_pic, name) VALUES ('$id','$data->profile_pic','$name')";
//        $page_query = mysqli_query($conn, $page_sql);

    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function updatePageDesc()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $desc = $event_json["desc"];
    $sql = "UPDATE `pages` SET description='$desc' WHERE owner_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function updatePagePic()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $pic_base64 = $event_json["pic"];
    $fileName = time() . "_" . rand();
    $pic_url = "upload/profile_pic/" . $fileName . ".jpeg";
    $pic = base64_decode($pic_base64);
    file_put_contents($pic_url, $pic);
    $s3_url = uploadS3($pic_url, "profile_pic", $fileName);
    $sql = "UPDATE `pages` SET profile_pic='$s3_url' WHERE owner_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function getPageInfo()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $sql = "SELECT * FROM pages WHERE owner_id='$id' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_object($result);
        $response["success"] = true;
        $response["profile_pic"] = checkVideoUrl($data->profile_pic);
        $response["id"] = $data->id;
        $response["name"] = $data->name;
        $response["description"] = $data->description;
        $response["category"] = $data->category;
        $response["published"] = $data->published;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function updatePageCategory()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $category = $event_json["category"];
    $sql = "UPDATE pages SET category='$category' WHERE owner_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function updatePageButton()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
    $button = $event_json["button"];
    $sql = "UPDATE pages SET button='$button' WHERE owner_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function deleteLive()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json["id"];
//    checkTokon();
    if (isset($id)) {
        $sql = "DELETE FROM `live_video` WHERE live_id='$id'";
        if (mysqli_query($conn, $sql)) {
            $response["success"] = true;
        } else {
            $response["success"] = false;
        }
        print_r(json_encode($response, true));
    }
}

function createLive()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();
    $name = $event_json["name"];
    $id = $event_json["id"];
    $live_details = $event_json["live_details"];
    $status = $event_json["status"];
    if (isset($name) && isset($id)) {
        $sql = "INSERT INTO live_video (live_id, live_name, live_details, status) VALUES ('$id','$name', '$live_details', '$status')";
        if (mysqli_query($conn, $sql)) {
            $response["success"] = true;
        } else {
            $response["success"] = false;
        }
        print_r(json_encode($response, true));
    }


}

function reportProblem()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();
    $reported_problem = $event_json["reported_problem"];
    $id = $event_json["id"];
    if (isset($id)) {
        $sql = "INSERT INTO reported_problems(reported_by, reported_problem) VALUES ('$id', '$reported_problem')";
        if (mysqli_query($conn, $sql)) {
            $response["success"] = true;
        } else {
            $response["success"] = false;
        }
        print_r(json_encode($response, true));
    }


}

function report()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();
    $content_id = $event_json["content_id"];
    $reported_by = $event_json["reported_by"];
    $type = $event_json["type"];
    $exist = "SELECT * FROM `report` WHERE content_id='$content_id' && reported_by='$reported_by'";
    $exist_result = mysqli_query($conn, $exist);
    if (mysqli_num_rows($exist_result) > 0) {
        $response["success"] = false;
        $response["msg"] = "Already Reported. Wait For Action!";
    } else {
        $sql = "INSERT INTO report(content_id, reported_by,type) VALUES ('$content_id','$reported_by','$type')";
        if (mysqli_query($conn, $sql)) {
            $response["success"] = true;
        } else {
            $response["success"] = false;
            $response["msg"] = "Server Error!";
        }
    }
    print_r(json_encode($response, true));


}

function createPage()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();
    $name = $event_json["name"];
    $id = $event_json["id"];
    $profile_pic = $event_json["profile_pic"];
    if (isset($name) && isset($id) && isset($profile_pic)) {
        $fileName = time() . "_" . rand();
        $pic_url = "upload/profile_pic/" . $fileName . ".jpeg";
        $pic = base64_decode($profile_pic);
        file_put_contents($pic_url, $pic);
        $s3_url = uploadS3($pic_url, "profile_pic", $fileName);
        $sql = "INSERT INTO pages(owner_id, profile_pic, name) VALUES ('$id','$s3_url','$name')";
//         $sql = "INSERT INTO pages(owner_id, profile_pic, name) VALUES ('id','pic_url','name')";
        if (mysqli_query($conn, $sql)) {
            unlink($pic_url);
            $user_update = "UPDATE users SET page_have=1 WHERE fb_id='$id'";
            if (mysqli_query($conn, $user_update)) {
                $response["success"] = true;
            } else {
                $response["success"] = false;
            }
        } else {
            $response["success"] = false;
            $response["msg"] = "Page Creation Failed!";
        }
        print_r(json_encode($response, true));
    }


}

function createImageStory()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();
    $id = $event_json["id"];
    $url = $event_json["url"];

    if (isset($url) && isset($id)) {
        $sql = "INSERT INTO image_story(pic_url, uploaded_by) VALUES ('$url','$id')";
//         $sql = "INSERT INTO pages(owner_id, profile_pic, name) VALUES ('id','pic_url','name')";
        if (mysqli_query($conn, $sql)) {
            $response["success"] = true;
        } else {
            $response["success"] = false;
            $response["msg"] = "Story Creation Failed!";
        }
        print_r(json_encode($response, true));
    }


}

function getImageStory()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();


    $sql = "SELECT * FROM image_story WHERE created BETWEEN DATE_SUB(NOW(), INTERVAL 1 DAY) AND NOW()";
//         $sql = "INSERT INTO pages(owner_id, profile_pic, name) VALUES ('id','pic_url','name')";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($query)) {
        $array_out[] =
            array(
                "id" => $row['id'],
                "pic_url" => $row['pic_url'],
                "uploaded_by" => $row['uploaded_by'],
                "created" => $row['created']
            );

    }
    $output = array("code" => "200", "msg" => $array_out);
    print_r(json_encode($output, true));


}

function updateBio()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
//    checkTokon();
    $id = $event_json["id"];
    $bio = $event_json["bio"];
    if (isset($bio) && isset($id)) {
        $sql = "UPDATE `users` SET bio='$bio' WHERE fb_id='$id'";
        if (mysqli_query($conn, $sql)) {
            $response["success"] = true;
        } else {
            $response["success"] = false;
        }
        print_r(json_encode($response, true));
    }


}


function sendPushNotificationToMobileDevice($data)
{
    require_once("config.php");
    $key = firebase_key;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => array(
            "authorization: key=" . $key . "",
            "cache-control: no-cache",
            "content-type: application/json",
            "postman-token: 85f96364-bf24-d01e-3805-bccf838ef837"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        // print_r($err);
    } else {
        //print_r($response);
    }

}

function checkVideoUrl($url)
{
    try {
        require_once("config.php");
        $find = strpos($url, "upload");
//        if ($find == true) {
//            return API_path . "/" . $url;
//        } else {
        require './vendor/autoload.php';
        $s3 = new Aws\S3\S3Client([
            'region' => S3_REGION,
            'version' => 'latest',
            'credentials' => [
                'key' => IAM_KEY,
                'secret' => IAM_SECRET,
            ]
        ]);
        $cmd = $s3->getCommand('GetObject', [
            'Bucket' => BUCKET_NAME,
            'Key' => $url
        ]);
        $request = $s3->createPresignedRequest($cmd, '+60 minutes');

        $presignedUrl = (string)$request->getUri();

        return $presignedUrl;
    } catch (Exception $e) {
        return "";
    }
    // }
}

function checkexist()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json['id'];
    $sql = "SELECT * FROM `users` WHERE fb_id='$id'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function updateMessagePrivacy()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json['id'];
    $privacy = $event_json["privacy"];
    $sql = "UPDATE users SET message_privacy='$privacy' WHERE fb_id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));
}

function updateCommentPrivacy()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json['id'];
    $privacy = $event_json["privacy"];
    $sql = "UPDATE users SET comment_privacy='$privacy' WHERE fb_id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));
}

function updateLivePrivacy()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json['id'];
    $privacy = $event_json["privacy"];
    $sql = "UPDATE users SET live_privacy='$privacy' WHERE fb_id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));
}

function updateAccountPrivacy()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json['id'];
    $privacy = $event_json["privacy"];
    $sql = "UPDATE users SET account_type='$privacy' WHERE fb_id='$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));
}

function checkeusernamexist()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $username = $event_json['username'];
    $sql = "SELECT * FROM `users` WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function checkphoneexist()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $phone = $event_json['phone'];
    $sql = "SELECT * FROM `users` WHERE fb_id='$phone'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $response["success"] = true;
    } else {
        $response["success"] = false;
    }
    print_r(json_encode($response, true));


}

function getPrivacy()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $id = $event_json['id'];
    $sql = "SELECT * FROM users WHERE fb_id='$id'";
    $login_rs = mysqli_query($conn, $sql);
    $rd = mysqli_fetch_object($login_rs);
    $response["account_type"] = $rd->account_type;
    $response["message_privacy"] = $rd->message_privacy;
    $response["comment_privacy"] = $rd->comment_privacy;
    $response["live_privacy"] = $rd->live_privacy;
    print_r(json_encode($response, true));


}

function loginemail()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $email = $event_json["email"];
    $password = $event_json["password"];
    $headers = apache_request_headers();
    $tokon = null;
    $header_device = $headers['Device'];
    $header_version = $headers['Version'];
    $header_tokon = $headers['Tokon'];
    $header_deviceid = $headers['Deviceid'];
    $sql = "SELECT * FROM `users` WHERE fb_id='$email' && password='$password'";
    $login_rs = mysqli_query($conn, $sql);
    $get_device_tkon = "select * from device_tokon where fb_id='" . $email . "' and phone_id='" . $header_deviceid . "' ";
    $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
    if (mysqli_num_rows($get_device_tkon1) > 0) {
        $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
        $tokon = $dvice_tokon->tokon;
    } else {
        $tokon_check_sql = "select * from device_tokon where fb_id= '$email'";
        $tokon_check_result = mysqli_query($conn, $tokon_check_sql);
        if (mysqli_num_rows($tokon_check_result) > 0) {
            $update_tokon_sql = "UPDATE device_tokon SET phone_id='$header_deviceid' WHERE fb_id='$email'";
            $update_tokon_result = mysqli_query($conn, $update_tokon_sql);
            $get_device_tkon = "select * from device_tokon where fb_id='" . $email . "' and phone_id='" . $header_deviceid . "' ";
            $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
            $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
            $tokon = $dvice_tokon->tokon;
        } else {
            $tokon = time() . rand();
            $qrry_1 = "insert into device_tokon(fb_id,tokon,phone_id)values(";
            $qrry_1 .= "'" . $email . "',";
            $qrry_1 .= "'" . $tokon . "',";
            $qrry_1 .= "'" . $header_deviceid . "'";
            $qrry_1 .= ")";
            mysqli_query($conn, $qrry_1);
        }
    }
    if (mysqli_num_rows($login_rs)) {
        $rd = mysqli_fetch_object($login_rs);

        if ($rd->block == '0') {
            $array_out = array();
            $array_out[] =
                //array("code" => "200");
                array(
                    "fb_id" => $rd->fb_id,
                    "action" => "login",
                    "account_type" => $rd->account_type,
                    "message_privacy" => $rd->message_privacy,
                    "comment_privacy" => $rd->comment_privacy,
                    "live_privacy" => $rd->live_privacy,
                    "profile_pic" => $rd->profile_pic,
                    "first_name" => $rd->first_name,
                    "last_name" => $rd->last_name,
                    "username" => $rd->username,
                    "bio" => $rd->bio,
                    "page_have" => $rd->page_have,
                    "gender" => $rd->gender,
                    "tokon" => $tokon
                );

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            $array_out = "error in login";
            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $array_out = "Username & Password Not Found";
        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}

function loginusername()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $username = $event_json["username"];
    $password = $event_json["password"];
    $headers = apache_request_headers();

    $header_device = $headers['Device'];
    $header_version = $headers['Version'];
    $header_tokon = $headers['Tokon'];
    $header_deviceid = $headers['Deviceid'];
    $sql = "SELECT * FROM `users` WHERE username='$username' && password='$password'";
    $login_rs = mysqli_query($conn, $sql);
    $get_device_tkon = "select * from device_tokon where fb_id='" . $email . "' and phone_id='" . $header_deviceid . "' ";
    $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
    $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
    $tokon = null;

    if (mysqli_num_rows($login_rs)) {
        $rd = mysqli_fetch_object($login_rs);
        if (mysqli_num_rows($get_device_tkon1) > 0) {
            $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
            $tokon = $dvice_tokon->tokon;
        } else {
            $tokon_check_sql = "select * from device_tokon where fb_id= '$rd->fb_id'";
            $tokon_check_result = mysqli_query($conn, $tokon_check_sql);
            if (mysqli_num_rows($tokon_check_result) > 0) {
                $update_tokon_sql = "UPDATE device_tokon SET phone_id='$header_deviceid' WHERE fb_id='$rd->fb_id'";
                $update_tokon_result = mysqli_query($conn, $update_tokon_sql);
                $get_device_tkon = "select * from device_tokon where fb_id='" . $email . "' and phone_id='" . $header_deviceid . "' ";
                $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
                $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
                $tokon = $dvice_tokon->tokon;
            } else {
                $tokon = time() . rand();
                $qrry_1 = "insert into device_tokon(fb_id,tokon,phone_id)values(";
                $qrry_1 .= "'" . $rd->fb_id . "',";
                $qrry_1 .= "'" . $tokon . "',";
                $qrry_1 .= "'" . $header_deviceid . "'";
                $qrry_1 .= ")";
                mysqli_query($conn, $qrry_1);
            }
        }
        if ($rd->block == '0') {
            $array_out = array();
            $array_out[] =
                //array("code" => "200");
                array(
                    "fb_id" => $rd->fb_id,
                    "action" => "login",
                    "account_type" => $rd->account_type,
                    "message_privacy" => $rd->message_privacy,
                    "comment_privacy" => $rd->comment_privacy,
                    "live_privacy" => $rd->live_privacy,
                    "profile_pic" => $rd->profile_pic,
                    "first_name" => $rd->first_name,
                    "last_name" => $rd->last_name,
                    "username" => $rd->username,
                    "bio" => $rd->bio,
                    "page_have" => $rd->page_have,
                    "gender" => $rd->gender,
                    "tokon" => $tokon
                );

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            $array_out = "error in login";
            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $array_out = "Username & Password Not Found";
        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}

function loginphone()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    $phone_number = $event_json["phone"];
    $headers = apache_request_headers();
    $header_device = $headers['Device'];
    $header_version = $headers['Version'];
    $header_tokon = $headers['Tokon'];
    $header_deviceid = $headers['Deviceid'];
    $sql = "SELECT * FROM `users` WHERE fb_id='$phone_number'";
    $login_rs = mysqli_query($conn, $sql);
    $get_device_tkon = "select * from device_tokon where fb_id='" . $phone_number . "' and phone_id='" . $header_deviceid . "' ";
    $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
    $tokon = null;
    if (mysqli_num_rows($get_device_tkon1) > 0) {
        $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
        $tokon = $dvice_tokon->tokon;
    } else {
        $tokon_check_sql = "select * from device_tokon where fb_id= '$phone_number'";
        $tokon_check_result = mysqli_query($conn, $tokon_check_sql);
        if (mysqli_num_rows($tokon_check_result) > 0) {
            $update_tokon_sql = "UPDATE device_tokon SET phone_id='$header_deviceid' WHERE fb_id='$phone_number'";
            $update_tokon_result = mysqli_query($conn, $update_tokon_sql);
            $get_device_tkon = "select * from device_tokon where fb_id='" . $email . "' and phone_id='" . $header_deviceid . "' ";
            $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
            $dvice_tokon = mysqli_fetch_object($get_device_tkon1);
            $tokon = $dvice_tokon->tokon;
        } else {
            $tokon = time() . rand();
            $qrry_1 = "insert into device_tokon(fb_id,tokon,phone_id)values(";
            $qrry_1 .= "'" . $phone_number . "',";
            $qrry_1 .= "'" . $tokon . "',";
            $qrry_1 .= "'" . $header_deviceid . "'";
            $qrry_1 .= ")";
            mysqli_query($conn, $qrry_1);
        }
    }

    if (mysqli_num_rows($login_rs)) {
        $rd = mysqli_fetch_object($login_rs);

        if ($rd->block == '0') {
            $array_out = array();
            $array_out[] =
                //array("code" => "200");
                array(
                    "fb_id" => $rd->fb_id,
                    "action" => "login",
                    "profile_pic" => $rd->profile_pic,
                    "first_name" => $rd->first_name,
                    "last_name" => $rd->last_name,
                    "account_type" => $rd->account_type,
                    "message_privacy" => $rd->message_privacy,
                    "comment_privacy" => $rd->comment_privacy,
                    "live_privacy" => $rd->live_privacy,
                    "username" => $rd->username,
                    "bio" => $rd->bio,
                    "page_have" => $rd->page_have,

                    "gender" => $rd->gender,
                    "tokon" => $tokon
                );

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            $array_out = "error in login";
            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $array_out = "Username & Password Not Found";
        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}

function signupemail()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    //get headers
    $headers = apache_request_headers();

    $header_device = $headers['Device'];
    $header_version = $headers['Version'];
    $header_tokon = $headers['Tokon'];
    $header_deviceid = $headers['Deviceid'];
    //get headers

    if (isset($event_json['email']) && isset($event_json['first_name']) && isset($event_json['last_name']) && isset($event_json["password"])) {

        $fb_id = htmlspecialchars(strip_tags($event_json['email']));
        $password = htmlspecialchars(strip_tags($event_json['password']));
        $first_name = htmlspecialchars(strip_tags($event_json['first_name'], ENT_QUOTES));
        $last_name = htmlspecialchars(strip_tags($event_json['last_name'], ENT_QUOTES));
        $gender = htmlspecialchars(strip_tags($event_json['gender'], ENT_QUOTES));
        $profile_pic = htmlspecialchars_decode(stripslashes($event_json['profile_pic']));
        $version = htmlspecialchars_decode(stripslashes($event_json['version']));
        $device = htmlspecialchars_decode(stripslashes($event_json['device']));
        $signup_type = htmlspecialchars_decode(stripslashes($event_json['signup_type']));
        $username = htmlspecialchars(strip_tags($event_json['username']));
        $dob = htmlspecialchars(strip_tags($event_json['dob']));

        $log_in = "select * from users where fb_id='" . $fb_id . "' ";
        $log_in_rs = mysqli_query($conn, $log_in);

        $get_device_tkon = "select * from device_tokon where fb_id='" . $fb_id . "' and phone_id='" . $header_deviceid . "' ";
        $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
        $dvice_tokon = mysqli_fetch_object($get_device_tkon1);

        if (mysqli_num_rows($log_in_rs)) {
            $array_out = "Already Registered!";
            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {

            $qrry_1 = "insert into users(fb_id,username,first_name,last_name,profile_pic,version,device,signup_type,password,dob,gender)values(";
            $qrry_1 .= "'" . $fb_id . "',";
            $qrry_1 .= "'" . $username . "',";
            $qrry_1 .= "'" . $first_name . "',";
            $qrry_1 .= "'" . $last_name . "',";
            $qrry_1 .= "'" . $profile_pic . "',";
            $qrry_1 .= "'" . $version . "',";
            $qrry_1 .= "'" . $device . "',";
            $qrry_1 .= "'" . $signup_type . "',";
            $qrry_1 .= "'" . $password . "',";
            $qrry_1 .= "'" . $dob . "',";
            $qrry_1 .= "'" . $gender . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {
                $last_insert_fb_id = mysqli_insert_id($conn);

                //register tokon
                $tokon = time() . rand();
                $qrry_1 = "insert into device_tokon(fb_id,tokon,phone_id)values(";
                $qrry_1 .= "'" . $fb_id . "',";
                $qrry_1 .= "'" . $tokon . "',";
                $qrry_1 .= "'" . $header_deviceid . "'";
                $qrry_1 .= ")";
                mysqli_query($conn, $qrry_1);
                //register tokon

                $array_out = array();
                $array_out[] =
                    //array("code" => "200");
                    array(
                        "fb_id" => $fb_id,
                        "username" => $username,
                        "action" => "signup",
                        "profile_pic" => $profile_pic,
                        "first_name" => $first_name,
                        "last_name" => $last_name,
                        "signup_type" => $signup_type,
                        "gender" => $gender,
                        "tokon" => $tokon
                    );

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                //echo mysqli_error();
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem in signup");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
        }


    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function signup()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    //get headers
    $headers = apache_request_headers();

    $header_device = $headers['Device'];
    $header_version = $headers['Version'];
    $header_tokon = $headers['Tokon'];
    $header_deviceid = $headers['Deviceid'];
    //get headers

    if (isset($event_json['fb_id']) && isset($event_json['first_name']) && isset($event_json['last_name'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $first_name = htmlspecialchars(strip_tags($event_json['first_name'], ENT_QUOTES));
        $last_name = htmlspecialchars(strip_tags($event_json['last_name'], ENT_QUOTES));
        $gender = htmlspecialchars(strip_tags($event_json['gender'], ENT_QUOTES));
        $profile_pic = htmlspecialchars_decode(stripslashes($event_json['profile_pic']));
        $version = htmlspecialchars_decode(stripslashes($event_json['version']));
        $device = htmlspecialchars_decode(stripslashes($event_json['device']));
        $signup_type = htmlspecialchars_decode(stripslashes($event_json['signup_type']));
        $username = $first_name . rand();

        $log_in = "select * from users where fb_id='" . $fb_id . "' ";
        $log_in_rs = mysqli_query($conn, $log_in);

        $get_device_tkon = "select * from device_tokon where fb_id='" . $fb_id . "' and phone_id='" . $header_deviceid . "' ";
        $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
        $dvice_tokon = mysqli_fetch_object($get_device_tkon1);

        if (mysqli_num_rows($log_in_rs)) {
            $rd = mysqli_fetch_object($log_in_rs);

            if ($rd->block == '0') {
                $array_out = array();
                $array_out[] =
                    //array("code" => "200");
                    array(
                        "fb_id" => $rd->fb_id,
                        "action" => "login",
                        "profile_pic" => $rd->profile_pic,
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "username" => $rd->username,
                        "bio" => $rd->bio,
                        "page_have" => $rd->page_have,
                        "id_as_page" => $rd->id_as_page,
                        "gender" => $rd->gender,
                        "tokon" => $dvice_tokon->tokon
                    );

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                $array_out = "error in login";
                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }

        } else {

            $qrry_1 = "insert into users(fb_id,username,first_name,last_name,profile_pic,version,device,signup_type,gender)values(";
            $qrry_1 .= "'" . $fb_id . "',";
            $qrry_1 .= "'" . $username . "',";
            $qrry_1 .= "'" . $first_name . "',";
            $qrry_1 .= "'" . $last_name . "',";
            $qrry_1 .= "'" . $profile_pic . "',";
            $qrry_1 .= "'" . $version . "',";
            $qrry_1 .= "'" . $device . "',";
            $qrry_1 .= "'" . $signup_type . "',";
            $qrry_1 .= "'" . $gender . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {
                $last_insert_fb_id = mysqli_insert_id($conn);

                //register tokon
                $tokon = time() . rand();
                $qrry_1 = "insert into device_tokon(fb_id,tokon,phone_id)values(";
                $qrry_1 .= "'" . $fb_id . "',";
                $qrry_1 .= "'" . $tokon . "',";
                $qrry_1 .= "'" . $header_deviceid . "'";
                $qrry_1 .= ")";
                mysqli_query($conn, $qrry_1);
                //register tokon

                $array_out = array();
                $array_out[] =
                    //array("code" => "200");
                    array(
                        "fb_id" => $fb_id,
                        "username" => $username,
                        "action" => "signup",
                        "profile_pic" => $profile_pic,
                        "first_name" => $first_name,
                        "last_name" => $last_name,
                        "signup_type" => $signup_type,
                        "gender" => $gender,
                        "tokon" => $tokon
                    );

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                //echo mysqli_error();
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem in signup");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
        }


    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function uploadImage()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    //0= owner  1= company 2= ind mechanic

    if (isset($event_json['fb_id']) && isset($event_json['image_link'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $image_link = stripslashes(strip_tags($event_json['image_link']));


        $qrry_1 = "select * from users WHERE fb_id ='" . $fb_id . "' ";
        $log_in_rs = mysqli_query($conn, $qrry_1);

        if (mysqli_num_rows($log_in_rs)) {
            $rd = mysqli_fetch_object($log_in_rs);

            $qrry_1 = "update users SET profile_pic ='" . $image_link . "' WHERE fb_id ='" . $fb_id . "' ";
            if (mysqli_query($conn, $qrry_1)) {
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "success");

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem in uploading");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
        }


    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function gifupload()
{
    //giffimage

    require_once("config.php");
    $input = file_get_contents("php://input");
    $event_json = json_decode($input, true);

    //print_r($event_json);
    $gif1 = $event_json['giffimage']['file_data'];


    $event_json['giffimage'];
    //print_r($event_json['fb_id']);

    $gif = base64_decode($gif1);


    $fileName = "hamza" . rand();


    file_put_contents("upload/gif/" . $fileName . ".gif", $gif);


}

function uploadVideo()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    //checkTokon();

    if (isset($event_json['fb_id']) && isset($event_json['picbase64']) && isset($event_json['videobase64'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $description = htmlspecialchars(strip_tags($event_json['description'], ENT_QUOTES));
        $sound_id = htmlspecialchars(strip_tags($event_json['sound_id'], ENT_QUOTES));
        $uploadFrom = htmlspecialchars(strip_tags($event_json['uploadFrom'], ENT_QUOTES));
        $url = htmlspecialchars(strip_tags($event_json['url'], ENT_QUOTES));
        $type = htmlspecialchars(strip_tags($event_json['type'], ENT_QUOTES));
        $thum = $event_json['picbase64']['file_data'];
        $video = $event_json['videobase64']['file_data'];
        $gif = $event_json['gifbase64']['file_data'];

        $fileName = time() . "_" . rand();
        $video_url = "upload/video/" . $fileName . ".mp4";
        $thum_url = "upload/thum/" . $fileName . ".jpg";
        $gif_url = "upload/gif/" . $fileName . ".gif";

        /*list($type, $data) = explode(',', $data);
			list(, $data)      = explode(',', $data);*/


        if (media_storage == "s3") {
            $thum = base64_decode($thum);
            file_put_contents("tmp/" . $fileName . ".jpg", $thum);

            /*picture resize*/
            // File and new size
            $filename = 'tmp/' . $fileName . '.jpg';
            $newfilename = 'tmp/' . $fileName . '.jpg';
            $percent = 0.4;

            // Get new sizes
            list($width, $height) = getimagesize($filename);
            $newwidth = $width * $percent;
            $newheight = $height * $percent;
            // Load
            $thumb = imagecreatetruecolor($newwidth, $newheight);
            $source = imagecreatefromjpeg($filename);
            // Resize
            $res = imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
            // Output
            imagejpeg($thumb, $newfilename);
            /*picture resize*/

            $filePath = "tmp/" . $fileName . ".jpg";
            $thum_url = uploadS3($filePath, "thum", $fileName);
            unlink($filePath);


            //upload video

            $video = base64_decode($video);
            file_put_contents("tmp/" . $fileName . ".mp4", $video);

            $filePath = "tmp/" . $fileName . ".mp4";
            $video_url = uploadS3($filePath, "videos", $fileName);
            unlink($filePath);


            //upload gif on s3

            $gif = base64_decode($gif);
            file_put_contents("tmp/" . $fileName . ".gif", $gif);

            $filePath = "tmp/" . $fileName . ".gif";
            $gif_url = uploadS3($filePath, "gif", $fileName);
            unlink($filePath);

        } else
            if (media_storage == "local") {
                $thum = base64_decode($thum);
                file_put_contents("upload/thum/" . $fileName . ".jpg", $thum);

                /*picture resize*/
                // File and new size
                $filename = 'upload/thum/' . $fileName . '.jpg';
                $newfilename = 'upload/thum/' . $fileName . '.jpg';
                $percent = 0.4;

                // Get new sizes
                list($width, $height) = getimagesize($filename);
                $newwidth = $width * $percent;
                $newheight = $height * $percent;
                // Load
                $thumb = imagecreatetruecolor($newwidth, $newheight);
                $source = imagecreatefromjpeg($filename);
                // Resize
                $res = imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
                // Output
                imagejpeg($thumb, $newfilename);
                /*picture resize*/


                //upload video in local
                $video = base64_decode($video);
                file_put_contents("upload/video/" . $fileName . ".mp4", $video);


                //upload gif on local
                $gif = base64_decode($gif);
                file_put_contents("upload/gif/" . $fileName . ".gif", $gif);
            }


        $qrry_1 = "insert into videos(description,video,sound_id,fb_id,gif,thum,upload_from,type,url)values(";
        $qrry_1 .= "'" . $description . "',";
        $qrry_1 .= "'" . $video_url . "',";
        $qrry_1 .= "'" . $sound_id . "',";
        $qrry_1 .= "'" . $fb_id . "',";
        $qrry_1 .= "'" . $gif_url . "',";
        $qrry_1 .= "'" . $thum_url . "',";
        $qrry_1 .= "'" . $uploadFrom . "',";
        $qrry_1 .= "'" . $type . "',";
        $qrry_1 .= "'" . $url . "'";
        $qrry_1 .= ")";
        if (mysqli_query($conn, $qrry_1)) {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "file uploaded"
                );

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "error in uploading files" . " " . $qrry_1
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }

    } else {
        $array_out = array();
        $array_out[] =
            array(
                "response" => "json parem missing"
            );

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

function uploadS3($filePath, $fileType, $fileName)
{
    require './vendor/autoload.php';
    $s3 = new Aws\S3\S3Client([
        'region' => S3_REGION,
        'version' => 'latest',
        'credentials' => [
            'key' => IAM_KEY,
            'secret' => IAM_SECRET,
        ]
    ]);
    try {
        $result = $s3->putObject([
            'Bucket' => BUCKET_NAME,
            'Key' => $fileType . '/' . $fileName,
            'SourceFile' => $filePath
        ]);

        return $fileType . '/' . $fileName;
    } catch (S3Exception $e) {
        // Catch an S3 specific exception.
        return $e->getMessage();
    }

}

function showAllVideos()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);


    if (isset($event_json['fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $token = $event_json['token'];

        @mysqli_query($conn, "update users set tokon='" . $token . "' where fb_id='" . $fb_id . "' ");
        $type = "record";

        if ($event_json['video_id']) {
            $query = mysqli_query($conn, "select * from videos where id='" . $event_json['video_id'] . "'");
        } else {
            $query = mysqli_query($conn, "select * from videos WHERE type='$type' order by rand()");
        }


        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {
            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $page_name = null;
            $page_pic = null;
            $button = null;
            $category = null;
            $block = null;
            $published = null;
            if ($row['upload_from'] == "page") {
                $page_query = mysqli_query($conn, "select * from pages where owner_id='" . $row['fb_id'] . "' ");
                $page_data = mysqli_fetch_object($page_query);
                $page_name = $page_data->name;
                $page_pic = $page_data->profile_pic;
                $button = $page_data->button;
                $category = $page_data->category;
                $block = $page_data->block;
                $published = $page_data->published;
            }

            $rd = mysqli_fetch_object($query1);
            $followed_fb_id = $row['fb_id'];
            $isFriend = null;
            $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
            $sql = "SELECT * FROM `follow_users` WHERE fb_id='$fb_id' && followed_fb_id='$followed_fb_id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $isFriend = true;

            } else {
                $isFriend = false;
            }
            $query112 = mysqli_query($conn, "select * from sound where id='" . $row['sound_id'] . "' ");
            $rd12 = mysqli_fetch_object($query112);

            $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' ");
            $countLikes_count = mysqli_fetch_assoc($countLikes);

            $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['id'] . "' ");
            $countcomment_count = mysqli_fetch_assoc($countcomment);


            $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' and fb_id='" . $fb_id . "' ");
            $liked_count = mysqli_fetch_assoc($liked);
            if ($row['upload_from'] == "page") {
                if ($block == 0 && $published == 1) {
                    $array_out[] =
                        array(
                            "id" => $row['id'],
                            "fb_id" => $row['fb_id'],
                            "user_info" => array
                            (

                                "first_name" => $rd->first_name,
                                "isFriend" => $isFriend,
                                "account_type" => $rd->account_type,
                                "message_privacy" => $rd->message_privacy,
                                "comment_privacy" => $rd->comment_privacy,
                                "live_privacy" => $rd->live_privacy,
                                "last_name" => $rd->last_name,
                                "profile_pic" => $rd->profile_pic,
                                "verified" => $rd->verified,
                                "username" => $rd->username,
                            ),
                            "count" => array
                            (
                                "like_count" => $countLikes_count['count'],
                                "video_comment_count" => $countcomment_count['count']
                            ),
                            "liked" => $liked_count['count'],
                            "video" => checkVideoUrl($row['video']),
                            "thum" => checkVideoUrl($row['thum']),
                            "gif" => checkVideoUrl($row['gif']),
                            "description" => $row['description'],
                            "page_name" => $page_name,
                            "page_pic" => checkVideoUrl($page_pic),
                            "button" => $button,
                            "category" => $category,
                            "upload_from" => $row['upload_from'],
                            "url" => $row['url'],
                            "sound" => array
                            (
                                "id" => $rd12->id,
                                "audio_path" =>
                                    array(
                                        "mp3" => checkVideoUrl($rd12->file_path),
                                        "acc" => checkVideoUrl($rd12->file_path)
                                    ),
                                "sound_name" => $rd12->sound_name,
                                "description" => $rd12->description,
                                "thum" => checkVideoUrl($rd12->thum),
                                "section" => $rd12->section,
                                "created" => $rd12->created,
                            ),
                            "created" => $row['created']
                        );
                }
            } else {
                $array_out[] =
                    array(
                        "id" => $row['id'],
                        "fb_id" => $row['fb_id'],
                        "user_info" => array
                        (

                            "first_name" => $rd->first_name,
                            "isFriend" => $isFriend,
                            "account_type" => $rd->account_type,
                            "message_privacy" => $rd->message_privacy,
                            "comment_privacy" => $rd->comment_privacy,
                            "live_privacy" => $rd->live_privacy,
                            "last_name" => $rd->last_name,
                            "profile_pic" => $rd->profile_pic,
                            "verified" => $rd->verified,
                            "username" => $rd->username,
                        ),
                        "count" => array
                        (
                            "like_count" => $countLikes_count['count'],
                            "video_comment_count" => $countcomment_count['count']
                        ),
                        "liked" => $liked_count['count'],
                        "video" => checkVideoUrl($row['video']),
                        "thum" => checkVideoUrl($row['thum']),
                        "gif" => checkVideoUrl($row['gif']),
                        "description" => $row['description'],
                        "upload_from" => $row['upload_from'],
                        "url" => $row['url'],
                        "sound" => array
                        (
                            "id" => $rd12->id,
                            "audio_path" =>
                                array(
                                    "mp3" => checkVideoUrl($rd12->file_path),
                                    "acc" => checkVideoUrl($rd12->file_path)
                                ),
                            "sound_name" => $rd12->sound_name,
                            "description" => $rd12->description,
                            "thum" => checkVideoUrl($rd12->thum),
                            "section" => $rd12->section,
                            "created" => $rd12->created,
                        ),
                        "created" => $row['created']
                    );
            }

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function showAllStory()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);


    if (isset($event_json['fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $token = $event_json['token'];

        @mysqli_query($conn, "update users set tokon='" . $token . "' where fb_id='" . $fb_id . "' ");
        $type = "story";
        $query = mysqli_query($conn, "SELECT * FROM videos WHERE created BETWEEN DATE_SUB(NOW(), INTERVAL 1 DAY) AND NOW() AND type='$type'");


        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {
            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $page_name = null;
            $page_pic = null;
            if ($row['upload_from'] == "page") {
                $page_query = mysqli_query($conn, "select * from pages where owner_id='" . $row['fb_id'] . "' ");
                $page_data = mysqli_fetch_object($page_query);
                $page_name = $page_data->name;
                $page_pic = $page_data->profile_pic;
            }


            $rd = mysqli_fetch_object($query1);
            $followed_fb_id = $row['fb_id'];
            $isFriend = null;
            $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
            $sql = "SELECT * FROM `follow_users` WHERE fb_id='$fb_id' && followed_fb_id='$followed_fb_id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $isFriend = true;

            } else {
                $isFriend = false;
            }
            $query112 = mysqli_query($conn, "select * from sound where id='" . $row['sound_id'] . "' ");
            $rd12 = mysqli_fetch_object($query112);

            $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' ");
            $countLikes_count = mysqli_fetch_assoc($countLikes);

            $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['id'] . "' ");
            $countcomment_count = mysqli_fetch_assoc($countcomment);


            $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' and fb_id='" . $fb_id . "' ");
            $liked_count = mysqli_fetch_assoc($liked);

            $array_out[] =
                array(
                    "id" => $row['id'],
                    "fb_id" => $row['fb_id'],
                    "user_info" => array
                    (

                        "first_name" => $rd->first_name,
                        "isFriend" => $isFriend,
                        "account_type" => $rd->account_type,
                        "message_privacy" => $rd->message_privacy,
                        "comment_privacy" => $rd->comment_privacy,
                        "live_privacy" => $rd->live_privacy,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "verified" => $rd->verified,
                        "username" => $rd->username,
                    ),
                    "count" => array
                    (
                        "like_count" => $countLikes_count['count'],
                        "video_comment_count" => $countcomment_count['count']
                    ),
                    "liked" => $liked_count['count'],
                    "video" => checkVideoUrl($row['video']),
                    "thum" => checkVideoUrl($row['thum']),
                    "gif" => checkVideoUrl($row['gif']),
                    "description" => $row['description'],
                    "page_name" => $page_name,
                    "page_pic" => checkVideoUrl($page_pic),
                    "upload_from" => $row['upload_from'],
                    "url" => $row['url'],
                    "sound" => array
                    (
                        "id" => $rd12->id,
                        "audio_path" =>
                            array(
                                "mp3" => $API_path . "/upload/audio/" . $rd12->id . ".mp3",
                                "acc" => $API_path . "/upload/audio/" . $rd12->id . ".aac"
                            ),
                        "sound_name" => $rd12->sound_name,
                        "description" => $rd12->description,
                        "thum" => $rd12->thum,
                        "section" => $rd12->section,
                        "created" => $rd12->created,
                    ),
                    "created" => $row['created']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function SearchByHashTag()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $tag = htmlspecialchars(strip_tags($event_json['tag'], ENT_QUOTES));
        $token = $event_json['token'];

        @mysqli_query($conn, "update users set tokon='" . $token . "' where fb_id='" . $fb_id . "' ");

        $query = mysqli_query($conn, "select * from videos where description like '%" . $tag . "%' order by rand() ");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $rd = mysqli_fetch_object($query1);

            $query112 = mysqli_query($conn, "select * from sound where id='" . $row['sound_id'] . "' ");
            $rd12 = mysqli_fetch_object($query112);

            $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' ");
            $countLikes_count = mysqli_fetch_assoc($countLikes);

            $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['id'] . "' ");
            $countcomment_count = mysqli_fetch_assoc($countcomment);


            $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' and fb_id='" . $fb_id . "' ");
            $liked_count = mysqli_fetch_assoc($liked);

            $array_out[] =
                array(
                    "id" => $row['id'],
                    "fb_id" => $row['fb_id'],
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => $rd->username,
                    ),
                    "count" => array
                    (
                        "like_count" => $countLikes_count['count'],
                        "video_comment_count" => $countcomment_count['count'],
                        "view" => $row['view'],
                    ),
                    "liked" => $liked_count['count'],
                    "video" => checkVideoUrl($row['video']),
                    "thum" => checkVideoUrl($row['thum']),
                    "gif" => checkVideoUrl($row['gif']),
                    "description" => $row['description'],
                    "sound" => array
                    (
                        "id" => $rd12->id,
                        "audio_path" =>
                            array(
                                "mp3" => $API_path . "/upload/audio/" . $rd12->id . ".mp3",
                                "acc" => $API_path . "/upload/audio/" . $rd12->id . ".aac"
                            ),
                        "sound_name" => $rd12->sound_name,
                        "description" => $rd12->description,
                        "thum" => $rd12->thum,
                        "section" => $rd12->section,
                        "created" => $rd12->created,
                    ),
                    "created" => $row['created']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function showMyAllVideos()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id']) && isset($event_json['my_fb_id']) && isset($event_json['f_type'])) {
        $type = "record";
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $my_fb_id = htmlspecialchars(strip_tags($event_json['my_fb_id'], ENT_QUOTES));
        $f_type = htmlspecialchars(strip_tags($event_json['f_type'], ENT_QUOTES));
        //  $type = htmlspecialchars(strip_tags($event_json['type'], ENT_QUOTES));
        $isFriend = null;
        $sql = "SELECT * FROM `follow_users` WHERE fb_id='$my_fb_id' && followed_fb_id='$fb_id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $isFriend = true;

        } else {
            $isFriend = false;
        }
        $query1 = mysqli_query($conn, "select * from users where fb_id='$fb_id'");
        $rd = mysqli_fetch_object($query1);
        if (mysqli_num_rows($query1)) {
            $query = mysqli_query($conn, "select * from videos where fb_id='$fb_id' && type ='$type' && upload_from = '$f_type' order by id DESC");

            $array_out_video = array();
            while ($row = mysqli_fetch_array($query)) {

                $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' ");
                $countLikes_count = mysqli_fetch_assoc($countLikes);

                $query112 = mysqli_query($conn, "select * from sound where id='" . $row['sound_id'] . "' ");
                $rd12 = mysqli_fetch_object($query112);

                $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['id'] . "' ");
                $countcomment_count = mysqli_fetch_assoc($countcomment);

                $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' and fb_id='" . $fb_id . "' ");
                $liked_count = mysqli_fetch_assoc($liked);

                $array_out_video[] =
                    array(
                        "id" => $row['id'],
                        "video" => checkVideoUrl($row['video']),
                        "thum" => checkVideoUrl($row['thum']),
                        "gif" => checkVideoUrl($row['gif'] . "?time=" . rand()),
                        "description" => $row['description'],
                        "liked" => $liked_count['count'],
                        "upload_from" => $row['upload_from'],
                        "url" => $row['url'],
                        "count" => array
                        (
                            "like_count" => $countLikes_count['count'],
                            "video_comment_count" => $countcomment_count['count'],
                            "view" => $row['view'],
                        ),
                        "sound" => array
                        (
                            "id" => $rd12->id,
                            "audio_path" =>
                                array(
                                    "mp3" => $API_path . "/upload/audio/" . $rd12->id . ".mp3",
                                    "acc" => $API_path . "/upload/audio/" . $rd12->id . ".aac"
                                ),
                            "sound_name" => $rd12->sound_name,
                            "description" => $rd12->description,
                            "thum" => $rd12->thum,
                            "section" => $rd12->section,
                            "created" => $rd12->created,
                        ),
                        "created" => $row['created']
                    );

            }


            //count total heart
            $query123 = mysqli_query($conn, "select * from videos where fb_id='" . $fb_id . "' ");

            $array_out_count_heart = "";
            while ($row123 = mysqli_fetch_array($query123)) {
                $array_out_count_heart .= $row123['id'] . ',';
            }

            $array_out_count_heart = $array_out_count_heart . '0';

            $hear_count = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id IN($array_out_count_heart) ");
            $hear_count = mysqli_fetch_assoc($hear_count);

            //count total heart

            //count total_fans

            $total_fans = mysqli_query($conn, "SELECT count(*) as count from follow_users where followed_fb_id='" . $fb_id . "' ");
            $total_fans = mysqli_fetch_assoc($total_fans);

            //count total_fans

            //count total_following

            $total_following = mysqli_query($conn, "SELECT count(*) as count from follow_users where fb_id='" . $fb_id . "' ");
            $total_following = mysqli_fetch_assoc($total_following);

            //count total_following


            $count_video_rows = count($array_out_video);
            if ($count_video_rows == "0") {
                $array_out_video = array(0);
            }


            $query2 = mysqli_query($conn, "SELECT count(*) as count from follow_users where fb_id='" . $my_fb_id . "' and followed_fb_id='" . $fb_id . "' ");
            $follow_count = mysqli_fetch_assoc($query2);


            if ($follow_count['count'] == "0") {
                $follow = "0";
                $follow_button_status = "Follow";
            } else
                if ($follow_count['count'] != "0") {
                    $follow = "1";
                    $follow_button_status = "Unfollow";
                }


            $array_out = array();
            $array_out[] =
                array(
                    "fb_id" => $fb_id,
                    "user_info" => array
                    (
                        "fb_id" => $rd->fb_id,
                        "isFriend" => $isFriend,
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "account_type" => $rd->account_type,
                        "message_privacy" => $rd->message_privacy,
                        "comment_privacy" => $rd->comment_privacy,
                        "live_privacy" => $rd->live_privacy,
                        "profile_pic" => $rd->profile_pic,
                        "gender" => $rd->gender,
                        "created" => $rd->created,
                        "username" => $rd->username,
                    ),
                    "follow_Status" => array
                    (
                        "follow" => $follow,
                        "follow_status_button" => $follow_button_status
                    ),
                    "total_heart" => $hear_count['count'],
                    "total_fans" => $total_fans['count'],
                    "total_following" => $total_following['count'],
                    "user_videos" => $array_out_video

                );


        }

        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function updateVideoView()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['id'])) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));

        mysqli_query($conn, "update videos SET view =view+1 WHERE id ='" . $id . "' ");

        $array_out[] =
            array(
                "response" => "success");

        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}


function likeDislikeVideo()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id']) && isset($event_json['video_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $video_id = htmlspecialchars(strip_tags($event_json['video_id'], ENT_QUOTES));
        $action = htmlspecialchars(strip_tags($event_json['action'], ENT_QUOTES));

        if ($action == "0") {
            mysqli_query($conn, "Delete from video_like_dislike where video_id ='" . $video_id . "' ");

            $array_out = array();

            $array_out[] =
                array(
                    "response" => "video unlike");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            $qrry_1 = "insert into video_like_dislike(video_id,fb_id,action)values(";
            $qrry_1 .= "'" . $video_id . "',";
            $qrry_1 .= "'" . $fb_id . "',";
            $qrry_1 .= "'" . $action . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {
                $array_out = array();
                $array_out[] =
                    array(
                        "response" => "actions success"
                    );

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));

                $query = mysqli_query($conn, "select * from videos where id='" . $video_id . "' ");
                $rd1 = mysqli_fetch_object($query);
                $effected_fb_id = $rd1->fb_id;
                if ($fb_id != $effected_fb_id) {
                    $qrry_2 = "insert into notification(my_fb_id,effected_fb_id,type,value)values(";
                    $qrry_2 .= "'" . $fb_id . "',";
                    $qrry_2 .= "'" . $effected_fb_id . "',";
                    $qrry_2 .= "'video_like',";
                    $qrry_2 .= "'" . $video_id . "'";
                    $qrry_2 .= ")";
                    mysqli_query($conn, $qrry_2);
                }

                //push notification

                //fetch user tokon

                $query1 = mysqli_query($conn, "select * from videos where id='" . $video_id . "' ");
                $rd = mysqli_fetch_object($query1);

                $query11 = mysqli_query($conn, "select * from users where fb_id='" . $rd->fb_id . "' ");
                $rd1 = mysqli_fetch_object($query11);

                //fetch user tokon

                //fetch name of a person who is liking other person video
                $query111 = mysqli_query($conn, "select * from users where fb_id='" . $fb_id . "' ");
                $rd11 = mysqli_fetch_object($query111);

                //fetch name of a person who is liking other person video

                $title = $rd11->first_name . " Liked Your Video";
                $message = "You have received 1 more like on your video";

                $notification['to'] = $rd1->tokon;
                $notification['notification']['title'] = $title;
                $notification['notification']['body'] = $message;
                // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
                $notification['notification']['badge'] = "1";
                $notification['notification']['sound'] = "default";
                $notification['notification']['icon'] = "";
                $notification['notification']['image'] = "";
                $notification['notification']['action_type'] = "video_like";
                $notification['notification']['videoId'] = $video_id;
                $notification['notification']['tag'] = $video_id;


                $notification['data']['title'] = $title;
                $notification['data']['body'] = $message;
                $notification['data']['senderid'] = $fb_id;
                $notification['data']['videoId'] = $video_id;
                $notification['data']['receiverid'] = $effected_fb_id;
                $notification['data']['action_type'] = "video_like";
                $notification['data']['tag'] = $video_id;
                $notification['notification']['data'] = "";
                sendPushNotificationToMobileDevice(json_encode($notification));


                //push notification
            } else {
                $array_out = array();
                $array_out[] =
                    array(
                        "response" => "error in uploading files"
                    );

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }


        }


    } else {
        $array_out = array();
        $array_out[] =
            array(
                "response" => "json parem missing"
            );

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function postComment()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);

// 		checkTokon();

    if (isset($event_json['fb_id']) && isset($event_json['video_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $video_id = htmlspecialchars(strip_tags($event_json['video_id'], ENT_QUOTES));
        $comment = htmlspecialchars(strip_tags($event_json['comment'], ENT_QUOTES));

        $query1 = mysqli_query($conn, "select * from users where fb_id='" . $fb_id . "' ");
        $rd = mysqli_fetch_object($query1);

        $qrry_1 = "insert into video_comment(video_id,fb_id,comments)values(";
        $qrry_1 .= "'" . $video_id . "',";
        $qrry_1 .= "'" . $fb_id . "',";
        $qrry_1 .= "'" . $comment . "'";
        $qrry_1 .= ")";
        if (mysqli_query($conn, $qrry_1)) {
            $array_out = array();
            $array_out[] =
                array(
                    "fb_id" => $fb_id,
                    "video_id" => $video_id,
                    "comments" => $comment,
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => $rd->username,
                    ),
                );

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));


            $query = mysqli_query($conn, "select * from videos where id='" . $video_id . "' ");
            $rd1 = mysqli_fetch_object($query);
            $effected_fb_id = $rd1->fb_id;

            $qrry_2 = "insert into notification(my_fb_id,effected_fb_id,type,value)values(";
            $qrry_2 .= "'" . $fb_id . "',";
            $qrry_2 .= "'" . $effected_fb_id . "',";
            $qrry_2 .= "'comment_video',";
            $qrry_2 .= "'" . $video_id . "'";
            $qrry_2 .= ")";
            mysqli_query($conn, $qrry_2);

            //push notification

            //fetch user tokon

            $query1 = mysqli_query($conn, "select * from videos where id='" . $video_id . "' ");
            $rd = mysqli_fetch_object($query1);

            $query11 = mysqli_query($conn, "select * from users where fb_id='" . $rd->fb_id . "' ");
            $rd1 = mysqli_fetch_object($query11);

            //fetch user tokon

            //fetch name of a person who is liking other person video
            $query111 = mysqli_query($conn, "select * from users where fb_id='" . $fb_id . "' ");
            $rd11 = mysqli_fetch_object($query111);

            //fetch name of a person who is liking other person video

            $title = $rd11->first_name . " Post comment on your video";
            $message = $comment;

            $notification['to'] = $rd1->tokon;
            $notification['notification']['title'] = $title;
            $notification['notification']['body'] = $message;
            // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
            $notification['notification']['badge'] = "1";
            $notification['notification']['sound'] = "default";
            $notification['notification']['icon'] = "";
            $notification['notification']['image'] = "";
            $notification['notification']['action_type'] = "comment";
            $notification['notification']['videoId'] = $video_id;
            $notification['notification']['tag'] = $video_id;


            $notification['data']['title'] = $title;
            $notification['data']['body'] = $message;
            $notification['data']['senderid'] = $fb_id;
            $notification['data']['videoId'] = $video_id;
            $notification['data']['receiverid'] = $effected_fb_id;
            $notification['data']['action_type'] = "comment";
            $notification['data']['tag'] = $video_id;
            $notification['notification']['data'] = "";
            sendPushNotificationToMobileDevice(json_encode($notification));

            //push notification
        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "error"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }

    } else {
        $array_out = array();
        $array_out[] =
            array(
                "response" => "json parem missing"
            );

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}

function showVideoComments()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['video_id'])) {
        $video_id = htmlspecialchars(strip_tags($event_json['video_id'], ENT_QUOTES));

        $query = mysqli_query($conn, "select * from video_comment where video_id='" . $video_id . "' order by id DESC");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $rd = mysqli_fetch_object($query1);

            $array_out[] =
                array(
                    "video_id" => $row['video_id'],
                    "id" => $row['id'],
                    "fb_id" => $row['fb_id'],
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => $rd->username,
                    ),

                    "comments" => $row['comments'],
                    "created" => $row['created']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function allSounds()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));

    $query = mysqli_query($conn, "select * from sound_section ");

    $array_out = array();
    while ($row = mysqli_fetch_array($query)) {

        //echo $row['section'];
        //echo "select * from sound where section ='".$row['section']."' ";
        $query1 = mysqli_query($conn, "select * from sound where section ='" . $row['id'] . "' ");
        $array_out1 = array();
        while ($row1 = mysqli_fetch_array($query1)) {
            $qrry = "select * from fav_sound WHERE fb_id='" . $fb_id . "' and sound_id ='" . $row1['id'] . "' ";
            $log_in_rs = mysqli_query($conn, $qrry);
            $CountFav = mysqli_num_rows($log_in_rs);
            if ($CountFav == "") {
                $CountFav = "0";
            }

            $array_out1[] =
                array(
                    "id" => $row1['id'],

                    "audio_path" =>
                        array(
                            "mp3" => checkVideoUrl($row1['file_path']),
                            "acc" => checkVideoUrl($row1['file_path'])
                        ),
                    "sound_name" => $row1['sound_name'],
                    "description" => $row1['description'],
                    "section" => $row1['section'],
                    "thum" => checkVideoUrl($row1['thum']),
                    "created" => $row1['created'],
                    "fav" => $CountFav
                );
        }

        if (count($array_out1) != "0") {
            $array_out2[] =
                array(
                    "section_name" => $row['section_name'],
                    "sections_sounds" => $array_out1

                );
        }


    }
    $output = array("code" => "200", "msg" => $array_out2);
    print_r(json_encode($output, true));

}


function fav_sound()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id']) && isset($event_json['sound_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $sound_id = htmlspecialchars(strip_tags($event_json['sound_id'], ENT_QUOTES));
        $fav = htmlspecialchars(strip_tags($event_json['fav'], ENT_QUOTES));

        if ($fav == "1") {
            $qrry_1 = "insert into fav_sound(fb_id,sound_id)values(";
            $qrry_1 .= "'" . $fb_id . "',";
            $qrry_1 .= "'" . $sound_id . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {


                $array_out = array();
                $array_out[] =
                    //array("code" => "200");
                    array(
                        "response" => "successful");

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                //echo mysqli_error();
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
        } else
            if ($fav == "0") {
                $qrry_1 = "Delete from fav_sound where fb_id ='" . $fb_id . "' and sound_id='" . $sound_id . "' ";
                if (mysqli_query($conn, $qrry_1)) {


                    $array_out = array();
                    $array_out[] =
                        //array("code" => "200");
                        array(
                            "response" => "successful");

                    $output = array("code" => "200", "msg" => $array_out);
                    print_r(json_encode($output, true));
                } else {
                    //echo mysqli_error();
                    $array_out = array();

                    $array_out[] =
                        array(
                            "response" => "problem");

                    $output = array("code" => "201", "msg" => $array_out);
                    print_r(json_encode($output, true));
                }
            }


    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function my_FavSound()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id'])) {

        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));

        $query1 = mysqli_query($conn, "select * from fav_sound where fb_id ='" . $fb_id . "' ");
        $array_out1 = array();
        while ($row1 = mysqli_fetch_array($query1)) {

            $qrry = "select * from sound WHERE id ='" . $row1['sound_id'] . "' ";
            $log_in_rs = mysqli_query($conn, $qrry);

            $rd = mysqli_fetch_object($log_in_rs);

            $array_out1[] =
                array(
                    "id" => $rd->id,

                    "audio_path" =>
                        array(

                            "mp3" => checkVideoUrl("audio/" . $row1['sound_id']),
                            "acc" => checkVideoUrl("audio/" . $row1['sound_id'])
                        ),
                    "sound_name" => $rd->sound_name,
                    "description" => $rd->description,
                    "section" => $rd->section,
                    "thum" => checkVideoUrl($rd->thum),
                    "created" => $rd->created,
                );
        }

        $output = array("code" => "200", "msg" => $array_out1);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}


function my_liked_video()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));

        $query1 = mysqli_query($conn, "select * from users where fb_id='" . $fb_id . "' ");
        $rd = mysqli_fetch_object($query1);
        if (mysqli_num_rows($query1)) {

            $query = mysqli_query($conn, "select * from video_like_dislike where fb_id='" . $fb_id . "' order by id DESC");

            $array_out_video = array();
            while ($row = mysqli_fetch_array($query)) {

                $query11 = mysqli_query($conn, "select * from videos where id='" . $row['video_id'] . "' ");
                $rdd = mysqli_fetch_object($query11);

                $query112 = mysqli_query($conn, "select * from sound where id='" . $rdd->sound_id . "' ");
                $rd12 = mysqli_fetch_object($query112);

                $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['video_id'] . "' ");
                $countLikes_count = mysqli_fetch_assoc($countLikes);

                $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['video_id'] . "' ");
                $countcomment_count = mysqli_fetch_assoc($countcomment);

                $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['video_id'] . "' and fb_id='" . $fb_id . "' ");
                $liked_count = mysqli_fetch_assoc($liked);

                $query111 = mysqli_query($conn, "select * from users where fb_id='" . $rdd->fb_id . "' ");
                $rd11 = mysqli_fetch_object($query111);

                $array_out_video[] =
                    array(
                        "id" => $rdd->id,
                        "video" => checkVideoUrl(@$rdd->video),
                        "thum" => checkVideoUrl(@$rdd->thum),
                        "gif" => checkVideoUrl(@$rdd->gif),
                        "description" => $rdd->description,
                        "liked" => $liked_count['count'],
                        "user_info" => array
                        (
                            "first_name" => $rd11->first_name,
                            "username" => $rd11->username,
                            "last_name" => $rd11->last_name,
                            "profile_pic" => $rd11->profile_pic,
                        ),
                        "count" => array
                        (
                            "like_count" => $countLikes_count['count'],
                            "video_comment_count" => $countcomment_count['count'],
                            "view" => $rdd->view,
                        ),
                        "sound" => array
                        (
                            "id" => $rd12->id,
                            "audio_path" =>
                                array(
                                    "mp3" => checkVideoUrl($rd12->file_path),
                                    "acc" => checkVideoUrl($rd12->file_path)
                                ),
                            "sound_name" => @$rd12->sound_name,
                            "description" => @$rd12->description,
                            "thum" => checkVideoUrl($rd12->thum),
                            "section" => @$rd12->section,
                            "created" => @$rd12->created,
                        ),
                        "created" => $row['created']
                    );

            }

            $count_video_rows = count($array_out_video);
            if ($count_video_rows == "0") {
                $array_out_video = array(0);
            }


            $array_out = array();
            $array_out[] =
                array(
                    "fb_id" => $fb_id,
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "gender" => $rd->gender,
                        "created" => $rd->created,
                        "username" => $rd->username,
                    ),

                    "total_heart" => "100",
                    "total_fans" => "88",
                    "total_following" => "55",
                    "user_videos" => $array_out_video

                );


        }

        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function get_followers()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));

        $query = mysqli_query($conn, "select * from follow_users where followed_fb_id='" . $fb_id . "' order by id DESC");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $query11 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $rd1 = mysqli_fetch_object($query11);


            $query2 = mysqli_query($conn, "SELECT count(*) as count from follow_users where followed_fb_id='" . $row['fb_id'] . "' and fb_id='" . $fb_id . "'  ");
            $follow_count = mysqli_fetch_assoc($query2);

            if ($follow_count['count'] == "0") {
                $follow = "0";
                $follow_button_status = "Follow";
            } else
                if ($follow_count['count'] != "0") {
                    $follow = "1";
                    $follow_button_status = "Unfollow";
                }


            $array_out[] =
                array(
                    "fb_id" => $rd1->fb_id,
                    "username" => $rd1->username,
                    "first_name" => $rd1->first_name,
                    "last_name" => $rd1->last_name,
                    "gender" => $rd1->gender,
                    "bio" => $rd1->bio,
                    "page_have" => $rd1->page_have,
                    "id_as_page" => $rd1->id_as_page,
                    "profile_pic" => $rd1->profile_pic,
                    "created" => $rd1->created,
                    "follow_Status" => array
                    (
                        "follow" => $follow,
                        "follow_status_button" => $follow_button_status
                    )
                );

        }


        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function get_followings()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (isset($event_json['fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));

        $query = mysqli_query($conn, "select * from follow_users where fb_id='" . $fb_id . "' order by id DESC");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $query11 = mysqli_query($conn, "select * from users where fb_id='" . $row['followed_fb_id'] . "' ");
            $rd1 = mysqli_fetch_object($query11);

            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $rd = mysqli_fetch_object($query1);


            $query2 = mysqli_query($conn, "SELECT count(*) as count from follow_users where fb_id='" . $fb_id . "' and followed_fb_id='" . $row['followed_fb_id'] . "' ");
            $follow_count = mysqli_fetch_assoc($query2);

            if ($follow_count['count'] == "0") {
                $follow = "0";
                $follow_button_status = "Follow";
            } else
                if ($follow_count['count'] != "0") {
                    $follow = "1";
                    $follow_button_status = "Unfollow";
                }


            $array_out[] =
                array(
                    "fb_id" => $rd1->fb_id,
                    "username" => $rd1->username,
                    "first_name" => $rd1->first_name,
                    "last_name" => $rd1->last_name,
                    "gender" => $rd1->gender,
                    "bio" => $rd1->bio,
                    "page_have" => $rd->page_have,
                    "id_as_page" => $rd->id_as_page,
                    "profile_pic" => $rd1->profile_pic,
                    "created" => $rd1->created,
                    "follow_Status" => array
                    (
                        "follow" => $follow,
                        "follow_status_button" => $follow_button_status
                    )
                );

        }


        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function discover()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));

    $query = mysqli_query($conn, "select * from discover_section ");

    $array_out = array();
    while ($row = mysqli_fetch_array($query)) {

        //echo $row['section'];
        //echo "select * from sound where section ='".$row['section']."' ";

        $query1 = mysqli_query($conn, "select * from videos where section ='" . $row['id'] . "' ");
        $array_out1 = array();
        while ($row1 = mysqli_fetch_array($query1)) {
            $query11 = mysqli_query($conn, "select * from users where fb_id='" . $row1['fb_id'] . "' ");
            $rd1 = mysqli_fetch_object($query11);

            $query112 = mysqli_query($conn, "select * from sound where id='" . $row1['sound_id'] . "' ");
            $rd12 = mysqli_fetch_object($query112);

            $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row1['id'] . "' ");
            $countLikes_count = mysqli_fetch_assoc($countLikes);

            $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row1['id'] . "' ");
            $countcomment_count = mysqli_fetch_assoc($countcomment);

            $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row1['id'] . "' and fb_id='" . $fb_id . "' ");
            $liked_count = mysqli_fetch_assoc($liked);

            $array_out1[] =
                array(
                    "id" => $row1['id'],
                    "video" => checkVideoUrl($row1['video']),
                    "thum" => checkVideoUrl($row1['thum']),
                    "gif" => checkVideoUrl($row1['gif']),
                    "description" => $row1['description'],
                    "liked" => $liked_count['count'],
                    "count" => array
                    (
                        "like_count" => $countLikes_count['count'],
                        "video_comment_count" => $countcomment_count['count'],
                        "view" => $row1['view'],
                    ),
                    "user_info" => array
                    (
                        "fb_id" => $rd1->fb_id,
                        "first_name" => $rd1->first_name,
                        "last_name" => $rd1->last_name,
                        "profile_pic" => $rd1->profile_pic,
                        "gender" => $rd1->gender,
                        "created" => $rd1->created,
                        "username" => $rd1->username,
                    ),
                    "sound" => array
                    (
                        "id" => $rd12->id,
                        "audio_path" =>
                            array(
                                "mp3" => checkVideoUrl($rd12->file_path),
                                "acc" => checkVideoUrl($rd12->file_path)
                            ),
                        "sound_name" => $rd12->sound_name,
                        "description" => $rd12->description,
                        "thum" => checkVideoUrl($rd12->thum),
                        "section" => $rd12->section,
                        "created" => $rd12->created,
                    ),
                    "created" => $row1['created']
                );
        }

        if (count($array_out1) != "0") {
            $array_out2[] =
                array(
                    "section_name" => $row['section_name'],
                    "sections_videos" => $array_out1

                );
        }

    }
    $output = array("code" => "200", "msg" => $array_out2);
    print_r(json_encode($output, true));

}

function all_discovery_sections()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));

        if ($id != "") {
            $query = mysqli_query($conn, "select * from discover_section where id='" . $id . "' ");
        } else {
            $query = mysqli_query($conn, "select * from discover_section ");
        }


        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            //echo $row['section'];
            //echo "select * from sound where section ='".$row['section']."' ";
            $array_out1[] =
                array(
                    "id" => $row['id'],
                    "section_name" => $row['section_name'],
                    "created" => $row['created']
                );
        }
        $output = array("code" => "200", "msg" => $array_out1);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

// 		$query=mysqli_query($conn,"select DISTINCT section from videos where section!='0' ");

// 		$array_out = array();
// 		while($row=mysqli_fetch_array($query))
// 		{

// 		   //echo $row['section'];
// 		   //echo "select * from sound where section ='".$row['section']."' ";
//     		  $array_out1[] =
//         			array(
//         			"section_name" => $row['section']
//         	  );
// 		}
// 		$output=array( "code" => "200", "msg" => $array_out1);
// 		print_r(json_encode($output, true));
}

function discovery_sections_edit()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $section_name = $event_json['section_name'];
        $id = $event_json['id'];

        @mysqli_query($conn, "update discover_section set section_name = '" . $section_name . "' where id='" . $id . "'");

        $output = array("code" => "200", "msg" => "updated");
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

}

function add_discovery_Section()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $section_name = htmlspecialchars(strip_tags($event_json['section_name'], ENT_QUOTES));

        $qrry_1 = "insert into discover_section(section_name)values(";
        $qrry_1 .= "'" . $section_name . "'";
        $qrry_1 .= ")";
        if (mysqli_query($conn, $qrry_1)) {


            $array_out = array();
            $array_out[] =
                //array("code" => "200");
                array(
                    "response" => "follow successful");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            //echo mysqli_error();
            $array_out = array();

            $array_out[] =
                array(
                    "response" => "problem in signup");

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function delete_discovery_Section()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));

        mysqli_query($conn, "update videos set section='' where section ='" . $id . "'  ");
        $qrry_1 = mysqli_query($conn, "Delete from discover_section where id ='" . $id . "'  ");
        if ($qrry_1) {

            $array_out = array();
            $array_out[] =
                //array("code" => "200");
                array(
                    "response" => "follow successful");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            //echo mysqli_error();
            $array_out = array();

            $array_out[] =
                array(
                    "response" => "problem in signup");

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function deleteSection()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (STATUS == "demo") {
        die();
    }

    $name = $event_json['name'];

    @mysqli_query($conn, "update videos set section='0' where section='" . $name . "' ");

    $output = array("code" => "200", "msg" => "deleted");
    print_r(json_encode($output, true));


}

function assignSection()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    $name = $event_json['name'];
    $id = $event_json['id'];

    @mysqli_query($conn, "update videos set section='" . $name . "' where id='" . $id . "' ");

    $output = array("code" => "200", "msg" => "updated");
    print_r(json_encode($output, true));


}

function edit_profile()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    //0= owner  1= company 2= ind mechanic

    // checkTokon();

    if (isset($event_json['fb_id']) && isset($event_json['first_name']) && isset($event_json['last_name']) && isset($event_json['gender']) && isset($event_json['bio'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $first_name = htmlspecialchars(strip_tags($event_json['first_name'], ENT_QUOTES));
        $last_name = htmlspecialchars(strip_tags($event_json['last_name'], ENT_QUOTES));
        $gender = htmlspecialchars(strip_tags($event_json['gender'], ENT_QUOTES));
        $bio = htmlspecialchars(strip_tags($event_json['bio'], ENT_QUOTES));
        $username = htmlspecialchars(strip_tags($event_json['username'], ENT_QUOTES));

        $qrry_1 = "update users SET first_name ='" . $first_name . "' , last_name ='" . $last_name . "', gender ='" . $gender . "' , bio ='" . $bio . "'  WHERE fb_id ='" . $fb_id . "' ";
        if (mysqli_query($conn, $qrry_1)) {
            $array_out = array();

            $qrry_1 = "select * from users WHERE fb_id ='" . $fb_id . "' ";
            $log_in_rs = mysqli_query($conn, $qrry_1);

            if (mysqli_num_rows($log_in_rs)) {


                $rd = mysqli_fetch_object($log_in_rs);

                $array_out = array();

                $array_out[] =
                    array(
                        "first_name" => $rd->first_name,
                        "username" => $rd - username,
                        "last_name" => $rd->last_name,
                        "gender" => $rd->gender,
                        "bio" => bio
                    );

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            }


        } else {
            $array_out = array();

            $array_out[] =
                array(
                    "response" => "problem in updating");

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }

    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }

}

function checkFollow()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    // checkTokon();
    if (isset($event_json['fb_id']) && isset($event_json['followed_fb_id'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $followed_fb_id = htmlspecialchars(strip_tags($event_json['followed_fb_id'], ENT_QUOTES));
        $sql = "SELECT * FROM `follow_users` WHERE fb_id='$fb_id' && followed_fb_id='$followed_fb_id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $response["isFriend"] = true;
            print_r(json_encode($response), true);
        } else {
            $response["isFriend"] = false;
            print_r(json_encode($response), true);
        }
    } else {
        $response["message"] = "Unauthorized Request";
        print_r(json_encode($response), true);
    }


}

function sentFollowRequest()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    //0= owner  1= company 2= ind mechanic
    //checkTokon();

    if (isset($event_json['fb_id']) && isset($event_json['followed_fb_id']) && isset($event_json['status'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $followed_fb_id = htmlspecialchars(strip_tags($event_json['followed_fb_id'], ENT_QUOTES));
        $status = htmlspecialchars(strip_tags($event_json['status'], ENT_QUOTES));
        if ($status == "1") {
            $sql = "INSERT INTO follow_request(fb_id, followed_fb_id) VALUES ('$fb_id','$followed_fb_id')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $response["success"] = true;
                print_r(json_encode($response), true);
            } else {
                $response["success"] = false;
                print_r(json_encode($response), true);
            }
        } else if ($status == "0") {
            $sql = "DELETE FROM `follow_request` WHERE fb_id='$fb_id' && followed_fb_id='$followed_fb_id'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                $response["success"] = true;
                print_r(json_encode($response), true);
            } else {
                $response["success"] = false;
                print_r(json_encode($response), true);
            }
        }


    } else {
        $response["message"] = "Unauthorized Request";
        print_r(json_encode($response), true);
    }

}

function follow_users()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    //0= owner  1= company 2= ind mechanic

    // checkTokon();

    if (isset($event_json['fb_id']) && isset($event_json['followed_fb_id']) && isset($event_json['status'])) {
        $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
        $followed_fb_id = htmlspecialchars(strip_tags($event_json['followed_fb_id'], ENT_QUOTES));
        $status = htmlspecialchars(strip_tags($event_json['status'], ENT_QUOTES));

        if ($status == "0") {
            mysqli_query($conn, "Delete from follow_users where fb_id ='" . $fb_id . "' and followed_fb_id='" . $followed_fb_id . "'  ");

            $array_out = array();
            $array_out[] =
                //array("code" => "200");
                array(
                    "response" => "unfollow");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else {
            $qrry_1 = "insert into follow_users(fb_id,followed_fb_id)values(";
            $qrry_1 .= "'" . $fb_id . "',";
            $qrry_1 .= "'" . $followed_fb_id . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {


                $array_out = array();
                $array_out[] =
                    //array("code" => "200");
                    array(
                        "response" => "follow successful");

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));


                $qrry_2 = "insert into notification(my_fb_id,effected_fb_id,type,value)values(";
                $qrry_2 .= "'" . $fb_id . "',";
                $qrry_2 .= "'" . $followed_fb_id . "',";
                $qrry_2 .= "'following_you',";
                $qrry_2 .= "''";
                $qrry_2 .= ")";
                mysqli_query($conn, $qrry_2);
                $query1 = mysqli_query($conn, "select * from users where fb_id='" . $fb_id . "' ");
                $rd = mysqli_fetch_object($query1);

                $query11 = mysqli_query($conn, "select * from users where fb_id='" . $followed_fb_id . "' ");
                $rd1 = mysqli_fetch_object($query11);

                $title = "You Go Follower";
                $message = $rd->first_name . " Followed Your";

                $notification['to'] = $rd1->tokon;
                $notification['notification']['title'] = $title;
                $notification['notification']['body'] = $message;
                // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
                $notification['notification']['badge'] = "1";
                $notification['notification']['sound'] = "default";
                $notification['notification']['icon'] = "";
                $notification['notification']['image'] = "";
                $notification['notification']['action_type'] = "follow";
                $notification['notification']['tag'] = $fb_id;


                $notification['data']['title'] = $title;
                $notification['data']['body'] = $message;
                $notification['data']['senderid'] = $fb_id;
                $notification['data']['receiverid'] = $followed_fb_id;
                $notification['data']['action_type'] = "follow";
                $notification['data']['tag'] = $fb_id;
                $notification['notification']['data'] = "";
                sendPushNotificationToMobileDevice(json_encode($notification));

            } else {
                //echo mysqli_error();
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem in signup");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
        }


    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


//admin panel services

function Admin_Login()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    //0= owner  1= company 2= ind mechanic

    if (isset($event_json['email']) && isset($event_json['password'])) {
        $email = htmlspecialchars(strip_tags($event_json['email'], ENT_QUOTES));
        $password = strip_tags($event_json['password']);


        $log_in = "select * from admin where email='" . $email . "' and pass='" . md5($password) . "' ";
        $log_in_rs = mysqli_query($conn, $log_in);

        if (mysqli_num_rows($log_in_rs)) {
            $admin = mysqli_fetch_assoc($log_in_rs);
            $key = "buggee_jwt_key";
            $time = time();
            $payload = array(
                "iss" => "buggeeapp",
                "aud" => "admin",
                "iat" => $time,
                "nbf" => $time,
                "exp" => $time + 3600
            );
            $jwt = JWT::encode($payload, $key, "HS512");
            $output = array("code" => "200", "token" => $jwt);
            print_r(json_encode($output, true));
        } else {

            $array_out = array();

            $array_out[] =
                array(
                    "response" => "Error in login");

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }


    } else {
        $array_out = array();

        $array_out[] =
            array(
                "response" => "Json Parem are missing");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}


function All_Users()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        $query = mysqli_query($conn, "select * from users order by id DESC");
        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $array_out[] =
                array(
                    "fb_id" => $row['fb_id'],
                    "username" => utf8_encode($row['username']),
                    "first_name" => utf8_encode($row['first_name']),
                    "last_name" => utf8_encode($row['last_name']),
                    "gender" => $row['gender'],
                    "profile_pic" => $row['profile_pic'],
                    "block" => $row['block'],
                    "version" => $row['version'],
                    "device" => $row['device'],
                    "signup_type" => $row['signup_type'],
                    "dob" => $row['dob'],
                    "account_type" => $row['account_type'],
                    "message_privacy" => $row['message_privacy'],
                    "comment_privacy" => $row['comment_privacy'],
                    "live_privacy" => $row['live_privacy'],
                    "verified" => $row['verified'],
                    "page_have" => $row['page_have'],
                    "id_as_page" => $row['id_as_page'],
                    "created" => $row['created'],

                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }


}


function admin_all_sounds()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        $query = mysqli_query($conn, "select * from sound order by id DESC");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $array_out[] =
                array(
                    "id" => $row['id'],
                    "sound_name" => $row['sound_name'],
                    "description" => $row['description'],
                    "thum" => checkVideoUrl($row['thum']),
                    "section" => $row['section'],
                    "created" => $row['created']

                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

}

function admin_uploadSound()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    //0= owner  1= company 2= ind mechanic
    if (checkAdminToken()) {
        $fileUrl = $event_json['fileUrl'];
        if (isset($fileUrl)) {

            $sound_name = htmlspecialchars(strip_tags($event_json['sound_name'], ENT_QUOTES));
            $description = htmlspecialchars(strip_tags($event_json['description'], ENT_QUOTES));
            $section_id = htmlspecialchars(strip_tags($event_json['section_id'], ENT_QUOTES));
            $thum = $event_json["thum"];
            $fileName = rand();

            $thumPath = "upload/audio/" . $fileName . ".jpg";


            $qrry_1 = "insert into sound(sound_name,description,section,thum)values(";
            $qrry_1 .= "'" . $sound_name . "',";
            $qrry_1 .= "'" . $description . "',";
            $qrry_1 .= "'" . $section_id . "',";
            $qrry_1 .= "'" . $thumPath . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {
                $insert_id = mysqli_insert_id($conn);
                $thum = base64_decode($thum);
                $fileUrl = base64_decode($fileUrl);
                $thum_path = "upload/audio/" . $fileName . ".jpg";
                $audio_path = "upload/audio/' . $insert_id . '.aac";
                file_put_contents($thum_path, $thum);
                file_put_contents($audio_path, $fileUrl);
                $thumS3 = uploadS3($thum_path, "thum", $fileName);
                $audioS3 = uploadS3($audio_path, "audio", $insert_id);
                unlink($thum_path);
                unlink($audio_path);
                $sql = "UPDATE sound SET thum='$thumS3',file_path='$audioS3' WHERE id='$insert_id'";
                mysqli_query($conn, $sql);
                $array_out = array();
                $array_out[] =
                    //array("code" => "200");
                    array(
                        "response" => "successful");

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                //echo mysqli_error();
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem in signup");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }


        } else {
            $array_out = array();

            $array_out[] =
                array(
                    "response" => "Json Parem are missing");

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function admin_getSoundSection()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        $query = mysqli_query($conn, "select * from sound_section");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $array_out[] =
                array(
                    "id" => $row['id'],
                    "section_name" => $row['section_name'],
                    "created" => $row['created']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function admin_show_allVideos()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $query = mysqli_query($conn, "select * from videos order by id DESC");

        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $rd = mysqli_fetch_object($query1);

            $query112 = mysqli_query($conn, "select * from sound where id='" . $row['sound_id'] . "' ");
            $rd12 = mysqli_fetch_object($query112);

            $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' ");
            $countLikes_count = mysqli_fetch_assoc($countLikes);

            $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['id'] . "' ");
            $countcomment_count = mysqli_fetch_assoc($countcomment);


            $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' and fb_id='" . $row['fb_id'] . "' ");
            $liked_count = mysqli_fetch_assoc($liked);

            $array_out[] =
                array(
                    "id" => $row['id'],
                    "fb_id" => $row['fb_id'],
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "username" => $rd->username,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic
                    ),
                    "count" => array
                    (
                        "like_count" => $countLikes_count['count'],
                        "video_comment_count" => $countcomment_count['count']
                    ),
                    "liked" => $liked_count['count'],
                    "video" => checkVideoUrl($row['video']),
                    "thum" => checkVideoUrl($row['thum']),
                    "gif" => checkVideoUrl($row['gif']),
                    "section" => $row['section'],
                    "sound" => array
                    (
                        "id" => $rd12->id,
                        "audio_path" =>
                            array(
                                "mp3" => $API_path . "/upload/audio/" . $rd12->id . ".mp3",
                                "acc" => $API_path . "/upload/audio/" . $rd12->id . ".aac"
                            ),
                        "sound_name" => $rd12->sound_name,
                        "description" => $rd12->description,
                        "thum" => $rd12->thum,
                        "section" => $rd12->section,
                        "created" => $rd12->created,
                    ),
                    "created" => $row['created']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function get_user_data()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
//    if (checkAdminToken()) {
    $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
    $query = mysqli_query($conn, "select * from users where fb_id='" . $fb_id . "' ");

    $array_out = array();
    while ($row = mysqli_fetch_array($query)) {

        $array_out[] =
            array(
                "fb_id" => $row['fb_id'],
                "username" => $row['username'],
                "first_name" => $row['first_name'],

                "last_name" => $row['last_name'],
                "gender" => $row['gender'],
                "bio" => $row['bio'],
                "page_have" => $row['page_have'],
                "id_as_page" => $row['id_as_page'],
                "profile_pic" => $row['profile_pic'],
                "created" => $row['created']
            );

    }
    $output = array("code" => "200", "msg" => $array_out);
    print_r(json_encode($output, true));
//    } else {
//        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
//        print_r(json_encode($output, true));
//    }

}

function adminChangePassword()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);

    //print_r($event_json);
    if (checkAdminToken()) {
        if (isset($event_json['new_password']) && isset($event_json['old_password'])) {
            $old_password = strip_tags($event_json['old_password']);
            $new_password = strip_tags($event_json['new_password']);

            if (STATUS == "demo") {
                die();
            }

            $qrry_1 = "select * from admin where pass ='" . md5($old_password) . "' ";
            $log_in_rs = mysqli_query($conn, $qrry_1);
            $rd = mysqli_fetch_object($log_in_rs);

            if ($rd->id != "") {
                $qrry_1 = "update admin SET pass ='" . md5($new_password) . "' where id='" . $rd->id . "'  ";
                if (mysqli_query($conn, $qrry_1)) {
                    $array_out = array();

                    $array_out[] =
                        array(
                            "response" => "success");

                    $output = array("code" => "200", "msg" => $array_out);
                    print_r(json_encode($output, true));
                } else {
                    $array_out = array();

                    $array_out[] =
                        array(
                            "response" => "problem in updating");

                    $output = array("code" => "201", "msg" => $array_out);
                    print_r(json_encode($output, true));
                }
            } else {
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "problem in updating");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }


        } else {
            $array_out = array();

            $array_out[] =
                array(
                    "response" => "Json Parem are missing");

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

}


function DeleteSound()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        if (isset($event_json['id'])) {
            $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));

            mysqli_query($conn, "Delete from sound where id ='" . $id . "' ");
            mysqli_query($conn, "Delete from fav_sound where sound_id ='" . $id . "' ");
            mysqli_query($conn, "update videos set sound_id='0' where sound_id ='" . $id . "' ");

            $array_out = array();

            $array_out[] =
                array(
                    "response" => "video unlike");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));

        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "json parem missing"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function DeleteVideo()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        if (isset($event_json['id'])) {
            $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));

            $qrry_1 = "select * from videos where id ='" . $id . "' ";
            $log_in_rs = mysqli_query($conn, $qrry_1);
            $rd = mysqli_fetch_object($log_in_rs);

            $videoPath = $rd->video;
            $thumPath = $rd->thum;
            $gifPath = $rd->gif;

            @unlink($videoPath);
            @unlink($thumPath);
            @unlink($gifPath);


            mysqli_query($conn, "Delete from videos where id ='" . $id . "' ");
            mysqli_query($conn, "Delete from video_like_dislike where video_id ='" . $id . "' ");
            mysqli_query($conn, "Delete from video_comment where video_id ='" . $id . "' ");


            $array_out = array();

            $array_out[] =
                array(
                    "response" => "video unlike");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));

        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "json parem missing"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function admin_addSection()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json['name']);
    if (checkAdminToken()) {
        $name = $event_json['name'];
        if (isset($name)) {
            $qrry_1 = "insert into sound_section(section_name)values(";
            $qrry_1 .= "'" . $name . "'";
            $qrry_1 .= ")";
            if (mysqli_query($conn, $qrry_1)) {
                $array_out = array();
                $array_out[] =
                    array(
                        "response" => "success"
                    );

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));


            } else {

                $array_out = array();
                $array_out[] =
                    array(
                        "response" => "error"
                    );

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }

        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "json parem missing"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function DeleteSoundSection()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        if (isset($event_json['id'])) {
            $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));

            mysqli_query($conn, "Delete from sound_section where id ='" . $id . "' ");
            mysqli_query($conn, "update sound set section='' ");

            $array_out = array();

            $array_out[] =
                array(
                    "response" => "video unlike");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));

        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "json parem missing"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function blockUser()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        if (isset($event_json['user_id'])) {
            $user_id = htmlspecialchars(strip_tags($event_json['user_id'], ENT_QUOTES));
            $block = htmlspecialchars(strip_tags($event_json['block'], ENT_QUOTES));

            mysqli_query($conn, "update users set block='" . $block . "' where fb_id ='" . $user_id . "' ");

            $array_out = array();

            $array_out[] =
                array(
                    "response" => "user blocked");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));

        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "json parem missing"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function getSingleSectionDetails()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        //print_r($event_json);
        $id = strip_tags($event_json['id']);

        $qrry_1 = "select * from sound_section where id ='" . $id . "' ";
        $log_in_rs = mysqli_query($conn, $qrry_1);
        $rd = mysqli_fetch_object($log_in_rs);

        $array_out[] =
            array(
                "id" => $rd->id,
                "section_name" => $rd->section_name,
                "created" => $rd->created
            );


        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

}


function editSoundSection()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        //print_r($event_json);
        $id = strip_tags($event_json['id']);
        $section_name = htmlspecialchars(strip_tags($event_json['section_name'], ENT_QUOTES));

        $qrry_1 = "update sound_section set section_name='" . $section_name . "'  where id ='" . $id . "' ";
        $log_in_rs = mysqli_query($conn, $qrry_1);
        $rd = mysqli_fetch_object($log_in_rs);


        $output = array("code" => "200", "msg" => "updated");
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

}

function addVideointoDiscovry()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        //print_r($event_json);
        $id = strip_tags($event_json['video_id']);
        $section_id = htmlspecialchars(strip_tags($event_json['section_id'], ENT_QUOTES));

        $qrry_1 = "update videos set section='" . $section_id . "'  where id ='" . $id . "' ";
        $log_in_rs = mysqli_query($conn, $qrry_1);
        $rd = mysqli_fetch_object($log_in_rs);


        $output = array("code" => "200", "msg" => "updated");
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function sendPushNotification()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);

    $log_in = "select * from users where fb_id='" . $event_json['receiverid'] . "' ";
    $log_in_rs = mysqli_query($conn, $log_in);
    $rd = mysqli_fetch_object($log_in_rs);

    $tokon = $rd->tokon;
    $title = htmlspecialchars(strip_tags($event_json['title'], ENT_QUOTES));
    $message = htmlspecialchars(strip_tags($event_json['message'], ENT_QUOTES));
    $icon = htmlspecialchars(strip_tags($event_json['icon'], ENT_QUOTES));
    $senderid = htmlspecialchars(strip_tags($event_json['senderid'], ENT_QUOTES));
    $receiverid = htmlspecialchars(strip_tags($event_json['receiverid'], ENT_QUOTES));
    $action_type = htmlspecialchars(strip_tags($event_json['action_type'], ENT_QUOTES));
    $videoId = htmlspecialchars(strip_tags($event_json['videoId'], ENT_QUOTES));


    $notification['to'] = $tokon;
    $notification['notification']['title'] = $title;
    $notification['notification']['body'] = $message;
    // $notification['notification']['text'] = $sender_details['User']['username'].' has sent you a friend request';
    $notification['notification']['badge'] = "1";
    $notification['notification']['sound'] = "default";
    $notification['notification']['icon'] = "";
    $notification['notification']['image'] = "";
    $notification['notification']['type'] = "";

    $notification['data']['title'] = $title;
    $notification['data']['body'] = $message;
    $notification['data']['icon'] = $icon;
    $notification['data']['senderid'] = $senderid;
    $notification['data']['videoId'] = $videoId;
    $notification['data']['receiverid'] = $receiverid;
    $notification['data']['action_type'] = $action_type;

    sendPushNotificationToMobileDevice(json_encode($notification));
}

function getNotifications()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);

    $fb_id = $event_json['fb_id'];

    $query = mysqli_query($conn, "select * from notification where effected_fb_id='$fb_id' ORDER BY created DESC");

    $array_out = array();
    while ($row = mysqli_fetch_array($query)) {
        $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['my_fb_id'] . "' ");
        $rd = mysqli_fetch_object($query1);

        //get video data
        $query11 = mysqli_query($conn, "select * from videos where id='" . $row['value'] . "' ");
        if ($query11->num_rows > 0) {
            $rd1 = mysqli_fetch_object($query11);
            $array_out[] =
                array(
                    "fb_id" => $row['my_fb_id'],
                    "fb_id_details" => array(
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => $rd->username,
                    ),

                    "effected_fb_id" => $row['effected_fb_id'],
                    "type" => $row['type'],
                    "value" => $row['value'],
                    "value_data" => array(
                        "id" => $rd1->id,
                        "video" => checkVideoUrl($rd1->video),
                        "thum" => checkVideoUrl($rd1->thum),
                        "gif" => checkVideoUrl($rd1->gif)
                    ),
                    "created" => $row['created']

                );
        } else {
            $array_out[] =
                array(
                    "fb_id" => $row['my_fb_id'],
                    "fb_id_details" => array(
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => $rd->username,
                    ),

                    "effected_fb_id" => $row['effected_fb_id'],
                    "type" => $row['type'],
                    "value" => $row['value'],
                    "created" => $row['created']

                );
        }


    }

    $output = array("code" => "200", "msg" => $array_out);
    print_r(json_encode($output, true));
}

function checkTokon()
{
    include("config.php");

    //get headers
    $headers = apache_request_headers();
    // print_r($headers);
    // echo "123";

    $header_device = $headers['Device'];
    $header_version = $headers['Version'];
    $header_tokon = $headers['Tokon'];
    $header_deviceid = $headers['Deviceid'];
    $header_fb_id = $headers['Fb-Id'];
    //get headers


    $get_device_tkon = "select * from device_tokon where fb_id='" . $header_fb_id . "' and tokon='" . $header_tokon . "'";
    $get_device_tkon1 = mysqli_query($conn, $get_device_tkon);
    $countRows = mysqli_num_rows($get_device_tkon1);

// 		$query1=mysqli_query($conn,"select * from device_tokon where fb_id='".$header_fb_id."' and tokon='".$header_tokon."' and phone_id='".$header_deviceid."' ");
// 	    $rd=mysqli_fetch_object($query1);

    //print_r($conn);

    //$rd->id;

    if ($countRows == "" || $countRows == "0") {
        $output = array("code" => "400", "msg" => "tokon mismatch");
        print_r(json_encode($output, true));
        die();
    }
}


function search()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    $type = htmlspecialchars(strip_tags($event_json['type'], ENT_QUOTES));
    $keyword = htmlspecialchars(strip_tags($event_json['keyword'], ENT_QUOTES));

    if ($type == "video") {
        $query = mysqli_query($conn, "select * from videos where description like '%" . $keyword . "%' order by rand() ");
        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {

            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row['fb_id'] . "' ");
            $rd = mysqli_fetch_object($query1);

            $query112 = mysqli_query($conn, "select * from sound where id='" . $row['sound_id'] . "' ");
            $rd12 = mysqli_fetch_object($query112);

            $countLikes = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' ");
            $countLikes_count = mysqli_fetch_assoc($countLikes);

            $countcomment = mysqli_query($conn, "SELECT count(*) as count from video_comment where video_id='" . $row['id'] . "' ");
            $countcomment_count = mysqli_fetch_assoc($countcomment);


            $liked = mysqli_query($conn, "SELECT count(*) as count from video_like_dislike where video_id='" . $row['id'] . "' and fb_id='" . $fb_id . "' ");
            $liked_count = mysqli_fetch_assoc($liked);

            $array_out[] =
                array(
                    "id" => $row['id'],
                    "fb_id" => $row['fb_id'],
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => $rd->username,
                    ),
                    "count" => array
                    (
                        "like_count" => $countLikes_count['count'],
                        "video_comment_count" => $countcomment_count['count'],
                        "view" => $row['view'],
                    ),
                    "liked" => $liked_count['count'],
                    "video" => checkVideoUrl($row['video']),
                    "thum" => checkVideoUrl($row['thum']),
                    "gif" => checkVideoUrl($row['gif']),
                    "description" => $row['description'],
                    "sound" => array
                    (
                        "id" => $rd12->id,
                        "audio_path" =>
                            array(
                                "mp3" => $API_path . "/upload/audio/" . $rd12->id . ".mp3",
                                "acc" => $API_path . "/upload/audio/" . $rd12->id . ".aac"
                            ),
                        "sound_name" => $rd12->sound_name,
                        "description" => $rd12->description,
                        "thum" => $rd12->thum,
                        "section" => $rd12->section,
                        "created" => $rd12->created,
                    ),
                    "created" => $row['created']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else
        if ($type == "users") {
            $query = mysqli_query($conn, "select * from users where first_name like '%" . $keyword . "%' or last_name like '%" . $keyword . "%' or username like '%" . $keyword . "%'   ");
            $array_out = array();
            while ($row = mysqli_fetch_array($query)) {
                $query1 = mysqli_query($conn, "select * from videos where fb_id='" . $row['fb_id'] . "' ");
                $videoCount = mysqli_num_rows($query1);

                $array_out[] =
                    array(
                        "fb_id" => $row['fb_id'],
                        "username" => utf8_encode($row['username']),
                        "first_name" => utf8_encode($row['first_name']),
                        "last_name" => utf8_encode($row['last_name']),
                        "gender" => $row['gender'],
                        "profile_pic" => $row['profile_pic'],
                        "block" => $row['block'],
                        "version" => $row['version'],
                        "device" => $row['device'],
                        "signup_type" => $row['signup_type'],
                        "created" => $row['created'],
                        "videos" => $videoCount,
                        "account_type" => $row['account_type'],
                        "message_privacy" => $row['message_privacy'],
                        "comment_privacy" => $row['comment_privacy'],
                        "verified" => $row['verified'],
                        "live_privacy" => $row['live_privacy']

                    );

            }
            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));
        } else
            if ($type == "sound") {
                $query1 = mysqli_query($conn, "select * from sound where sound_name like '%" . $keyword . "%' or description like '%" . $keyword . "%' ");
                $array_out1 = array();
                while ($row1 = mysqli_fetch_array($query1)) {
                    $qrry = "select * from fav_sound WHERE fb_id='" . $fb_id . "' and sound_id ='" . $row1['id'] . "' ";
                    $log_in_rs = mysqli_query($conn, $qrry);
                    $CountFav = mysqli_num_rows($log_in_rs);
                    if ($CountFav == "") {
                        $CountFav = "0";
                    }

                    $array_out1[] =
                        array(
                            "id" => $row1['id'],

                            "audio_path" =>
                                array(
                                    "mp3" => $API_path . "/upload/audio/" . $row1['id'] . ".mp3",
                                    "acc" => $API_path . "/upload/audio/" . $row1['id'] . ".aac"
                                ),
                            "sound_name" => $row1['sound_name'],
                            "description" => $row1['description'],
                            "section" => $row1['section'],
                            "thum" => $row1['thum'],
                            "created" => $row1['created'],
                            "fav" => $CountFav
                        );
                }


                $output = array("code" => "200", "msg" => $array_out1);
                print_r(json_encode($output, true));
            }

}

function allProfileVerification()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);

    if (checkAdminToken()) {
        $query1 = mysqli_query($conn, "select * from verification_request ");
        $array_out1 = array();
        while ($row1 = mysqli_fetch_array($query1)) {
            $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row1['fb_id'] . "' ");
            $rd = mysqli_fetch_object($query1);

            $array_out1[] =
                array(
                    "id" => $row1['id'],
                    "fb_id" => $row1['fb_id'],
                    "user_info" => array
                    (
                        "first_name" => $rd->first_name,
                        "last_name" => $rd->last_name,
                        "profile_pic" => $rd->profile_pic,
                        "username" => "@" . $rd->username,
                        "verified" => $rd->verified,
                    ),
                    "attachment" => $row1['attachment'],
                    "created" => $row1['created']
                );
        }


        $output = array("code" => "200", "msg" => $array_out1);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function updateVerificationStatus()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));
        $action = htmlspecialchars(strip_tags($event_json['action'], ENT_QUOTES));

        if ($action == "approve") {
            $qrry_1 = "update users SET verified ='1' WHERE fb_id ='" . $id . "' ";
            if (mysqli_query($conn, $qrry_1)) {
                mysqli_query($conn, "Delete from verification_request where fb_id ='" . $id . "' ");
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "success");

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            } else {
                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "error");

                $output = array("code" => "201", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
        } else
            if ($action == "decline") {
                mysqli_query($conn, "Delete from verification_request where fb_id ='" . $id . "' ");

                $array_out = array();

                $array_out[] =
                    array(
                        "response" => "request rejected and deleted");

                $output = array("code" => "200", "msg" => $array_out);
                print_r(json_encode($output, true));
            }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }

}


function getVerified()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    $fb_id = htmlspecialchars(strip_tags($event_json['fb_id'], ENT_QUOTES));
    $type = htmlspecialchars(strip_tags($event_json['type'], ENT_QUOTES));
    $attachment = htmlspecialchars(strip_tags($event_json['attachment'], ENT_QUOTES));

    $qrry_1 = "insert into verification_request(fb_id,type,attachment)values(";
    $qrry_1 .= "'" . $fb_id . "',";
    $qrry_1 .= "'" . $type . "',";
    $qrry_1 .= "'" . $attachment . "'";
    $qrry_1 .= ")";
    if (mysqli_query($conn, $qrry_1)) {


        $array_out = array();
        $array_out[] =
            //array("code" => "200");
            array(
                "response" => "successful");

        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        //echo mysqli_error();
        $array_out = array();

        $array_out[] =
            array(
                "response" => "problem");

        $output = array("code" => "201", "msg" => $array_out);
        print_r(json_encode($output, true));
    }
}

function deleteUser()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));
        if (isset($id)) {
            $sql = "DELETE FROM users WHERE fb_id='$id'";
            if (mysqli_query($conn, $sql)) {
                $response["success"] = true;
            } else {
                $response["success"] = false;
            }
            print_r(json_encode($response, true));
        } else {
            $response["success"] = false;
            $response["message"] = "Params Missing";
            print_r(json_encode($response, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function editUser()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));
        $username = htmlspecialchars(strip_tags($event_json['username'], ENT_QUOTES));
        $first_name = htmlspecialchars(strip_tags($event_json['first_name'], ENT_QUOTES));
        $last_name = htmlspecialchars(strip_tags($event_json['last_name'], ENT_QUOTES));
        $gender = htmlspecialchars(strip_tags($event_json['gender'], ENT_QUOTES));
        $bio = htmlspecialchars(strip_tags($event_json['bio'], ENT_QUOTES));
        $dob = htmlspecialchars(strip_tags($event_json['dob'], ENT_QUOTES));
        $account_type = htmlspecialchars(strip_tags($event_json['account_type'], ENT_QUOTES));
        $message_privacy = htmlspecialchars(strip_tags($event_json['message_privacy'], ENT_QUOTES));
        $comment_privacy = htmlspecialchars(strip_tags($event_json['comment_privacy'], ENT_QUOTES));
        $live_privacy = htmlspecialchars(strip_tags($event_json['live_privacy'], ENT_QUOTES));
        $verified = htmlspecialchars(strip_tags($event_json['verified'], ENT_QUOTES));
        $page_have = htmlspecialchars(strip_tags($event_json['page_have'], ENT_QUOTES));


        if (isset($id)) {
            $sql = "UPDATE users SET username='$username',first_name='$first_name',last_name='$last_name',gender='$gender',bio='$bio',dob='$dob',account_type='$account_type',message_privacy='$message_privacy',comment_privacy='$comment_privacy',live_privacy='$live_privacy',verified='$verified',page_have='$page_have' WHERE fb_id='$id'";
            if (mysqli_query($conn, $sql)) {
                $response["success"] = true;
            } else {
                $response["success"] = false;
            }
            print_r(json_encode($response, true));
        } else {
            $response["success"] = false;
            $response["message"] = "Params Missing";
            print_r(json_encode($response, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function getCommentsByVideo()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    $video_id = htmlspecialchars(strip_tags($event_json['video_id'], ENT_QUOTES));
    if (checkAdminToken()) {

        if (isset($video_id)) {

            $sql = "SELECT * FROM video_comment WHERE video_id='$video_id'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row1 = mysqli_fetch_array($result)) {
                    $query1 = mysqli_query($conn, "select * from users where fb_id='" . $row1['fb_id'] . "' ");
                    $rd = mysqli_fetch_object($query1);
                    $array_out1[] =
                        array(
                            "comment_id" => $row1['id'],
                            "user_id" => $row1['fb_id'],
                            "user_info" => array
                            (
                                "first_name" => $rd->first_name,
                                "last_name" => $rd->last_name,
                                "profile_pic" => $rd->profile_pic,
                                "username" => $rd->username,
                                "verified" => $rd->verified,
                            ),
                            "comments" => $row1['comments'],
                            "created" => $row1['created']
                        );
                }
                $output = array("code" => "200", "msg" => $array_out1);
            } else {
                $output = array("code" => "404", "msg" => "No Comment Found");
            }
            print_r(json_encode($output, true));
        } else {
            $output = array("code" => "404", "msg" => "Params Missing");
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function deleteComment()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['comment_id'], ENT_QUOTES));
        if (isset($id)) {
            $sql = "DELETE FROM video_comment WHERE id='$id'";
            if (mysqli_query($conn, $sql)) {
                $response["success"] = true;
            } else {
                $response["success"] = false;
            }
            print_r(json_encode($response, true));
        } else {
            $response["success"] = false;
            $response["message"] = "Params Missing";
            print_r(json_encode($response, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function getAllPage()
{

    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        $query = mysqli_query($conn, "SELECT * FROM pages order by id DESC");
        $array_out = array();
        while ($row = mysqli_fetch_array($query)) {
            $array_out[] =
                array(
                    "id" => $row['id'],
                    "owner_id" => $row['owner_id'],
                    "profile_pic" => checkVideoUrl($row['profile_pic']),
                    "name" => $row['name'],
                    "created" => $row['created'],
                    "block" => $row['block'],
                    "description" => $row['description']
                );

        }
        $output = array("code" => "200", "msg" => $array_out);
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function deletePage()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        $id = htmlspecialchars(strip_tags($event_json['id'], ENT_QUOTES));
        if (isset($id)) {


            $sql_get = "SELECT * FROM pages WHERE id='$id'";
            $result_get = mysqli_query($conn, $sql_get);
            $data = mysqli_fetch_object($result_get);
            $sql_del = "DELETE FROM pages WHERE id='$id'";
            if (mysqli_query($conn, $sql_del)) {
                $sql_update = "UPDATE users SET page_have=0 WHERE fb_id='$data->owner_id'";
                if (mysqli_query($conn, $sql_update)) {
                    $response["success"] = true;
                } else {
                    $response["success"] = false;
                }
            } else {
                $response["success"] = false;
            }
            print_r(json_encode($response, true));
        } else {
            $response["success"] = false;
            $response["message"] = "Params Missing";
            print_r(json_encode($response, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function blockPage()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    //print_r($event_json);
    if (checkAdminToken()) {
        if (isset($event_json['page_id'])) {
            $page_id = htmlspecialchars(strip_tags($event_json['page_id'], ENT_QUOTES));
            $block = htmlspecialchars(strip_tags($event_json['block'], ENT_QUOTES));

            mysqli_query($conn, "update pages set block='" . $block . "' where id ='" . $page_id . "' ");

            $array_out = array();

            $array_out[] =
                array(
                    "response" => "page blocked");

            $output = array("code" => "200", "msg" => $array_out);
            print_r(json_encode($output, true));

        } else {
            $array_out = array();
            $array_out[] =
                array(
                    "response" => "json parem missing"
                );

            $output = array("code" => "201", "msg" => $array_out);
            print_r(json_encode($output, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function turnOnOffLive()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        $status = htmlspecialchars(strip_tags($event_json['status'], ENT_QUOTES));
        if (isset($status)) {
            $sql = "UPDATE live_off_on SET status='$status' WHERE id=0";
            if (mysqli_query($conn, $sql)) {
                $response["success"] = true;
            } else {
                $response["success"] = false;
            }
            print_r(json_encode($response, true));
        } else {
            $response["success"] = false;
            $response["message"] = "Params Missing";
            print_r(json_encode($response, true));
        }
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}

function viewReport()
{
    require_once("config.php");
    $input = @file_get_contents("php://input");
    $event_json = json_decode($input, true);
    if (checkAdminToken()) {
        $type = htmlspecialchars(strip_tags($event_json['type'], ENT_QUOTES));
        if (isset($type)) {
            $sql = "SELECT * FROM report WHERE type = '$type'";
            $sql = "SELECT * FROM report WHERE type = '$type'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $array_out[] = array(
                        "id" => $row["id"],
                        "content_id" => $row["content_id"],
                        "reported_by" => $row["reported_by"],
                        "created" => $row["created"],
                        "type" => $row["type"]
                    );
                }
                $output = array("code" => "200", "msg" => $array_out);
            } else {
                $output = array("code" => "400", "msg" => "No report found");
            }


        } else {
            $output = array("code" => "401", "msg" => "Params Missing!");
        }
        print_r(json_encode($output, true));
    } else {
        $output = array("code" => "500", "msg" => "Token Expired/Invalid");
        print_r(json_encode($output, true));
    }
}


function checkAdminToken()
{
    try {
        require_once("config.php");
        $input = @file_get_contents("php://input");
        $key = "buggee_jwt_key";
        $headers = apache_request_headers();
        $jwt = $headers['Token'];
        $decoded = JWT::decode($jwt, $key, array('HS512'));
        if ($decoded->iss == "buggeeapp") {
            return true;
        } else {
            return false;
        }
    } catch (Exception $e) {
        return false;
    }
}

////


?>

