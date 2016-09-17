# 第一天:php基本的语法的学习和面向对象的学习
	1.object.php的文件

＃第二天
	1.析构函数
	    $james = new Player();
	    $james1 = $james;两个对象
	    $james2 = &$james;(立即调用析构函数)$james2是$james的影子
	    $james = null;

		// 释放硬件资源
	    function __destruct() {
	        
	    }
	2.面向对象的继承:
		节省编程时间和代价
		同一个父类，都可以调用相同的类成员
		extends，php中表示继承，只能单继承，只能有一个父类

java和php都是单继承的机制关键字都是extends
	
	3.面向对象：访问控制
		1.public(全部的类)
		2.protected（本身和子类）
		3.private：私有的类成员，只能自己访问


java可以通过.调用方法
php通过－>调用方法





