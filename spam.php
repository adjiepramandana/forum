<?php
include 'class.php';
$init = new AzThuFan;
echo
" 
▄████████ ███    █▄     ▄████████  ▄█          ▄█   ▄█▄  ▄█   ▄█        ▄█          ▄████████    ▄████████ 
███    ███ ███    ███   ███    ███ ███         ███ ▄███▀ ███  ███       ███         ███    ███   ███    ███ 
███    █▀  ███    ███   ███    ███ ███         ███▐██▀   ███▌ ███       ███         ███    █▀    ███    ███ 
███        ███    ███  ▄███▄▄▄▄██▀ ███        ▄█████▀    ███▌ ███       ███        ▄███▄▄▄      ▄███▄▄▄▄██▀ 
███        ███    ███ ▀▀███▀▀▀▀▀   ███       ▀▀█████▄    ███▌ ███       ███       ▀▀███▀▀▀     ▀▀███▀▀▀▀▀   
███    █▄  ███    ███ ▀███████████ ███         ███▐██▄   ███  ███       ███         ███    █▄  ▀███████████ 
███    ███ ███    ███   ███    ███ ███▌    ▄   ███ ▀███▄ ███  ███▌    ▄ ███▌    ▄   ███    ███   ███    ███ 
████████▀  ████████▀    ███    ███ █████▄▄██   ███   ▀█▀ █▀   █████▄▄██ █████▄▄██   ██████████   ███    ███ 
                        ███    ███ ▀           ▀              ▀         ▀                        ███    ███ 
                            
[+]=====================SPAMMER=========================[+]
      Coder By  : Mr.AzThuFan                
      Facebook : facebook.com/farelazhrii    
      Whatsapp : +62895391837575
      
   'Don't stop when you are tired. Stop when you are done!'
[+]=======================================================[+]                                                                                                   
";
echo "\n";
$z = 0;
sleep(2);
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> Terget Url  -> ";
$url = trim(fgets(STDIN));

echo "╟> Subjek  -> ";
$subjek = trim(fgets(STDIN));

echo "╟> Message  -> ";
$msg = trim(fgets(STDIN));

echo "╟> Amount  -> ";
$batas = trim(fgets(STDIN));
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";
echo "╟> Spam For $url \n";
echo "╟\n";
echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
sleep(2);
echo "╔╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤╤\n";
echo "╟\n";

for($y = 1; $y <= $batas; $y++)
{
    sleep(2);
    echo '╟> '.$init->AzSpam($url,$msg,$subjek);
    sleep(2);
    echo "\n";
    echo "╟\n";
    if($y == $batas){
    echo "╟\n";
    echo "╟> Spam Done ® AzThuFan \n";
    echo "╟\n";
    echo "╚╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧╧\n";
    }
}
?>
