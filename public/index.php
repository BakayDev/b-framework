<?php

use App\Http\Request;

chdir(dirname(__DIR__));

require 'src/App/Http/Request.php';

# init app
$request = new Request();

# add header framework version
header('B-framework : v-1');

# action

//get user name from QueryParams
$userName = $request->getQueryParams()['name'] ?? 'Guest';

echo 'hello ' . $userName . ' from B-framework';


