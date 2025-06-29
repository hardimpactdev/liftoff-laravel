<?php

namespace HardImpact\Liftoff\Setup;

use Illuminate\Filesystem\Filesystem;

class SetupDashboard extends Setup
{
    /**
     * The tasks to run.
     *
     * @var array
     */
    protected $tasks = [
        // CopyDashboardControllersTask::class,
        // CopyDashboardViewsTask::class,
        // AddDashboardRoutesTask::class,
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
