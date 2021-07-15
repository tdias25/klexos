<?php
declare(strict_types=1);

use App\Kernel\Http\Routing\AbstractRouter;
use App\Kernel\Http\Routing\Router;
use SebastianBergmann\CodeCoverage\TestCase;

class RouterTest extends TestCase
{
    /**
     * @var AbstractRouter
     */
    private $router;

    public function setUp(): void
    {
        $this->router = new Router;
    }

}
