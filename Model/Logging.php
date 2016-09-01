<?php

namespace CtiDigital\Configurator\Model;

use Symfony\Component\Console\Output\OutputInterface;

class Logging
{

    const LEVEL_INFO = 'info';
    const LEVEL_COMMENT = 'comment';
    const LEVEL_QUESTION = 'question';
    const LEVEL_ERROR = 'error';

    protected $output;

    public function __construct(OutputInterface $output)
    {
        $this->output = $output;
    }

    public function log($message,$level)
    {
        $this->output->writeln('<'.$level.'>'.$message.'<'.$level.'>');
    }

    public function logError($message)
    {
        $this->log($message,$this::LEVEL_ERROR);
    }

    public function logQuestion()
    {
        $this->log($message,$this::LEVEL_QUESTION);
    }

    public function logComment()
    {
        $this->log($message,$this::LEVEL_COMMENT);
    }

    public function logInfo()
    {
        $this->log($message,$this::LEVEL_INFO);
    }

}
