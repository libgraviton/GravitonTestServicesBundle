<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class Appbool extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		      [
		      '$match'
		      =>
		        [
		        'showInMenu'
		        =>
		        $this->getParam("showInMenu")
		      ]
		    ]
		  ];
	}
}
