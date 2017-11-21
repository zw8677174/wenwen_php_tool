<?php
/**
 * User: zw
 * Date: 11/21/17
 * Time: 2:26 PM
 *
 * This file is a simple tool file by zw8677174 for work.
 *
 * It is simple right now.
 *
 */

class WenWenTool{

    const CONTRIBUTES = array(
        array(
            'name' => 'zongwen',
            'email' => '1085383440@qq.com'
        )
    );


    public function getContributeNames(){
        foreach ( self::CONTRIBUTES as $values){
            echo $values['name'];
        }
    }

}