<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace Graviton\TestServicesBundle\Pipeline;

/**
 * Generated Graviton Pipeline class
 */
final class MultipipelineApps extends \Graviton\AnalyticsBase\Pipeline\PipelineAbstract
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
		        '$name.en'
		        ,
		        'sorter'
		        =>
		          [
		          '$strLenBytes'
		          =>
		          '$name.en'
		        ]
		        ,
		        'dater'
		        =>
		        '#newDate#'
		        ,
		        'fixedDate'
		        =>
		        '#mongoDate(2018-04-19T00:00:00+0000)#'
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

		return [ '$match' => [ 'name.en' => $this->getParam("search") ] ] ;
	}
}
