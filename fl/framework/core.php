<?php

class FlowerEngine {

	public
		$settings,
		$link = mysqli_connect();

	public function __construct($settings) {
		$this->settings = $settings;
		$this->allArticles();
		$this->getArticles();
		$this->newArticles();
		$this->editArticles();
		$this->deleteArticles();
	}

	public function allArticles() {
		// $link;
	}

}