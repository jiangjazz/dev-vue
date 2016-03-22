<?php
    /*echo '1231';
    exit;*/
    //var_dump($_FILES['file']);
    $arr = array (
        '0'=>array('name'=> 'User', 'starttime'=> '2014-09-16 00:00', 'src'=> 'www.allinone.com', 'act'=> 'disable'),
        '1'=>array('name'=> 'User', 'starttime'=> '2014-09-16 00:00', 'src'=> 'www.allinone.com', 'act'=> 'disable'),
        '2'=>array('name'=> 'User', 'starttime'=> '2014-09-16 00:00', 'src'=> 'www.allinone.com', 'act'=> 'disable'),
        '3'=>array('name'=> 'User', 'starttime'=> '2014-09-16 00:00', 'src'=> 'www.allinone.com', 'act'=> 'disable')
        ,'4'=>array('name'=> 'User', 'starttime'=> '2014-09-16 00:00', 'src'=> 'www.allinone.com', 'act'=> 'disable')
    );

    $result = array('code'=> 0, 'data'=>$arr, 'curPage'=>1, 'pageAll'=> 10);
    echo json_encode($result);
?>