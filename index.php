<?php
$url = "https://test.payu.in/_payment";$req = req_init($url);req_setopt($req, CURLOPT_URL, $url);req_setopt($req, CURLOPT_POST, true); req_setopt($req, CURLOPT_RETURNTRANSFER, true);$headers = array( "Content-Type: application/x-www-form-urlencoded", ); req_setopt($curl, CURLOPT_HTTPHEADER, $headers);$data = "key=JP***g&txnid=1qgMXNpV8oNgXh&amount=10.00&firstname=PayU User&email=test@gmail.com&phone=9876543210&productinfo=iPhone&pg=&bankcode=&surl=https://apiplayground-response.herokuapp.com/&furl=https://apiplayground-response.herokuapp.com/&ccnum=&ccexpmon=&ccexpyr=&ccvv=&ccname=&txn_s2s_flow=&hash=4a3c0eec8cc0bc18617f17ad76a7b2e4ed07bd3532641dba34cbc09935eb704f94887868d93b3d2705646f562ca64c85c5f73a6ef692c8214f6e5c62a5bcde7f"req_setopt($curl, CURLOPT_POSTFIELDS, $data);$resp = req_exec($req);req_close($req);var_dump($resp);
?>
