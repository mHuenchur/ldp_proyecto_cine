<?php


interface InterfaceDAO {

    public function save(InterfaceDTO $object):void;

    public function load(): InterfaceDTO;

    public function update(InterfaceDTO $object):void;

    public function delete(): void;

    public function list(): array;
}