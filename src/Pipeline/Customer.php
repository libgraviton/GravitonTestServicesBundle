<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class Customer extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$project'
		      =>
		        [
		        'id'
		        =>
		        1
		        ,
		        'name'
		        =>
		        1
		        ,
		        'customerNumber'
		        =>
		        1
		        ,
		        'created_year'
		        =>
		          [
		          '$cond'
		          =>
		            [
		              [
		              '$ifNull'
		              =>
		                [
		                '$createDate'
		                ,
		                0
		              ]
		            ]
		            ,
		              [
		              '$year'
		              =>
		              '$createDate'
		            ]
		            ,
		            -
		            1
		          ]
		        ]
		        ,
		        'created_month'
		        =>
		          [
		          '$cond'
		          =>
		            [
		              [
		              '$ifNull'
		              =>
		                [
		                '$createDate'
		                ,
		                0
		              ]
		            ]
		            ,
		              [
		              '$month'
		              =>
		              '$createDate'
		            ]
		            ,
		            -
		            1
		          ]
		        ]
		      ]
		    ]
		    ,
		      [
		      '$match'
		      =>
		        [
		        'created_year'
		        =>
		          [
		          '$gte'
		          =>
		          2013
		          ,
		          '$lt'
		          =>
		          2015
		        ]
		      ]
		    ]
		  ];
	}
}
