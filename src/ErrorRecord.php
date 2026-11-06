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

}
