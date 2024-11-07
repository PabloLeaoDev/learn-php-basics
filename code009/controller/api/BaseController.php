<?php 
class BaseController {
    public function __call($name, $arguments): void
    {
        $this->sendOutput('', ['HTTP/1.1 404 Not Found']);
    }

    protected function getStringParams(): array
    {
        parse_str($_SERVER['QUERY_STRING'], $query);
        return $query;
    }

    protected function sendOutput(string $data, array $httpHeaders = []): void
    {
        header_remove('Set-Cookie');

        if (is_array($httpHeaders) && count($httpHeaders)) {
            foreach ($httpHeaders as $httpHeader) {
                header($httpHeader);
            }
        }

        echo $data;
        exit;
    }
}