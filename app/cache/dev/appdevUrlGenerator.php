<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'ChanchitoBundle_homepage' => true,
       'ChanchitoBundle_registro' => true,
       'login' => true,
       'login_check' => true,
       'logout' => true,
       'denegado' => true,
       'admin_homepage' => true,
       'ranking_monto' => true,
       'ranking_puntual' => true,
       'ranking_tarde' => true,
       'perfil' => true,
       'new_password' => true,
       'admin_param_list' => true,
       'admin_param_new' => true,
       'admin_param_edit' => true,
       'admin_param_delete' => true,
       'admin_user_list' => true,
       'admin_user_new' => true,
       'admin_user_edit' => true,
       'admin_user_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AsistenciaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getChanchitoBundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AsistenciaController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/listadoAsistencia',  ),));
    }

    private function getChanchitoBundle_registroRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AsistenciaController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/registro',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\UsuarioController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/check',  ),));
    }

    private function getlogoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getdenegadoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\UsuarioController::denegadoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/denegado',  ),));
    }

    private function getadmin_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getranking_montoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\RankingController::montoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ranking/monto',  ),));
    }

    private function getranking_puntualRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\RankingController::puntualAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ranking/puntual',  ),));
    }

    private function getranking_tardeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\RankingController::tardeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/ranking/tarde',  ),));
    }

    private function getperfilRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\UsuarioController::perfilAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/miperfil',  ),));
    }

    private function getnew_passwordRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\UsuarioController::passwordAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/miperfil/newpassword',  ),));
    }

    private function getadmin_param_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Param/list',  ),));
    }

    private function getadmin_param_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/Param/new',  ),));
    }

    private function getadmin_param_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Param/edit',  ),));
    }

    private function getadmin_param_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminParamController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/Param/delete',  ),));
    }

    private function getadmin_user_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::listAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/User/list',  ),));
    }

    private function getadmin_user_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/User/new',  ),));
    }

    private function getadmin_user_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/User/edit',  ),));
    }

    private function getadmin_user_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Chanchito\\ChanchitoBundle\\Controller\\AdminUsuarioController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/admin/User/delete',  ),));
    }
}
