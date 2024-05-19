<?php

class VigenèreCipher {

    private string $key; 
    private string $alphabet;

    public function __construct(string $key, string $alphabet)
    {
        $this->key = $key;
        $this->alphabet = $alphabet;
    }



    public function encode($mes) {
        $key = $this->key;
        $lenKey = 0;
        $code = '';
        $fromOutside = 0;
        $fullKey = '';

        for( $i=0; $lenKey < strlen($mes) ; $i++, $lenKey++) {
            $i >= strlen($key) ? $i = 0 : "";
            $codeIndex = 0;
            $shiftPos = strpos($this->alphabet, $key[$i]);
            $indexLetterToCode = strpos($this->alphabet, $mes[$lenKey]);
            $codeIndex = $indexLetterToCode + $shiftPos;

            var_dump($indexLetterToCode);

                if ($codeIndex >= strlen($this->alphabet)) {
                 $codeIndex = $codeIndex - strlen($this->alphabet);
                }
                
                $fullKey .= $key[$i];
                if($indexLetterToCode === false){
                    $code .= $mes[$lenKey];
                    $i--;
                    var_dump('pomiń' . ' ' . $key[$i] . ' ' . $lenKey . '->' . $mes[$lenKey]);
                    if($mes[$lenKey] == ' ') {
                        $i += $fromOutside;
                        $fromOutside = 0;
                    } else {
                        $fromOutside ++;
                    }
                } else {
                     $code .= $this->alphabet[$codeIndex];
                }
            }
            
        // if(!$indexLetterToCode){
        //     return $mes;
        // }
            var_dump($fullKey);
        return $code;
    }

    public function decode($mes) {
        $key = $this->key;
        $lenKey = 0;
        $code = '';
        
        for( $i=0; $lenKey < strlen($mes) ; $i++, $lenKey++) {
            $i == strlen($key) ? $i = 0 : "";
            $codeIndex = 0;
            $shiftPos = strpos($this->alphabet, $key[$i]);
            $indexLetterToDeode = strpos($this->alphabet, $mes[$lenKey]);
            $codeIndex = $indexLetterToDeode - $shiftPos;
            
            if ($codeIndex < 0) {
                $codeIndex = $codeIndex + strlen($this->alphabet);
            } 
            
            $code .= $this->alphabet[$codeIndex];
        }
            
        if(!$indexLetterToDeode){
            return $mes;
        }
        
        return $code;
        
    }

}

$c = new VigenèreCipher('password', 'abcdefghijklmnopqrstuvwxyz');

var_dump($c->encode("'it's a shift cipher!"));
