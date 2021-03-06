<?php

namespace TrendingRepos\Controller;

use TrendingRepos\App;
use TrendingRepos\Core\Page;

abstract class AbstractController
{
    protected $config;

    public function __construct()
    {
        $this->config = (new App())->getRegistry('config');
    }
}
