<?php

/**
 * Please fix the items marked with "@TODO" in this class
 * 
 * Follow the https://www.php-fig.org/psr/psr-2/ coding style guide.
 * 
 * One exception to PSR-2: opening braces MUST always be on the same line 
 * for classes, methods, functions, and control structures
 */
class Singleton {
    
    // @TODO Implement Singleton functionality
    

    private function __construct(){
        echo "connection is done";
    }

    /**
     * Display user name
     * 
     * @param string $name User-provided name
     */
    public static function userEcho($name) {
        // @TODO Validate & sanitize $name
        echo "The value of 'name' is '{$name}'";
    }
    
    /**
     * Query by user name
     * 
     * @param string $name User-provided name
     */
    public static function userQuery($name) {
        // @TODO Validate & sanitize $name
        mysql_query("SELECT * FROM `test` WHERE `name` = '{$name}' LIMIT 1");
    }
    
    /**
     * Output the contents of a file
     * 
     * @param string $path User-provided file path
     */
    public static function userFile($path) {
        // @TODO Validate & sanitize $path
        readfile($path);
    }
    
    /**
     * Nested conditions
     */
    public static function nestedConditions() {
        // @TODO Untangle nested conditions
        if ($conditionA) {
            if ($conditionB) {
                if ($conditionC) {
                    echo 'ABC';
                } else {
                    echo '^C';
                }
            } else {
                echo '^B';
            }
        } else {
            echo '^A';
        }
    }
    
    /**
     * Return statements
     * 
     * @return boolean
     */
    public static function returnStatements() {
        // @TODO Fix
        if ($conditionA) {
            echo 'A';
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Null coalescing
     */
    public static function nullCoalescing() {
        // @TODO Simplify
        if (isset($_GET['name'])) {
            $name = $_GET['name'];
        } elseif (isset($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $name = 'nobody';
        }
        return $name;
    }
    
    /**
     * Method chaining
     */
    public static function methodChained() {
        // @TODO Implement method chaining
    }
    
    /**
     * Immutables are hard to find
     */
    public static function checkValue($value) {
        $result = null;
        
        // @TODO Make all the immutable values (int, string) in this class 
        // easily replaceable
        switch ($value) {
            case 'stringA':
                $result = 1;
                break;
                
            case 'stringB':
                $result = 2;
                break;
        }
        
        return $result;
    }
    
    /**
     * Check a string is a 24 hour time
     * 
     * @example "00:00:00", "23:59:59", "20:15"
     * @return boolean
     */
    public static function regexTest($time24Hour) {
        // @TODO Implement RegEx and return type; validate & sanitize input
        return preg_match('%%', $time24Hour);
    }
    
}

/*EOF*/


// printing output

$userEcho = Singleton::userEcho('Mandeep Singh');
$userQuery = Singleton::userQuery('Mandeep Singh');
$userFile = Singleton::userFile('./read.md');
