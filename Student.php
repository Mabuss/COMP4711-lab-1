<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 1/11/2018
 * Time: 4:19 PM
 */

/**
 * Class Student
 */
class Student
{
    /**
     * Student constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * Adds an email address.
     * @param $which The email type.
     * @param $address The address.
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * Adds an grade.
     * @param $grade the grade.
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * Calculated the average grade for the student.
     * @return float|int the average.
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * Converts the student to a string for printing.
     * @return string the string conversion.
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}