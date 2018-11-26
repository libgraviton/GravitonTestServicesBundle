<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class Customerwithintparamstringfield extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
{
	protected function getPipeline(): array
	{
		return     [
		    $this->getConditional00001(),
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


	public function getConditional00001()
	{
		if (!$this->hasParam("groupId")) {
							return self::EMPTY_STRING;
						}

		return [ '$match' => [ 'groups' => $this->getParam("groupId") ] ] ;
	}
}
