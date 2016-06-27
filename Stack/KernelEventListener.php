<?php
/**
 * Thelia
 * KernelEventListener.php
 *
 * @author Jérôme Billiras <jbilliras@openstudio.fr>
 * Date: 2016-06-27
 * Time: 13:39
 */

namespace HttpsOffloading\Stack;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Class KernelEventListener
 */
class KernelEventListener implements HttpKernelInterface
{
    /** @var \Symfony\Component\HttpKernel\HttpKernelInterface  */
    protected $app;

    /**
     * Class constructor
     *
     * @param \Symfony\Component\HttpKernel\HttpKernelInterface $app
     */
    public function __construct(HttpKernelInterface $app)
    {
        $this->app = $app;
    }

    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        $request->server->set('HTTPS', 'on');

        return $this->app->handle($request, $type, $catch);
    }
}
