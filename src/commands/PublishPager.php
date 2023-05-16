<?php

namespace Pager\Pager\Command;

use Illuminate\Console\Command;

class PublishPager extends Command{
    /**
     * The console command name.
     * 
     * @var string
     * 
     */

     protected $name = 'pager:publish';

     /**
      * The console command description 
      *
      *@var string
      */

      protected $description = 'Publish congigurations';

      public $composer;

      public function __construct()
      {
        parent::__construct();

        $this->composer = app()['composer'];
        
      }
}