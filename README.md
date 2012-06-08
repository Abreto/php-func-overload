# PHP函数重载的实现

## 用法.
- 需要先:

		require_once('php-func-overload.php');

- 定义函数:
_()函数原型

		_(string $name, string $args, string $code);

其中, `$name`是函数名; `$args`是参数列表,多个参数用`,`分隔,需要用`:`加上参数类型,可制定默认值,如`'$a:integer,$b="asd":string'`,如果没有,请留`''`; `$code`是函数代码,必须是正确的PHP语句(集合).

- 调用函数:

		就像C++调用重载函数那样:).

---------------------------------

## 示例:

	require_once('php-func-overload.php');
	_(
	'hello',
	'',
	'echo "hello php-func-overload\n.";'
	);
	_(	// 重载hello函数
	'hello',
	'$a:integer',
	'echo ($a+$s)."\n";'
	);
	_(
	'hello',
	'$a:integer,$b="ab":string',
	'echo "$a. Hello $b.\n";'
	);
	// -
	hello();	// 第一个函数原型
	hello(2);	// 第二个函数原型
	hello(12, 'World');	// 第三个函数原型


### 参考:

	/**
	* 整数:integer, 浮点数:double, 布尔:boolean, 字符串:string, 资源:resource
	* 数组:array, 对象:object, 未知类型:unknown type;
	*/
  
  
  
-----------------------------------------
by Abreto.  
at 2012-06-08 13:21
