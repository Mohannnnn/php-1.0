1.php变量
	变量以 $ 符号开始，后面跟着变量的名称
	变量名必须以字母或者下划线字符开始
	变量名只能包含字母数字字符以及下划线（A-z、0-9 和 _ ）
	变量名不能包含空格
	变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

2.global 关键字用于函数内访问全局变量。
  static当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。要做到这一点，请在您第一次声明变量时使用 static 关键字：

 3.echo 和 print 区别:
	echo - 可以输出一个或多个字符串
	print - 只允许输出一个字符串，返回值总为 1
	提示：echo 输出的速度比 print 快， echo 没有返回值，print有返回值1。

4.php数据类型
	String（字符串）, Integer（整型）, Float（浮点型）, Boolean（布尔型）, Array（数组）, Object（对象）, NULL（空值）。
	
	var_dump() 函数返回变量的数据类型和值：
	例如：$cars=array("Volvo","BMW","Toyota");var_dump($cars);
	注意：对象类型，必须在class里面申明

5.php常量
	使用define()函数
	例如：
	// 区分大小写的常量名
	define("GREETING", "欢迎访问 Runoob.com");
	echo GREETING;    // 输出 "欢迎访问 Runoob.com"
	echo '<br>';
	echo greeting;   // 输出 "greeting"
	// 不区分大小写的常量名
	define("GREETING", "欢迎访问 Runoob.com"，true);
	echo GREETING;    // 输出 "欢迎访问 Runoob.com"
	echo '<br>';
	echo greeting;   // 输出 "欢迎访问 Runoob.com"

6.php字符串变量
	strlen()函数用于输出字符串的长度
	strpos() 函数用于在字符串内查找一个字符或一段指定的文本。如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。

7.php数组
	count() 函数用于返回数组的长度（元素的数量）

    关联数组是使用您分配给数组的指定的键的数组。

	这里有两种创建关联数组的方法：
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	or:
	$age['Peter']="35";
	$age['Ben']="37";
	$age['Joe']="43";

	遍历关联数组
	<?php
	$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
	foreach($age as $x=>$x_value)
	{
	echo "Key=" . $x . ", Value=" . $x_value;
	echo "<br>";
	}
	?>

8.数组排序
	sort() - 对数组进行升序排列
	rsort() - 对数组进行降序排列
	asort() - 根据关联数组的值，对数组进行升序排列
	ksort() - 根据关联数组的键，对数组进行升序排列
	arsort() - 根据关联数组的值，对数组进行降序排列
	krsort() - 根据关联数组的键，对数组进行降序排列

9.php魔术变量
	__LINE__文件中的当前行号。
	__FILE__文件的完整路径和文件名。如果用在被包含文件中，则返回被包含的文件名。
	__DIR_文件所在的目录。如果用在被包括文件中，则返回被包括的文件所在的目录。
	__FUNCTION__函数名称
	__CLASS__类的名称
	__TRAIT__Trait 的名字
	__METHOD__类的方法名
	__NAMESPACE__当前命名空间的名称（区分大小写）

10.php面向对象
	<?php 
	class Site { 
	  /* 成员变量 */ 
	  var $url; 
	  var $title; 
	   
	  /* 成员函数 */ 
	  function setUrl($par){ 
	     $this->url = $par; 
	  } 
	   
	  function getUrl(){ 
	     echo $this->url . PHP_EOL; 
	  } 
	   
	  function setTitle($par){ 
	     $this->title = $par; 
	  } 
	   
	  function getTitle(){ 
	     echo $this->title . PHP_EOL; 
	  } 

	  //构造函数，用_construct
	  function __construct( $par1, $par2 ) {
	   	$this->url = $par1;
	   	$this->title = $par2;
	  }

	  //析构函数，用destruct
	  function __destruct() {
       print "销毁 " . $this->name . "\n";
   	  }
	} 

	$runoob = new Site; 
	$taobao = new Site; 
	$google = new Site; 

	// 调用成员函数，设置标题和URL 
	$runoob->setTitle( "教程" ); 
	$taobao->setTitle( "淘宝" ); 
	$google->setTitle( "Google 搜索" ); 

	$runoob->setUrl( 'www.runoob.com' ); 
	$taobao->setUrl( 'www.taobao.com' ); 
	$google->setUrl( 'www.google.com' ); 

	// 调用成员函数，获取标题和URL 
	$runoob->getTitle(); 
	$taobao->getTitle(); 
	$google->getTitle(); 

	$runoob->getUrl(); 
	$taobao->getUrl(); 
	$google->getUrl(); 

	
	//输出
	// 教程
	// 淘宝
	// Google 搜索
	// www.runoob.com
	// www.taobao.com
	// www.google.com
	?>

	注：->是用来表示类内部的属性和方法的代号，$this指当前对象

	继承---------------------使用关键字extends,继承后方法可以重写，
	PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。

	解释：public的方法和属性继承过后的和外部对象都能用，而protected是只能继承过后的外部对象使用，自己是不能够用外部对象使用的，private是都不能使用。（外部对象是指new过后的对象）

	接口---------------------使用关键词implements，类中必须实现接口中定义的所有方法，否则会报一个致命错误。类可以实现多个接口，用逗号来分隔多个接口的名称。

	<?php
	// 声明一个'iTemplate'接口
	interface iTemplate
	{
	    public function setVariable($name, $var);
	    public function getHtml($template);
	}


	// 实现接口
	class Template implements iTemplate
	{
	    private $vars = array();
	  
	    public function setVariable($name, $var)
	    {
	        $this->vars[$name] = $var;
	    }
	  
	    public function getHtml($template)
	    {
	        foreach($this->vars as $name => $value) {
	            $template = str_replace('{' . $name . '}', $value, $template);
	        }
	 
	        return $template;
	    }
	}
	?>

	抽象类-------------------定义抽象类关键字abstract，抽象类是不能够被实例化的，可以继承，但是继承的子类必须实现父类定义为抽象的方法，类型和参数也必须匹配。

	<?php
	abstract class AbstractClass
	{
	 // 强制要求子类定义这些方法
	    abstract protected function getValue();
	    abstract protected function prefixValue($prefix);

	    // 普通方法（非抽象方法）
	    public function printOut() {
	        print $this->getValue() . PHP_EOL;//换行
	    }
	}

	class ConcreteClass1 extends AbstractClass
	{
	    protected function getValue() {
	        return "ConcreteClass1";
	    }

	    public function prefixValue($prefix) {
	        return "{$prefix}ConcreteClass1";
	    }
	}

	class ConcreteClass2 extends AbstractClass
	{
	    public function getValue() {
	        return "ConcreteClass2";
	    }

	    public function prefixValue($prefix) {
	        return "{$prefix}ConcreteClass2";
	    }
	}

	$class1 = new ConcreteClass1;
	$class1->printOut();
	echo $class1->prefixValue('FOO_') . PHP_EOL;

	$class2 = new ConcreteClass2;
	$class2->printOut();
	echo $class2->prefixValue('FOO_') . PHP_EOL;
	?>

	执行以上代码，输出结果为：
	ConcreteClass1
	FOO_ConcreteClass1
	ConcreteClass2
	FOO_ConcreteClass2
	
	Static----------------------关键字声明类属性或方法为 static(静态)，就可以不实例化类而直接访问。
	Final----------------------新增了一个final关键字。如果父类中的方法被声明为final，则子类无法覆盖该方法
	。如果一个类被声明为final，则不能被继承。

	调用父类的方法或者构造函数---------------------------parent::
	<?php
	class person{
		var $name;
		var $sex;
		var $age;
		function __construct($name,$sex,$age){
		$this->name=$name;
		$this->sex=$sex;
		$this->age=$age;
	}
	function say(){
		echo "我的名字叫：".$this->name."<br>性别：".$this->sex."<br>年龄：".$this->age;
		}
	}
	class student extends person{
		private $school;
		function __construct($school){    //构造函数，只需添加$school
		parent::__construct("张三","男",26);  //调用父类构造函数
		$this->school=$school;
	}
	function say(){     //重载了父类的say()方法
		echo parent::say()."<br>学校：".$this->school; //调用了父类的方法,这样可以不破坏父类的变量封装，如果不这样的话，父类中的变量不能为private
		}
	}
	$student1=new student("北京大学");
	$student1->say();
	?>