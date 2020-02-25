<?php

namespace Hpolthof\LaravelPostcodeTech;

use Exception;
use Hpolthof\PostcodeTech\Exceptions\PostcodeNotFoundException;
use Hpolthof\PostcodeTech\Postcode as PostcodeService;

class Postcode
{
    public function find(string $postcode, int $number): ?PostcodeService
    {
        $token = config('postcode.token');

        try {
            return PostcodeService::search($postcode, $number, $token);
        } catch (PostcodeNotFoundException $exception) {
            return null;
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}