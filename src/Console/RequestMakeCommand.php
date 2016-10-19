<?php
/**
 * This file is part of laravel-stubs package.
 *
 * @author ATehnix <atehnix@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ATehnix\LaravelStubs\Console;

use Illuminate\Foundation\Console\RequestMakeCommand as BaseRequestMakeCommand;

class RequestMakeCommand extends BaseRequestMakeCommand
{
    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        $stub = config('stubs.path').'/request.stub';

        return file_exists($stub) ? $stub : parent::getStub();
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.config('stubs.namespaces.request');
    }
}