<?php
namespace Custom\Restful\Abs;

abstract class AbstractRestfulController
{
    abstract public function create(array $data);

    abstract public function update(int $id, $data);

    abstract public function delete(int $id);

    abstract public function get(int $id);

    abstract public function getList(array $data = null);

    abstract public function sendResponse(array $response);
}
