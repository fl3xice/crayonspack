<?php


final class crayon
{

    private $chars = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM1234567890!@#$%^&*";

    /*
     * @return null
     */
    public function  __construct()
    {
        return null;
    }

    /*
     * @return int
     */
    public function generate_number($min, $max = 10)
    {
        $temp = null;
        for ($i = 0; $i <= $max; $i++)
        {
            switch ($temp)
            {
                case null:
                    $temp = rand($min,$max);
                    break;
                default:
                    if ($min >= $temp or $temp <= $max)
                    {
                        return $temp;
                    }
                    break;
            }
        }
    }

    /*
     * @return string
     */
    public function generate_string($length = 1)
    {
        if (!($length <= 0))
        {
            $a = str_split($this->chars);
            $str_result = "";
            while ($length != 0)
            {
                $str_result = $str_result.$a[rand(0,count($a))];
                $length--;
            }
            return $str_result;
        }
        return "Unknown String";
    }
}

$crayon = new crayon();
echo $crayon->generate_number(0,1);