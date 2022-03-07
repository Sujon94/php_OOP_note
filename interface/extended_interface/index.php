<?phppartial implement
include '../../autoload.php';
$objC = new ClassC(new ClassA());
$objC->callerMethod();

echo "-+-+-+-+-+-+-+-+-+-+-+-+".PHP_EOL;

$objC = new ClassC(new ClassB());
$objC->callerMethod();