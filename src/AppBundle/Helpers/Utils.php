<?php

namespace AppBundle\Helpers;

use \DateTime;

class Utils 
{
	/*
     * Create a random string
     * @author  XEWeb <>
     * @param $length the length of the string to create
     * @return $str the string
     */
    public static function randomString($length = 6) 
    {
        $str = "";
        $characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
        $max = count($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }
        return $str;
    }

    public static function convertStringToDateTimeObject($str, $format = 'd/m/Y') 
    {
        if(!$str) return;

        $obj = new DateTime($str);
        return $obj->format($format);
    }

    public static function convertNumericMonthToName($numb)
    {
        if(!$numb) return;

        $months = array(1=>'January', 2=>'February', 3=>'March', 4=>'April', 5=>'May', 6=>'June', 7=>'July', 8=>'August', 9=>'September', 10=>'October', 11=>'November', 12=>'December');

        if( preg_match("/^0[0-9]$/", $numb) ) {
            $numb = (string) $numb;
            $months = array(
                '01' => 'January',
                '02' => 'February',
                '03' => 'March',
                '04' => 'April',
                '05' => 'May',
                '06' => 'June',
                '07' => 'July',
                '08' => 'August',
                '09' => 'September',
                '10' => 'October',
                '11' => 'November',
                '12' => 'December'
            );
        }

        return $months[$numb];
    }

    public static function convertMonthNameToNumeric($month, $is2Digtits = false)
    {
        $months = array('January' => 1, 'February' => 2, 'March' => 3, 'April' => 4, 'May' => 5, 'June' => 6, 'July' => 7, 'August' => 8, 'September' => 9, 'October' => 10, 'November' => 11, 'December' => 12);

        if($is2Digtits) {
            $months = array('January' => '01', 'February' => '02', 'March' => '03', 'April' => '04', 'May' => '05', 'June' => '06', 'July' => '07', 'August' => '08', 'September' => '09', 'October' => '10', 'November' => '11', 'December' => '12');
        }

        return $months[$month];
    }

    public static function weekListInMonth($month, $year)
    {
        $weeks = array();

        for ($day_week_start = mktime(0, 0, 0, $month, 1, $year); $day_week_start <= mktime(0, 0, 0, $month + 1, 0, $year);) {
            $week = array();
            $week['start'] = date('Y-m-d', $day_week_start);

            $day_week_start = getdate($day_week_start);
            $day_week_end = mktime(0, 0, 0, $day_week_start['mon'], $day_week_start['mday'] + (7 - (($day_week_start['wday'] == 0) ? 7 : $day_week_start['wday'])), $day_week_start['year']);

            $week['end'] = date('Y-m-d', $day_week_end);
            if ($week['end'] >= date('Y-m-d', mktime(0, 0, 0, $month + 1, 1, $year))) {
                $week['end'] = date('Y-m-d', mktime(0, 0, 0, $month + 1, 0, $year));
            }

            $weeks[] = $week;

            $day_week_start = mktime(0, 0, 0, $day_week_start['mon'], $day_week_start['mday'] + (7 - (($day_week_start['wday'] == 0) ? 7 : $day_week_start['wday'])) + 1, $day_week_start['year']);
        }

        return $weeks;
    }

    public static function staticRandomFill($allowed_chars = FALSE, $length = 8) {

        if (!$allowed_chars) {
            $allowed_chars = array(
                '0', '1', '2', '3', '4', '5', '6', '7', '8', '9',
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', '0', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
                'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
            );
        }

        if (!is_array($allowed_chars)) {
            return '';
        }

        $random_str = '';

        srand();

        for ($i = 0; $i < $length; $i++) {
            $random_str .= $allowed_chars[rand(0, (count($allowed_chars) - 1))];
        }

        return $random_str;
    }
}