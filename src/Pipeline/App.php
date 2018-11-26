<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class App extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$group'
		      =>
		        [
		        '_id'
		        =>
		        'app-count'
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
