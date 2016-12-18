<?php
namespace App\Components;

class ManageContent
{
	static $number_word = 'ข้อที่ ';
	static $ans_word = 'คำตอบที่ถูกต้อง :';
	static $exlode_choice = "cssExChoice";

	static function replaceUrlImage($content)
	{
		$search = "/COE.WH";
		$need = 'http://www.coe.or.th' . $search;
		return str_replace($search, $need, $content);
	}

	static function setContent($contents, $number)
	{
		$all_contents = preg_split('/ข้อที่ [0-9]+ :/', $contents);
        $count = count($all_contents);
        $random_number = RandomNumber::genrandom(1, $count - 1, $number);
        $data = [];
      
        foreach ($all_contents as $key => $content) {
            if ($key != 0 && $key < $count && in_array($key, $random_number)) {
                // if($key == 399){
            // if($key != 0 && $key < $count){
                $content_ans = explode(self::$ans_word, $content);
                $answer = trim($content_ans[1]);
                $data[$key]['answer'] = trim(strip_tags($answer));

                if (strlen($answer) > 1) {
                    $data[$key]['answer'] = substr($answer, 0, 1);
                }
                $seperate = explode(self::$exlode_choice, $content_ans[0]);
                if (preg_match('/<img/', $seperate[0])) {
                    $doc = new \DOMDocument();
                    libxml_use_internal_errors(true);
                    $doc->loadHTML( $seperate[0] );
                    $xpath = new \DOMXPath($doc);
                    $src = $xpath->evaluate("string(//img/@src)");
                    $data[$key]['question_img'] = $src;
                }
                $data[$key]['question'] = strip_tags($seperate[0]);
                
                $split = preg_split('/\d :/', $seperate[1]);
                $choices = [];
                unset($split[0]);
                foreach ($split as $key_choice => $choice) {
                    if (preg_match('/<img/', $choice)) {
                        $doc = new \DOMDocument();
                        libxml_use_internal_errors(true);
                        $doc->loadHTML( $choice );
                        $xpath = new \DOMXPath($doc);
                        $src = $xpath->evaluate("string(//img/@src)");
                        $choices[$key_choice]['msg'] = strip_tags($choice);
                        $choices[$key_choice]['img'] = $src;
                    } else {
                        $choices[$key_choice] = strip_tags($choice);
                    }
                }
                $data[$key]['choice'] = $choices;
            }
        }
        return $data;
	}

    static function checkAns($contents)
   {
        foreach ($contents as $key => $content) {
            print_r($content['answer']);
            if (!is_numeric($content['answer']))
            {
             print_r($key);
             print_r($content['answer']);
             echo "___";
            }
        }
   }
}