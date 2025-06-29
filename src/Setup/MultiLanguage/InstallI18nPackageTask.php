<?php

namespace HardImpact\Liftoff\Setup\MultiLanguage;

use HardImpact\Liftoff\Setup\Tasks\Task;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Process\Process;

class InstallI18nPackageTask extends Task
{
    /**
     * Create a new task instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem, ?Command $command = null)
    {
        parent::__construct($filesystem, $command);
    }

    /**
     * Run the task.
     */
    public function run(): bool
    {
        $this->info('Installing liftoff-i18n package via bun...');

        $process = new Process(['bun', 'add', 'liftoff-i18n'], base_path());
        $process->setTimeout(300); // 5 minutes timeout

        if ($this->command) {
            $process->run(function ($type, $buffer) {
                $this->command->line($buffer);
            });
        } else {
            $process->run();
        }

        if (! $process->isSuccessful()) {
            $this->error('Failed to install liftoff-i18n package: '.$process->getErrorOutput());

            return false;
        }

        $this->info('liftoff-i18n package installed successfully.');

        return true;
    }

    /**
     * Get the task description.
     */
    public function description(): string
    {
        return 'Installing liftoff-i18n npm package';
    }
}
