<?php

namespace Eva\EvaEngine\Tasks;

// +----------------------------------------------------------------------
// | [phalcon]
// +----------------------------------------------------------------------
// | Author: Mr.5 <mr5.simple@gmail.com>
// +----------------------------------------------------------------------
// + Datetime: 14-7-17 15:22
// +----------------------------------------------------------------------
// + TaskBase.php
// +----------------------------------------------------------------------

use Phalcon\CLI\Task;
use Symfony\Component\Console\Output\ConsoleOutput;

class TaskBase extends Task
{
    /**
     * @var ConsoleOutput
     */
    protected $output;

    public function __construct()
    {
        $this->output = new ConsoleOutput();
    }
}
