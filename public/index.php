<?php

use App\Http\RequestFactory;

chdir(dirname(__DIR__));

require 'vendor/autoload.php';

# init app
$request = RequestFactory::fromGlobals();
# add header framework version
header('B-framework : v-1');

# action

//get user name from QueryParams
$userName = $request->getQueryParams()['name'] ?? 'Guest';

echo 'hello ' . $userName . ' from B-framework';


