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



$arr_file_test = get_headers("http://rd.jtron-tech.com/jessica/login.jsp");
$test = stripos($arr_file_test[0],'ok');
if($test!=''){
   "replyToken": "VI92++JtF1wfInMaIZ1OX0Axv570xKaSXSK4bbdd8+4npD3fnh3eQ7X1hABe+6upum27cZEwED/se2pUhqxfpCnqKLTvjrA72cugwD9LehmXHMIv7DngRvdHNZYUnhBbZujWstjCZ7iRLLor8XG87QdB04t89/1O/w1cDnyilFU=
",
        "type": "message",
        "source": {
             "type": "user",
             "userId": "U5b79d04342c1d382b92ea6359384a272"
         },
         "message": {
             "id": "1551338644",
             "type": "text",
             "text": "Network_Health"
         }
else{
 "replyToken": "VI92++JtF1wfInMaIZ1OX0Axv570xKaSXSK4bbdd8+4npD3fnh3eQ7X1hABe+6upum27cZEwED/se2pUhqxfpCnqKLTvjrA72cugwD9LehmXHMIv7DngRvdHNZYUnhBbZujWstjCZ7iRLLor8XG87QdB04t89/1O/w1cDnyilFU=
",
        "type": "message",
        "source": {
             "type": "user",
             "userId": "U5b79d04342c1d382b92ea6359384a272"
         },
         "message": {
             "id": "1551338644",
             "type": "text",
             "text": "Network_Failure"
}
?>
