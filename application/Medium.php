<?php

require 'XmlToArray.php';

class Medium 
{
	protected $fileExtention = '.json';

	protected $fileLocation = './cache/';

	protected $cacheLife = 60; //time in seconds converted to hours

	public function articles() 
	{
		$data = json_decode($this->getData(), true);
		$array = array();

		foreach ($data['rss']['channel']['item'] as $key => $story) {
			$array[$key]['title'] = $story['title'];

			preg_match('/^([^.!?\s]*[\.!?\s]+){0,30}/', strip_tags($story['content:encoded']), $abstract);
			$array[$key]['description'] = trim($abstract[0]) . '...';
			$array[$key]['link'] = preg_replace('/[\.\s]+/', '-', strtolower($story['title']));

		}

		return $array;
	}

	public function story($article)
	{
		$data = json_decode($this->getData(), true);
		$array = array();

		foreach ($data['rss']['channel']['item'] as $key => $story) {
			if(preg_replace('/[\.\s]+/', '-', strtolower($story['title'])) === $article) {
				$array['title'] = $story['title'];
				$array['article'] = $story['content:encoded'];
			}
		}

		return $array;
	}

	protected function getData()
	{
		$fileName = 'articles';
		$file = $this->fileLocation . md5($fileName) . $this->fileExtention;
		$filemtime = @filemtime($file);
		
		if ($filemtime && (time() - ($this->cacheLife * 60) < $filemtime)) {
			return file_get_contents($file);
		}

		$data = simplexml_load_file('https://medium.com/feed/tyson-reeders-case-studies');
		$xml = new XmlToArray();
		$jsonString = preg_replace('/[\x00-\x1F\x7F\xA0]/u', '', json_encode($xml->build($data)));

		file_put_contents($file, $jsonString);

		return $jsonString;

	}

}