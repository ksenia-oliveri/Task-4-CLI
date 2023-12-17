<?php
namespace App\Command;

use App\StringReverse;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:anagram')]
class MyCommand extends Command 
{   

    protected function configure(): void
    {   
        $this ->addOption('file', null, InputOption::VALUE_REQUIRED)
        ->addOption('string', null, InputOption::VALUE_REQUIRED);
               
       
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        
        $obj = new StringReverse;
        
        if ($input->getOption('string') && $input->getOption('file'))
        {
            $fromFile = $obj->stringReverse(file_get_contents($input->getOption('file')));
            $output->writeln($fromFile);
        } elseif ($input->getOption('file')) 
        {
            $fromFile = $obj->stringReverse(file_get_contents($input->getOption('file')));
            $output->writeln($fromFile);
        } 
        else 
        {
            $fromString = $obj->stringReverse($input->getOption('string'));
            $output->writeln($fromString); 
    }  return Command::SUCCESS;

}
}