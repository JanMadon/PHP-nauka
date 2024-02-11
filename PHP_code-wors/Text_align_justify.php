<?php
/*
Your task in this Kata is to emulate text justification in monospace font. 
You will be given a single-lined text and the expected justification width. The longest word will never be greater than this width.

Here are the rules:

Use spaces to fill in the gaps between words.
Each line should contain as many words as possible.
Use '\n' to separate lines.
Gap between words can't differ by more than one space.
Lines should end with a word not a space.
'\n' is not included in the length of a line.
Large gaps go first, then smaller ones ('Lorem--ipsum--dolor--sit-amet,' (2, 2, 2, 1 spaces)).
Last line should not be justified, use only one space between words.
Last line should not contain '\n'
Strings with one word do not need gaps ('somelongword\n').
*/

require 'vendor/autoload.php';

$faker = Faker\Factory::create();
$text = $faker->text();

$str = "libero velit quia vel porro rerum.";
$len = 15;

function justify($str, $len)
{
  $offset = 0;
  $result = '';
  $continue = true;
  while ($continue) {

    $row = substr($str, $offset, $len);

    if ($str[$offset + $len] == ' ') {
      $offset += ($len + 1);
    } else {
      $rowLen = strrpos($row, ' ');
      $row = substr($row, 0, $rowLen);
      $offset += ($rowLen + 1);
    }
    $row = trim($row);
    $row .= "\n";

    if((strlen($row) <= $len) && (substr_count($row, ' '))) {
      for($i=0; strlen($row) <= $len; $i++) {
        if($row[$i] == ' ') {
          $row = substr_replace($row, ' ', $i, 0);
          $i++;
        }
        if($i == (strlen($row)-1)) {
          $i = 0;
        }
      }
    }
    
    $result .= $row;

    if (($offset + $len) == strlen($str)) {
      $continue = false;
    } elseif (($offset + $len) > strlen($str)){

      $result .=substr($str, $offset);
      $continue = false;  
    }
  }
  return trim($result);
}

var_dump( justify($str, $len) );






// class TestJustify extends TestCase
// {
//     public function testIt() {
//       $this->assertSame("This is\nan\nexample\nrow",justify("This is an example row",7));
//     }
// }