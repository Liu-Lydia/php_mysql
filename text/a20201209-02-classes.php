<pre>
<?php
class MyClass
{
    var $name;
    public $mobile;
    private $sno = 'secret';
    //protected
    public function __construct($name = 'noname')
    {
        $this->name = $name;
    }
    function myMethod01($mobile = '0911')
    {
        $this->mobile = $mobile;
    }
}

$a = new MyClass();
echo "$a->name<br/>";

$b = new MyClass('Bill');
echo "$b->name<br/>";

$c = new MyClass('0922');
echo "$c->mobile<br/>"

?>
</pre>