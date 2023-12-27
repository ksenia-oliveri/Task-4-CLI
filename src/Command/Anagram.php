<?php
namespace App\Command;

use App\StringReverse;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(name: 'app:anagram')]
class Anagram extends Command 
{   

    protected function configure(): void
    {   
        $this ->addOption('file', null, InputOption::VALUE_REQUIRED)
            ->addOption('string', null, InputOption::VALUE_REQUIRED);  
    }
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $obj = new StringReverse;
        
        if ($input->getOption('file'))
        {
            $result = $obj->stringReverse(file_get_contents($input->getOption('file')));
        } else 
        {
            $result= $obj->stringReverse($input->getOption('string'));    
        }  
        
        $output->writeln($result);
        
         return Command::SUCCESS;

    }
}