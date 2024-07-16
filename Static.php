<!-- STATIC 1 -->
<?php
class solution
{
    static $count;

    public static function getCount()
    {
        return self::$count++;
    }
}
solution::$count = 1;
for ($i = 1; $i <= 5; $i++) {
    echo "The values is : " . solution::getCount() . "<br>";
}
?>

<!-- STATIC 2 -->

<?php
class first
{

    public static function function_f()
    {
        echo "Hello , how are you";
    }
}
class second
{
    public static function function_t()
    {
        first::function_f();
    }
}

$class1 = new second();
echo $class1->function_t();
?>
