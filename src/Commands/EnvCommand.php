<?php

namespace Jc91715\Env\Commands;

use Illuminate\Console\Command;



class EnvCommand extends Command
{

    /**
     * The console command name!
     *
     * @var string
     */
    protected $name = 'make:env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '网站配置文件';

    public function __construct( )
    {
        parent::__construct();

    }

    public function handle()
    {

        $this->makeController();
        $this->makeRoute();
        $this->makeViews();


    }


    private function makeController()
    {
        file_put_contents(
            base_path('app/Http/Controllers/EnvController.php'),
            file_get_contents(__DIR__.'/../../controllers/EnvController.stub'),
            FILE_APPEND
        );
    }


    private function makeViews()
    {
        file_put_contents(
            base_path('resources/views/env.blade.php'),
            file_get_contents(__DIR__.'/../../views/env.blade.php'),
            FILE_APPEND
        );
    }


    private function makeRoute()
    {
        file_put_contents(
            base_path('routes/web.php'),
            file_get_contents(__DIR__.'/../../routes.stub'),
            FILE_APPEND
        );
    }



}
