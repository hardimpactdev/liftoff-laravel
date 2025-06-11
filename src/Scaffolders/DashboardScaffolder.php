<?php

namespace Livtoff\Laravel\Scaffolders;

use Illuminate\Filesystem\Filesystem;

class DashboardScaffolder extends Scaffolder
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
     * Create a new scaffolder instance.
     *
     * @return void
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct($filesystem);
    }
}
