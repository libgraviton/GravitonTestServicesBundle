<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class RestrictionmultitenantmultipipelineSecond extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$match'
		      =>
		        [
		        'value'
		        =>
		          [
		          '$gte'
		          =>
		          $this->getParam("value")
		        ]
		      ]
		    ]
		    ,
		      [
		      '$sort'
		      =>
		        [
		        'value'
		        =>
		        1
		      ]
		    ]
		  ];
	}
}
