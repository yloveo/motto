<?php
class MOTTO{

    #--$GET[]传入一个参数"$_GET['style']"
    function MOTTO_ONE($_GET['style'],$CONNECT,$DB_TABLE){
        $SQL_LINES="select count(*) from ".$DB_TABLE;
        
        switch($_GET['style']){
            case 'text':
            header('content-type:text/plain;charset=utf-8');
            echo '';
            break;
            case 'json':
            header('content-type:application/json;charset=utf-8');
            echo '';
            break;
            default:
            header('content-type:text/xml;charset=utf-8');
            echo '';
        }
    }

    #$_GET[]传入两个参数"$_GET['style']"&"$_GET['type']"
    function MOTTO_TWO($_GET['style'],$_GET['type'],$CONNECT,$DB_TABLE){
        switch($_GET['style']){
            case 'text':
            //$_GET['style']=='text'
            header('content-type:text/plain;charset=utf-8');
            switch($_GET['type']){
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                default:
                echo '';
            }
            break;
            case 'json':
            //$_GET['style']=='json'
            header('content-type:application/json;charset=utf-8');
            switch($_GET['type']){
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                default:
                echo '';
            }
            break;
            default:
            //$_GET['style']=='xml'
            header('content-type:text/xml;charset=utf-8');
            switch($_GET['type']){
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                case '':
                echo '';
                break;
                default:
                echo '';
            }
        }
    }
}
?>