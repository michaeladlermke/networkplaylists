<?php

/**
 * Created by PhpStorm.
 * User: michaeladler
 * Date: 1/10/16
 * Time: 12:05 AM
 */
class Worker
{
	private $workerID;
	private $workerName;
	private $workerImage;
	private $workerActive ;
	private $workerHOF;
	private $workerDeceased;

	public function createWorker(){
		$this->workerID = 1;
		$this->workerName = "John Cena";
		$this->workerImage = "IMAGE URL";
		$this->workerActive = "TRUE";
		$this->workerHOF = "FALSE";
		$this->workerDeceased = "FALSE";

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getWorkerID()
	{
		return $this->workerID;
	}

	/**
	 * @param mixed $workerID
	 */
	public function setWorkerID($workerID)
	{
		$this->workerID = $workerID;
	}

	/**
	 * @return mixed
	 */
	public function getWorkerName()
	{
		return $this->workerName;
	}

	/**
	 * @param mixed $workerName
	 */
	public function setWorkerName($workerName)
	{
		$this->workerName = $workerName;
	}

	/**
	 * @return mixed
	 */
	public function getWorkerImage()
	{
		return $this->workerImage;
	}

	/**
	 * @param mixed $workerImage
	 */
	public function setWorkerImage($workerImage)
	{
		$this->workerImage = $workerImage;
	}

	/**
	 * @return mixed
	 */
	public function getWorkerActive()
	{
		return $this->workerActive;
	}

	/**
	 * @param mixed $workerActive
	 */
	public function setWorkerActive($workerActive)
	{
		$this->workerActive = $workerActive;
	}

	/**
	 * @return mixed
	 */
	public function getWorkerHOF()
	{
		return $this->workerHOF;
	}

	/**
	 * @param mixed $workerHOF
	 */
	public function setWorkerHOF($workerHOF)
	{
		$this->workerHOF = $workerHOF;
	}

	/**
	 * @return mixed
	 */
	public function getWorkerDeceased()
	{
		return $this->workerDeceased;
	}

	/**
	 * @param mixed $workerDeceased
	 */
	public function setWorkerDeceased($workerDeceased)
	{
		$this->workerDeceased = $workerDeceased;
	}


}

