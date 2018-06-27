<?php
class motto{
    #传入一个参数
    function one($style){
        $poetry=file('./database/poetry.db');
        $music=file('./database/music.db');
        $philosophy=file('./database/philosophy.db');
        $mottoall=array_merge($poetry,$music,$philosophy);
        $mottoallcount=count($mottoall);
        $mottoany=$mottoall[mt_rand(0,$mottoallcount)];
        $mottoanyarray=explode('###',$mottoany);
        switch($style){
            case 'text':
            header('content-type:text/plain;charset=utf-8');
            echo $mottoanyarray[0];
            break;
            case 'json':
            header('content-type:application/json;charset=utf-8');
            $json['motto']=$mottoanyarray[0];
            $json['author']=$mottoanyarray[1];
            $json['source']=$mottoanyarray[2];
            echo json_encode($json,JSON_UNESCAPED_UNICODE);
            break;
            default:
            header('content-type:text/xml;charset=utf-8');
            #;
        }
    }

    #传入两个参数
    function two($style,$type){
        switch($style){
            case 'text':
            header('content-type:text/plain;charset=utf-8');
            switch($type){
                case 'poetry':
                #;
                break;
                case 'music':
                #;
                default:
                #;
            }
            break;
            case 'json':
            header('content-type:application/json;charset=utf-8');
            switch($type){
                case 'poetry':
                #;
                break;
                case 'music':
                #;
                default:
                #;
            }
            break;
            default:
            header('content-type:text/xml;charset=utf-8');
            switch($type){
                case 'poetry':
                #;
                break;
                case 'music':
                #;
                default:
                #;
            }
        }
    }
}
?>