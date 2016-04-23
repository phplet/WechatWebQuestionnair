<?php
/**
 * Created by PhpStorm.
 * User: summe_000
 * Date: 2016/4/23
 * Time: 15:43
 */
function showAllQuestionnaire()
{
    require_once "../dataBaseApi/dataBaseApis.php";

    /*foreach ($_REQUEST as $key => $value ){
        echo "key: " . $key;
        echo "   value: " . $value;
    }*/
    $teacherID = $_REQUEST["teacherID"];
    $questionnaireList = getQuestionnaireByTeacher($teacherID);
    $arrQ = array();
    $arrN = array();
    $arr = array('Questionnaire'=>$arrQ,'Notice'=>$arrN);
    if ($questionnaireList == false)
        echo "No Questionnaire or Notice.<br>";
    else {
        if ($questionnaireList->num_rows > 0) {
            while ($row = $questionnaireList->fetch_assoc()) {
                if($row["questionnaireType"]=="Q") {
                    $tmp = array('title' => $row["title"],
                        'questionnaireID' => $row["questionnaireID"]);
                    array_push($arrQ, $tmp);
                }
                elseif($row["questionnaireType"]=="N") {
                    $tmp = array('title' => $row["title"],
                        'questionnaireID' => $row["questionnaireID"]);
                    array_push($arrN, $tmp);
                }
            }
        }
    }
    $arr["Questionnaire"]=$arrQ;
    $arr["Notice"]=$arrN;
    $jsonencode = json_encode($arr);
    echo "$jsonencode";
    return $jsonencode;
}

//showAllQuestionnaire();
