<?php
namespace Pattern\Command;
/**
 * AccountingOffice class
 * @package Patterns
 * @subpackage Command
 * @category behavioral
 */
class AccountingOffice
{
    /**
     * Array of commands
     * @var array
     */
    private $commands = [];
    /**
     * Adds client's commands
     * @return void
     */
    public function addCommand(Executable $command)
    {
        $this->commands[] = $command;
    }
    /**
     * Process Tax payment
     * @return string
     */
    public function payTax()
    {
        foreach ($this->commands as $command) {
            $executedCommands[] = $command;
            if ($command->execute() === false) {
                
                return sprintf(
                    "Something went wrong! %s \r\n",
                    $this->undo($executedCommands)
                );
            }
            return "Taxes payed! \r\n";
        }
    }
    /**
     * Undos commands
     * @return void
     */
    public function undo($executedCommands)
    {
        foreach ($executedCommands as $executedCommand) {
            return $executedCommand->undo();
        }
    }
}