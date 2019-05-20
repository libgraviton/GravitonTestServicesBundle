<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class MultipipelineCustomer extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
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
		        '$name'
		        ,
		        'sorter'
		        =>
		          [
		          '$strLenBytes'
		          =>
		          '$name'
		        ]
		      ]
		    ]
		  ];
	}


	public function getConditional00001($isNegated = false)
	{
		if (($isNegated === false && !$this->hasParam(["search"], "and")) ||
						    ($isNegated === true && $this->hasParam(["search"], "and"))
						) {
							return self::EMPTY_STRING;
						}

		return [ '$match' => [ 'name' => $this->getParam("search") ] ] ;
	}
}
