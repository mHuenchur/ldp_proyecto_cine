<?php

namespace app\core\controller\base;

interface InterfaceController{

    public function index(): void;

    public function load(): void;

    public function create(): void;

    public function save(): void;

    public function edit(): void;

    public function update(): void;

    public function delete(): void;
}