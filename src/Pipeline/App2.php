<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class App2 extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$match'
		      =>
		        [
		        'order'
		        =>
		          [
		          '$gte'
		          =>
		          2
		        ]
		      ]
		    ]
		    ,
		      [
		      '$group'
		      =>
		        [
		        '_id'
		        =>
		        'app-count-2'
		        ,
		        'count'
		        =>
		          [
		          '$sum'
		          =>
		          1
		        ]
		      ]
		    ]
		  ];
	}
}
