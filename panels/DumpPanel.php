<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\debug\panels;

require_once(__DIR__ . '/../dump/Dump.php');

use Yii;
use yii\debug\Panel;

/**
 * Debugger panel that collects and displays application configuration and environment.
 *
 * @property array $extensions This property is read-only.
 * @property array $phpInfo This property is read-only.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class DumpPanel extends Panel
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'Dump';
    }

    /**
     * @inheritdoc
     */
    public function getSummary()
    {
        return Yii::$app->view->render('panels/dump/summary', ['panel' => $this]);
    }

    /**
     * @inheritdoc
     */
    public function getDetail()
    {
        return Yii::$app->view->render('panels/dump/detail', ['panel' => $this]);
    }

    /**
     * @inheritdoc
     */
    public function save()
    {
        return \Dump::getDumpData();
    }
}
