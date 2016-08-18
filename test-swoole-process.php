<?php

namespace Swoole {
    use swoole_process;
    if (!class_exists('Swoole\Process', false)) {

        class Process extends swoole_process
        {
        }
    }
}

namespace {
    use Swoole\Process;

    Process::wait();
}
