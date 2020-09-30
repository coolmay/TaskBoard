<?php


class N8NApi {
  public static function httpPost($task, $boardid, $attachmentid)
  {
    $url = 'http://20.44.192.240:5678/webhook/taskboard';
    $postData = array('taskid' => $task['id'],
                      'columnid' => $task['column_id'],
                      'boardid' => $boardid,
                      'attachmentid' => $attachmentid);

 
    $ch = curl_init();  
 
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_POST, count($postData));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    return $output;
 
  }
}
