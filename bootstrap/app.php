<?php

use Tersworks\Foundation\Application;

return Application::configure(__DIR__ . '/../public')
					->withRoutes(__DIR__ . '/../routes/api.php');