<?php

use App\Http\Request;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

# init app
$request = (new Request())
    ->withQueryParams($_GET)
    ->withParsedBody($_POST);

# add header framework version
header('B-framework : v-1');

# action

//get user name from QueryParams
$userName = $request->getQueryParams()['name'] ?? 'Guest';

echo 'hello ' . $userName . ' from B-framework';


