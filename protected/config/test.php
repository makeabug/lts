<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
			/* uncomment the following to provide test database connection*/
			'db'=>array(
				'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/learntrack_test.db',
			),
		),
	)
);
