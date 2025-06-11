<?php

namespace Livtoff\Laravel\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class SetupCommand extends Command
{
    protected $signature = 'livtoff:setup {type : The type of setup to run (auth, cms, api, multilanguage)}';

    protected $description = 'Setup Livtoff features';

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $filesystem;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();

        $this->filesystem = $filesystem;
    }

    public function handle()
    {
        $type = $this->argument('type');

        // Get the appropriate setup
        $setup = $this->resolveSetup($type);

        if (! $setup) {
            $this->error("Setup for '{$type}' not found.");

            return 1;
        }

        // Pass this command instance to the setup
        $setup->setCommand($this);

        // Run the setup
        return $setup->setup();
    }

    protected function resolveSetup($type)
    {
        $setupClass = 'Livtoff\\Laravel\\Setup\\Setup'.ucfirst($type);

        if (class_exists($setupClass)) {
            // Explicitly create the setup with a Filesystem instance
            return new $setupClass($this->filesystem);
        }

        return null;
    }
}
