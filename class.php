<?php
class Beraksi {

function indie($url,$subjek){
    global $y;
    
        $data = "subjek=".$subjek;
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
        curl_setopt($ch, CURLOPT_HEADER, 1);

        $exec = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if($status == 200)
        {
        return "[✔] ➝ Succeed 「".$status."」Spam To ".$y." 「Done」 \n";
        }
        if($status == 0 || $status == 404)
        {
        return "[☠] ➝ Website Down「".$status."」Spam To ".$y." 「Failed」 \n";
        die("Stopping Procces");
        }
        if($status == 502 || $status == 504 || $status == 500)
        {
        return "[✘] ➝ Gateway Timeout 「".$status."」Spam To ".$y."「Failed」 \n";
        die("Stopping Procces");
        }
        if($status == 302 || $status == 301 || $status == 307)
        {
        return "[➡️] ➝ Redirect「".$status."」Spam To ".$y."「Failed」 \n";
        die("Stopping Procces");
        }
        if($status == 100 || $status == 101 || $status == 417 || $status == 505 || $status == 522 || $status == 400)
        {
        return "[✘] ➝ Error 「".$status."」Spam To ".$y."「Failed」 \n";
        die("Stopping Procces");
        }
    }
}
?>
