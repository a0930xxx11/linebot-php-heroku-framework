<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require_once('./LINEBotTiny.php');

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('VI92++JtF1wfInMaIZ1OX0Axv570xKaSXSK4bbdd8+4npD3fnh3eQ7X1hABe+6upum27cZEwED/se2pUhqxfpCnqKLTvjrA72cugwD9LehmXHMIv7DngRvdHNZYUnhBbZujWstjCZ7iRLLor8XG87QdB04t89/1O/w1cDnyilFU=
');

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('network healthy');

$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '584245da1c393666a1585c7d7c6229de']);
$response = $bot->pushMessage('<to>', $textMessageBuilder);

$str = exec("ping -n 1 -w 1 192.168.1.5", $input, $result);
if ($result == 0){
	echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
}else{
echo "off";
}

?>
