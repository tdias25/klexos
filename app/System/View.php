<?php

// namespace App\Core;

// use App\Interfaces\View\actionBeforeRenderView;
// use app\Helper\File;

class View extends ViewEngine
{	

	private $actionsBeforeRender = [
		'minifyHTML'
	];
	
	function __construct($viewFile)
	{
		foreach ($this->actionsBeforeRender as $action) {
			$this->actionBeforeRender(new $action());
		}

		parent::__construct($viewFile);
	}
}


class ViewEngine {

	private $viewFile;
	private $viewContent;
	private $basePath = 'app/views/';
	
	function __construct($viewFile)	{

		try {
			$this->setViewFile($viewFile);
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	private function setViewFile($viewFile) {

		$file_ext = (explode('.', $viewFile));

		if(is_array($file_ext))
			$viewFile = $viewFile . '.php';

		$file_path = $this->basePath . $viewFile;

		if(!file_exists($file_path))
			throw new Exception("View \"{$viewFile}\" not found");

		if(!is_readable($file_path))
			throw new Exception("View {$viewFile} is not readable");

		$this->viewFile = $viewFile;

		$this->setViewContent();

	}

	private function setViewContent($content = null) {

		if($content)
			$this->viewContent = $content;
		else
			$this->viewContent = file_get_contents($this->basePath . $this->viewFile);

	}

	private function getViewContent() {
		return $this->viewContent;
	}

	private function getViewFile() {
		return $this->viewFile;
	}

	function render() {
		// return eval($this->getViewContent());
		return $this->getViewContent();
	}

	function actionBeforeRender(actionBeforeRenderView $action) {

		$filtered_content = $action->filter($this->getViewContent());
		$this->setViewContent($filtered_content);
	}
}