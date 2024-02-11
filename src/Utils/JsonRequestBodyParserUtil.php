<?php

namespace App\Utils;

use Symfony\Component\HttpFoundation\Request;

class JsonRequestBodyParserUtil
{

    public function run(Request $request): array{
        return json_decode($request->getContent(), true);
    }

}