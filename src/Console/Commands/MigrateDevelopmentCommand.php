<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateDevelopmentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:dev';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new database, migrate all table, seed the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('db:create');
        $this->call('migrate:fresh');
 	$this->call('db:seed');
    }
}
