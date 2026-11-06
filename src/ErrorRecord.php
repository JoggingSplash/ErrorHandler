<?php

declare(strict_types=1);

namespace pocketmine\errorhandler;

readonly final class ErrorRecord{

	public function __construct(
		public int $severity,
		public string $message,
		public string $file,
		public int $line
	){

	}

	public function getSeverity() : int{
		return $this->severity;
	}

	public function getMessage() : string{
		return $this->message;
	}

	public function getFile() : string{
		return $this->file;
	}

	public function getLine() : int{
		return $this->line;
	}
}
