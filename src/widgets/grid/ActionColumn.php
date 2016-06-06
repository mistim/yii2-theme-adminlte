<?php

namespace mistim\theme\adminlte\widgets\grid;

use Yii;
use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn
{
	/**
	 * Renders the filter cell.
	 *
	 * @return string
	 */

	protected function renderFilterCellContent()
	{
		return Html::a('<span class="glyphicon glyphicon-refresh"></span>', ['/' . \Yii::$app->request->pathInfo], [
			'title'       => Yii::t('admin', 'Reset filter'),
			'data-toggle' => 'tooltip',
			'class'       => 'btn btn-block btn-primary resetFilter',
		]);
	}
}