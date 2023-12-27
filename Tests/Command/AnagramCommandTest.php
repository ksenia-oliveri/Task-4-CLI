<?php
namespace App\Tests\Command;

use App\Command\Anagram;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\ApplicationTester;

class AnagramCommandTest extends TestCase
{
    public function testStringProcessing()
    {
        $application = new Application;
        $application->add(new Anagram());

        $tester = new ApplicationTester($application);
        $tester->run([
            'command' => 'app:anagram',
            '--string' => 'he11o i 4m your str1ng',
        ]);

        $output = $tester->getDisplay();

        $this->assertEquals('oe11h i 4m ruoy gnr1ts', trim($output));
    }

    public function testFileProcessing()
    {
        $application = new Application;
        $application->add(new Anagram());

        $tester = new ApplicationTester($application);
        $tester->run([
            'command' => 'app:anagram',
            '--file' => 'text_file.txt',
        ]);

        $output = $tester->getDisplay();

        $this->assertEquals('Hello! I am y0ur str!ng123', trim($output));
    }
}