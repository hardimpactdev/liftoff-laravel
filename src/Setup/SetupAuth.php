<?php

namespace Livtoff\Laravel\Setup;

use Illuminate\Filesystem\Filesystem;
use Livtoff\Laravel\Setup\Auth\CopyAuthControllersTask;
use Livtoff\Laravel\Setup\Auth\CopyAuthRequestsTask;
use Livtoff\Laravel\Setup\Auth\CopyAuthTestsTask;
use Livtoff\Laravel\Setup\Auth\CopyAuthViewsTask;
use Livtoff\Laravel\Setup\Auth\PublishMigrationsTask;

class SetupAuth extends Setup
{
    /**
     * The tasks to run.
     *
     * @var array
     */
    protected $tasks = [
        CopyAuthControllersTask::class,
        CopyAuthRequestsTask::class,
        CopyAuthViewsTask::class,
        CopyAuthTestsTask::class,
        PublishMigrationsTask::class,
    ];

    /**
     * Create a new setup instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct($filesystem);
    }
}
