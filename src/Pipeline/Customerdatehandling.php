<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class Customerdatehandling extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		    $this->getConditional00001(),
		      [
		      '$addFields'
		      =>
		        [
		        'age'
		        =>
		          [
		          '$subtract'
		          =>
		            [
		              [
		              '$year'
		              =>
		              new \MongoDate()
		            ]
		            ,
		              [
		              '$year'
		              =>
		              '$createDate'
		            ]
		          ]
		        ]
		      ]
		    ]
		    ,
		      [
		      '$project'
		      =>
		        [
		        'age'
		        =>
		        1
		        ,
		        'createDate'
		        =>
		        1
		        ,
		        'sub.createDate'
		        =>
		        '$createDate'
		      ]
		    ]
		    ,
		      [
		      '$sort'
		      =>
		        [
		        '_id'
		        =>
		        1
		      ]
		    ]
		  ];
	}


	public function getConditional00001()
	{
		if (!$this->hasParam("dateFrom")) {
							return self::EMPTY_STRING;
						}

		return [ '$match' => [ 'createDate' => [ '$gt' => $this->getParam("dateFrom") ] ] ] ;
	}
}
