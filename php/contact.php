<?php
    require_once ('connect.php');
    if(isset($_POST['btn_submit'])) {
        $secreatKey = '6LdBAOkUAAAAACCOipIeFNcb1GV8IRumO5mpjsk_';
        $response = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secreatKey&response=$response&remoteip=$remoteip";
        $resp = json_decode(file_get_contents($url));
        
        if($resp->success) {
            $sql = " INSERT INTO contact (name, phone, email, detail, create_at) 
                        VALUES ('".$_POST['name']."', '".$_POST['phone']."', '".$_POST['email']."', '".$_POST['message']."', '".date("Y-m-d")."') ";

            $result = $conn->query($sql) or die($conn->error);
            if($result) {
                sentToLine();
            }
        } else {
            echo '<script> alert("Verification Recaptcha Failed!!!") </script>';
            header('Refresh:0; url=../contact.php');
        }

    } else {
        header('Refresh:0; url=../index.php');
    }
    
    function sentToLine() {
        $text = "มีผู้ติดต่อมาจากเว็บ WebBlog \n";
        $text .= "ชื่อ: ".$_POST['name']."\n";
        $text.= "เบอร์: ".$_POST['phone']."\n";
        $text.= "อีเมลล์: ".$_POST['email']."\n";
        $text.= "ข้อความ: ".$_POST['message'];
        $message = array(
                'message' => $text
        );
        notify_message($message);
    }

    function notify_message($message) {
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"S6jSwocJozlW0t403jfgT5rldECDuu9sfN3hbHzGFbi");
        $queryData = http_build_query($message, '', '&');
        $headerOptions = array(
             'http' => array(
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                        ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                        ."Content-Length: ".strlen($queryData)."\r\n",
                'content'=> $queryData
             )
        );

        $context = stream_context_create($headerOptions);
        $result = file_get_contents(LINE_API,FALSE,$context);
        $resp = json_decode($result);
        if($resp->status == 200) {
            echo '<script> alert("ส่งข้อมูลเรียบร้อยแล้ว") </script>';
            header('Refresh:0; url=../index.php');
        } else {
            echo '<script> alert("ส่งข้อมูลไม่สำนเร็จโปรดติดต่อ....") </script>';
            header('Refresh:0; url=../contact.php');
        }
        echo $resp->status;
    }
?>