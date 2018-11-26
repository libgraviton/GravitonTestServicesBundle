<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class Customerwithintparamarrayfield extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$match'
		      =>
		        [
		        'groups'
		        =>
		          [
		          '$in'
		          =>
		          $this->getParam("groupId")
		        ]
		      ]
		    ]
		    ,
		      [
		      '$project'
		      =>
		        [
		        '_id'
		        =>
		        1
		        ,
		        'name'
		        =>
		        1
		      ]
		    ]
		  ];
	}
}
