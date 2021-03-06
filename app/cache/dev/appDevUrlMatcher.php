<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/fe73499')) {
                // _assetic_fe73499
                if ($pathinfo === '/js/fe73499.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe73499',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fe73499',);
                }

                // _assetic_fe73499_0
                if ($pathinfo === '/js/fe73499_jquery-ui-1.10.3.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe73499',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fe73499_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/baaaf1f')) {
                // _assetic_baaaf1f
                if ($pathinfo === '/js/baaaf1f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'baaaf1f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_baaaf1f',);
                }

                // _assetic_baaaf1f_0
                if ($pathinfo === '/js/baaaf1f_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'baaaf1f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_baaaf1f_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/e9621f5')) {
                // _assetic_e9621f5
                if ($pathinfo === '/js/e9621f5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9621f5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e9621f5',);
                }

                // _assetic_e9621f5_0
                if ($pathinfo === '/js/e9621f5_morris.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e9621f5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e9621f5_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/624220c')) {
                // _assetic_624220c
                if ($pathinfo === '/js/624220c.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '624220c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_624220c',);
                }

                // _assetic_624220c_0
                if ($pathinfo === '/js/624220c_jquery.sparkline.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '624220c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_624220c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/8d915b9')) {
                // _assetic_8d915b9
                if ($pathinfo === '/js/8d915b9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8d915b9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_8d915b9',);
                }

                if (0 === strpos($pathinfo, '/js/8d915b9_part_1_jquery-jvectormap-')) {
                    // _assetic_8d915b9_0
                    if ($pathinfo === '/js/8d915b9_part_1_jquery-jvectormap-1.2.2.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8d915b9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_8d915b9_0',);
                    }

                    // _assetic_8d915b9_1
                    if ($pathinfo === '/js/8d915b9_part_1_jquery-jvectormap-world-mill-en_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '8d915b9',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_8d915b9_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/cceb623')) {
                // _assetic_cceb623
                if ($pathinfo === '/js/cceb623.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cceb623',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cceb623',);
                }

                // _assetic_cceb623_0
                if ($pathinfo === '/js/cceb623_jquery.knob_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cceb623',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cceb623_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/006a18b')) {
                // _assetic_006a18b
                if ($pathinfo === '/js/006a18b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '006a18b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_006a18b',);
                }

                // _assetic_006a18b_0
                if ($pathinfo === '/js/006a18b_daterangepicker_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '006a18b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_006a18b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/339b57c')) {
                // _assetic_339b57c
                if ($pathinfo === '/js/339b57c.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '339b57c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_339b57c',);
                }

                // _assetic_339b57c_0
                if ($pathinfo === '/js/339b57c_bootstrap-datepicker_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '339b57c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_339b57c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/c27571a')) {
                // _assetic_c27571a
                if ($pathinfo === '/js/c27571a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c27571a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c27571a',);
                }

                // _assetic_c27571a_0
                if ($pathinfo === '/js/c27571a_bootstrap3-wysihtml5.all.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c27571a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c27571a_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/39a9c7a')) {
                // _assetic_39a9c7a
                if ($pathinfo === '/js/39a9c7a.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '39a9c7a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_39a9c7a',);
                }

                // _assetic_39a9c7a_0
                if ($pathinfo === '/js/39a9c7a_icheck.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '39a9c7a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_39a9c7a_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/46df233')) {
                // _assetic_46df233
                if ($pathinfo === '/js/46df233.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '46df233',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_46df233',);
                }

                // _assetic_46df233_0
                if ($pathinfo === '/js/46df233_app_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '46df233',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_46df233_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1')) {
                if (0 === strpos($pathinfo, '/js/18a4e75')) {
                    // _assetic_18a4e75
                    if ($pathinfo === '/js/18a4e75.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '18a4e75',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_18a4e75',);
                    }

                    // _assetic_18a4e75_0
                    if ($pathinfo === '/js/18a4e75_dashboard_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '18a4e75',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_18a4e75_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/197bf33')) {
                    // _assetic_197bf33
                    if ($pathinfo === '/js/197bf33.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '197bf33',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_197bf33',);
                    }

                    // _assetic_197bf33_0
                    if ($pathinfo === '/js/197bf33_demo_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '197bf33',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_197bf33_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/fe17ce1')) {
                // _assetic_fe17ce1
                if ($pathinfo === '/js/fe17ce1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_fe17ce1',);
                }

                if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_')) {
                    if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_bootstrap')) {
                        // _assetic_fe17ce1_0
                        if ($pathinfo === '/js/fe17ce1_part_1_bootstrap_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_0',);
                        }

                        // _assetic_fe17ce1_1
                        if ($pathinfo === '/js/fe17ce1_part_1_bootstrap.min_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_1',);
                        }

                    }

                    // _assetic_fe17ce1_2
                    if ($pathinfo === '/js/fe17ce1_part_1_charisma_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_init')) {
                        // _assetic_fe17ce1_3
                        if ($pathinfo === '/js/fe17ce1_part_1_init-chart_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_3',);
                        }

                        // _assetic_fe17ce1_4
                        if ($pathinfo === '/js/fe17ce1_part_1_init_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_4',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_jquery')) {
                        if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_jquery-ui-1.10.3')) {
                            // _assetic_fe17ce1_5
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery-ui-1.10.3_6.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_5',);
                            }

                            // _assetic_fe17ce1_6
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery-ui-1.10.3.min_7.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_6',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_jquery.')) {
                            // _assetic_fe17ce1_7
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.autogrow-textarea_8.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_7',);
                            }

                            // _assetic_fe17ce1_8
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.cookie_9.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_8',);
                            }

                            // _assetic_fe17ce1_9
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.dataTables.min_10.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_9',);
                            }

                            // _assetic_fe17ce1_10
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.history_11.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_10',);
                            }

                            // _assetic_fe17ce1_11
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.iphone.toggle_12.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_11',);
                            }

                            // _assetic_fe17ce1_12
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.min_13.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_12',);
                            }

                            // _assetic_fe17ce1_13
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.noty_14.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_13',);
                            }

                            // _assetic_fe17ce1_14
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.raty.min_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_14',);
                            }

                            if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_jquery.scroll')) {
                                // _assetic_fe17ce1_15
                                if ($pathinfo === '/js/fe17ce1_part_1_jquery.scrolly.min_16.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_15',);
                                }

                                // _assetic_fe17ce1_16
                                if ($pathinfo === '/js/fe17ce1_part_1_jquery.scrollzer.min_17.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_16',);
                                }

                            }

                            // _assetic_fe17ce1_17
                            if ($pathinfo === '/js/fe17ce1_part_1_jquery.uploadify-3.1.min_18.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_17',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/js/fe17ce1_part_1_skel')) {
                        // _assetic_fe17ce1_18
                        if ($pathinfo === '/js/fe17ce1_part_1_skel-layers.min_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_18',);
                        }

                        // _assetic_fe17ce1_19
                        if ($pathinfo === '/js/fe17ce1_part_1_skel.min_20.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'fe17ce1',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_fe17ce1_19',);
                        }

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/orbit')) {
            // furiesorbit_homepage
            if ($pathinfo === '/orbit') {
                return array (  '_controller' => 'furies\\orbitBundle\\Controller\\DefaultController::indexAction',  '_route' => 'furiesorbit_homepage',);
            }

            if (0 === strpos($pathinfo, '/orbit/secured/log')) {
                if (0 === strpos($pathinfo, '/orbit/secured/login')) {
                    // _orbit_login
                    if ($pathinfo === '/orbit/secured/login') {
                        return array (  '_controller' => 'furies\\orbitBundle\\Controller\\SecuredController::loginAction',  '_route' => '_orbit_login',);
                    }

                    // _orbit_security_check
                    if ($pathinfo === '/orbit/secured/login_check') {
                        return array (  '_controller' => 'furies\\orbitBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_orbit_security_check',);
                    }

                }

                // _orbit_logout
                if ($pathinfo === '/orbit/secured/logout') {
                    return array (  '_controller' => 'furies\\orbitBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_orbit_logout',);
                }

            }

            // _orbit_customer_newcustomer
            if ($pathinfo === '/orbit/customer/newcustomer') {
                return array (  '_controller' => 'furies\\orbitBundle\\Controller\\customerController::newcustomerAction',  '_route' => '_orbit_customer_newcustomer',);
            }

            // _orbit
            if ($pathinfo === '/orbit') {
                return array (  '_controller' => 'furies\\orbitBundle\\Controller\\DefaultController::indexAction',  '_route' => '_orbit',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
