<?php

namespace Jsvarsppm;

// use Phalcon\DI\FactoryDefault;
// use Phalcon\Loader;
// use Phalcon\Mvc\Dispatcher;
// use Phalcon\Mvc\View;

class Jsvars extends \Phalcon\Mvc\Application
{

	private $start = '<script>';
	private $end = '</script>';

	public function up($name=null,$arr){
		if ($arr != null && $name != null){
			$a = json_encode($arr);
			$v = $this->start;
			$v .= 'var '. $name .' = ';
			$v .= $a;
			$v .= $this->end;
			$this->view->setVar($name,$v);
		}
	}

}