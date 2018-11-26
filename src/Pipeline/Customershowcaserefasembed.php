<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class Customershowcaserefasembed extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$project'
		      =>
		        [
		        '_id'
		        =>
		        1
		        ,
		        'contact'
		        =>
		        1
		        ,
		        'contacts'
		        =>
		        1
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
}
