<?php
require ($_SERVER ['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/mainpage.php");
require ($_SERVER ["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
 
global $USER;
if (CModule::IncludeModule ( "iblock" )) {
    $elId = intval ( $_REQUEST ["elid"] ); //ИД элемента
    $action = trim ( $_REQUEST ["act"] );  //действие
    $userId = $USER->GetID ();             // ИД текущего пользователя
    $dbEl = CIBlockElement::GetList ( Array (), Array ("ID" => $elId, "IBLOCK_ID" => "13" ) );
    if ($obEl = $dbEl->GetNextElement () AND !empty($userId)) {
        $props = $obEl->GetProperties ();
        $UserList = array_unique($props["F_USER"]["VALUE"]); // получаем список "подписанных" пользователей на всякий случай убираем дублирующиеся записи
        if($action == "del"){                                // если нужно удалить из избранного
            if(in_array($userId, $UserList))
            {
                $key = array_search($userId, $UserList);
                unset($UserList[$key]);
                CIBlockElement::SetPropertyValueCode ($elId, "F_USER", $UserList);
                echo "Добавить в избранное"; //удален
            }
            else {
                echo "Товар уже не в избранном";
            }
        }
        elseif($action == "add"){                  // если нужно добавить в избранное
            if(!in_array($userId, $UserList))
            {
                $UserList[] = $userId;
                CIBlockElement::SetPropertyValueCode ($elId, "F_USER", $UserList);
                echo "Удалить из избранного";  //добавлен
            }
            else {
                echo "Товар уже в избранном";
            }
        }
        else{
            echo "Некорректный запрос";
        }
    }
    else{
        echo "Ваш запрос некорректен";
    }
}?>