<?php
//Test
function compare_ends($arr) {
        //...wite your code here
        foreach ($arr as $value) {
            if(strlen($value) > 2){
                if($value[0] == $value[strlen($value)-1]){
                	$num++;
                }
            }
        }
        return $num;
    }
 $sourceStrings = array(
            'A very looooooong wooooord A', 
            'Loremia ipsumia dolaria sitia ameti', 
            'Have you ever been to Lituania ?',
            'Anyone who reads Old and Middle',
            'English literary texts will be familiar',
            'with the mid-brown volumes of the EETS,',
            'with the symbol of Alfreds jewel embossed on the front cover.'
        );

echo compare_ends($sourceStrings);
       