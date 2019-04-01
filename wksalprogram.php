<html>
<head>
<title>
Just showing this wage button using PHP, 'tis but a simple salary webapp.
</title>
</head>
<body>
<form align="center" method="post">
<b>Your Hourly Wage:</b><input type="text" name="wage"><br>
<b>Total Hours Worked Per Week:</b><input type="text" name="hours"><br>
<input type="submit" name="submit" value="calculate">
</form>
</body>
</html>
<?php
/**
 * Wksalprogram.php
 * This is a simple php function to take two inputs and then display the result
 *
 * PHP Version 7
 *
 * @category Utilities
 * @package  Heroku
 * @author   Caleb Priest <vinyl1225@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @version  GIT: $id
 * @link     https://simple-salary-program.herokuapp.com/wksalprogram.php
 */
    /**
     * Wksalprogram
     *
     * PHP Version 7
     *
     * @category Class
     * @package  Heroku
     * @author   Caleb Priest <vinyl1225@gmail.com>
     * @license  https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
     * @version  Release: 1.0
     * @link     https://simple-salary-program.herokuapp.com/wksalprogram.php
     */
class Wksalprogram
{
    /**
     * Calculates salary using hours and hourly pay
     *
     * @return $result
     */
    static function calculateSalary($hours, $rate)
    {
        return $hours * $rate;
    }
}
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(is_numeric($_POST['wage']) && is_numeric($_POST['hours'])) {
        $salary = Wksalprogram::calculateSalary($_POST['hours'], $_POST['wage']);
        echo '<script type="text/javascript">alert("Your total weekly salary is: $' . $salary . '");</script>';
    } else {
        echo '<script type="text/javascript">alert("Please make sure both fields are not empty, and are only numbers.");</script>';
    }
}
?>
