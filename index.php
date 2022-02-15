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
    public ?string $value;

    private static $data = array();

    private function __construct(string $value){
        echo "connection is done";
        $this->value = $value;
    }

    /**
     * Display user name
     * 
     * @param string $name User-provided name
     */
    public static function userEcho($name) {
        // @TODO Validate & sanitize $name
        if($name !=''){
            $newstr = filter_var($name,FILTER_SANITIZE_STRING);
            echo "The value of 'name' is '{$newstr}'";
            $this->name = $newstr;
            return $this;
        }else{
            echo "Please enter Name";
        }
    }
    
    /**
     * Query by user name
     * 
     * @param string $name User-provided name
     */
    public static function userQuery($name) {
        // @TODO Validate & sanitize $name
        try{
            $db = new mysqli('localhost', 'root', '', 'interview');
            $sql = mysqli_query($db, "SELECT * FROM `test` WHERE `name` = '{$name}' LIMIT 1");
        }catch(Exception $e){
            echo "error is ".$e->getMessage();
        }


    }
    
    /**
     * Output the contents of a file
     * 
     * @param string $path User-provided file path
     */
    public static function userFile($path) {
        // @TODO Validate & sanitize $path
        if($path !=''){
            $newPath = filter_var($path, FILTER_SANITIZE_URL);
            readfile($newPath);
            $this->readfile = $newPath;
            return $this;
        }else{
            echo "Please enter file path";
        }
    }
    
    /**
     * Nested conditions
     */
    public static function nestedConditions() {
        // @TODO Untangle nested conditions
        $conditionA = 'A';        
        $conditionB = 'B';        
        $conditionC = 'C';        

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

        $conditionA = 'AB';
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
        $_GET['name'] = "Mandeep Singh";
        $_POST['name'] = "Mandeep Dev";
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
    public static function methodChained($name, $input) {
        // @TODO Implement method chaining
        self::$data[$name] = $input;
        return self;

    }

    public static function get($name)
    {
        echo self::$data[$name].' - get method';
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
        $res = preg_match('#^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$#', $time24Hour);
        if($res){
            return "valid time ";
        }else{
            
            return "invalid time ";
        }
        // return preg_match('%%', $time24Hour);
    }
    
}

/*EOF*/


// printing output

// $userEcho = Singleton::userEcho('');  // output Please enter Name
// $userEcho = Singleton::userEcho('Mandeep Singh');  // output PThe value of 'name' is 'Mandeep Singh'

// $userQuery = Singleton::userQuery('Mandeep Singh'); // output 

// $userFile = Singleton::userFile('');  // output Please enter file path
// $userFile = Singleton::userFile('./read.md');


// $nestedConditions = Singleton::nestedConditions();
// $returnStatements = Singleton::returnStatements();

// $nullCoalescing = Singleton::nullCoalescing();
// echo $nullCoalescing;

$methodChained = Singleton::methodChained('name', 'Mandeep')->get('name'); // ahmed - get method

print_r($methodChained);


// $methodChained = Singleton::methodChained();

// $checkValue = Singleton::checkValue('');
// print_r($checkValue);

// $regexTest = Singleton::regexTest('77:59:59');
// print_r($regexTest);