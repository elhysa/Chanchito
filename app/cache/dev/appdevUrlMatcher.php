<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AsistenciaController::showAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // ChanchitoBundle_homepage
        if ($pathinfo === '/listadoAsistencia') {
            return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AsistenciaController::showAction',  '_route' => 'ChanchitoBundle_homepage',);
        }

        // ChanchitoBundle_registro
        if ($pathinfo === '/registro') {
            return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AsistenciaController::newAction',  '_route' => 'ChanchitoBundle_registro',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\UsuarioController::loginAction',  '_route' => 'login',);
        }

        // login_check
        if ($pathinfo === '/check') {
            return array('_route' => 'login_check');
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // denegado
        if ($pathinfo === '/denegado') {
            return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\UsuarioController::denegadoAction',  '_route' => 'denegado',);
        }

        // admin_homepage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::listAction',  '_route' => 'admin_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/Param')) {
            // admin_param_list
            if ($pathinfo === '/admin/Param/list') {
                return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::listAction',  '_route' => 'admin_param_list',);
            }

            // admin_param_new
            if ($pathinfo === '/admin/Param/new') {
                return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::newAction',  '_route' => 'admin_param_new',);
            }

            // admin_param_edit
            if (0 === strpos($pathinfo, '/admin/Param/edit') && preg_match('#^/admin/Param/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::editAction',)), array('_route' => 'admin_param_edit'));
            }

            // admin_param_delete
            if (0 === strpos($pathinfo, '/admin/Param/delete') && preg_match('#^/admin/Param/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::deleteAction',)), array('_route' => 'admin_param_delete'));
            }

        }

        if (0 === strpos($pathinfo, '/admin/User')) {
            // admin_user_list
            if ($pathinfo === '/admin/User/list') {
                return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::listAction',  '_route' => 'admin_user_list',);
            }

            // admin_user_new
            if ($pathinfo === '/admin/User/new') {
                return array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_edit
            if (0 === strpos($pathinfo, '/admin/User/edit') && preg_match('#^/admin/User/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::editAction',)), array('_route' => 'admin_user_edit'));
            }

            // admin_user_delete
            if (0 === strpos($pathinfo, '/admin/User/delete') && preg_match('#^/admin/User/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::deleteAction',)), array('_route' => 'admin_user_delete'));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
