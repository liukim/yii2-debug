How to use ?

1.replace the src Debug Extension

2.modify the Yii.php (in vendor\yiisoft\yii2\Yii.php) as follow ：
```
<?php
/**
 * Yii bootstrap file.
 *
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

require(__DIR__ . '/BaseYii.php');	
// add dump file
require_once(__DIR__ . '/../yii2-debug/dump/Dump.php');

/**
 * Yii is a helper class serving common framework functionalities.
 *
 * It extends from [[\yii\BaseYii]] which provides the actual implementation.
 * By writing your own Yii class, you can customize some functionalities of [[\yii\BaseYii]].
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Yii extends \yii\BaseYii
{
    // add static member
	public static $dump;
}

spl_autoload_register(['Yii', 'autoload'], true, true);
Yii::$classMap = include(__DIR__ . '/classes.php');
Yii::$container = new yii\di\Container;
Yii::$dump = new Dump();
```
3.dump the debug info 

```
Yii::$dump->r($var);
```

