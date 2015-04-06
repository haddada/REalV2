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

        if (0 === strpos($pathinfo, '/css/bootstrap')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            if (0 === strpos($pathinfo, '/css/bootstrap_')) {
                // _assetic_bootstrap_css_0
                if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                }

                // _assetic_bootstrap_css_1
                if ($pathinfo === '/css/bootstrap_form_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/bootstrap')) {
                // _assetic_bootstrap_js
                if ($pathinfo === '/js/bootstrap.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                }

                if (0 === strpos($pathinfo, '/js/bootstrap_')) {
                    // _assetic_bootstrap_js_0
                    if ($pathinfo === '/js/bootstrap_transition_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                    }

                    // _assetic_bootstrap_js_1
                    if ($pathinfo === '/js/bootstrap_alert_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                    }

                    // _assetic_bootstrap_js_2
                    if ($pathinfo === '/js/bootstrap_button_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                    }

                    if (0 === strpos($pathinfo, '/js/bootstrap_c')) {
                        // _assetic_bootstrap_js_3
                        if ($pathinfo === '/js/bootstrap_carousel_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                        }

                        // _assetic_bootstrap_js_4
                        if ($pathinfo === '/js/bootstrap_collapse_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                        }

                    }

                    // _assetic_bootstrap_js_5
                    if ($pathinfo === '/js/bootstrap_dropdown_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                    }

                    // _assetic_bootstrap_js_6
                    if ($pathinfo === '/js/bootstrap_modal_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                    }

                    // _assetic_bootstrap_js_7
                    if ($pathinfo === '/js/bootstrap_tooltip_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                    }

                    // _assetic_bootstrap_js_8
                    if ($pathinfo === '/js/bootstrap_popover_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                    }

                    // _assetic_bootstrap_js_9
                    if ($pathinfo === '/js/bootstrap_scrollspy_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                    }

                    // _assetic_bootstrap_js_10
                    if ($pathinfo === '/js/bootstrap_tab_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                    }

                    // _assetic_bootstrap_js_11
                    if ($pathinfo === '/js/bootstrap_affix_12.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                    }

                    // _assetic_bootstrap_js_12
                    if ($pathinfo === '/js/bootstrap_bc-bootstrap-collection_13.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/jquery')) {
                // _assetic_jquery
                if ($pathinfo === '/js/jquery.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                }

                // _assetic_jquery_0
                if ($pathinfo === '/js/jquery_jquery-1.10.2_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // real_estate_authentification_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'real_estate_authentification_homepage')), array (  '_controller' => 'RealEstate\\AuthentificationBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/adresse')) {
            // adresse
            if (rtrim($pathinfo, '/') === '/adresse') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adresse');
                }

                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::indexAction',  '_route' => 'adresse',);
            }

            // adresse_show
            if (preg_match('#^/adresse/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_show')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::showAction',));
            }

            // adresse_new
            if ($pathinfo === '/adresse/new') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::newAction',  '_route' => 'adresse_new',);
            }

            // adresse_create
            if ($pathinfo === '/adresse/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adresse_create;
                }

                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::createAction',  '_route' => 'adresse_create',);
            }
            not_adresse_create:

            // adresse_edit
            if (preg_match('#^/adresse/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_edit')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::editAction',));
            }

            // adresse_update
            if (preg_match('#^/adresse/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adresse_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_update')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::updateAction',));
            }
            not_adresse_update:

            // adresse_delete
            if (preg_match('#^/adresse/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adresse_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adresse_delete')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdresseController::deleteAction',));
            }
            not_adresse_delete:

        }

        if (0 === strpos($pathinfo, '/offre')) {
            // offre
            if (rtrim($pathinfo, '/') === '/offre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'offre');
                }

                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::indexAction',  '_route' => 'offre',);
            }

            // offre_show
            if (preg_match('#^/offre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_show')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::showAction',));
            }

            // offre_new
            if ($pathinfo === '/offre/new') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::newAction',  '_route' => 'offre_new',);
            }

            // offre_create
            if ($pathinfo === '/offre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_offre_create;
                }

                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::createAction',  '_route' => 'offre_create',);
            }
            not_offre_create:

            // offre_edit
            if (preg_match('#^/offre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_edit')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::editAction',));
            }

            // offre_update
            if (preg_match('#^/offre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_offre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_update')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::updateAction',));
            }
            not_offre_update:

            // offre_delete
            if (preg_match('#^/offre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_offre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_delete')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::deleteAction',));
            }
            not_offre_delete:

            if (0 === strpos($pathinfo, '/offre/search')) {
                // offre_search
                if ($pathinfo === '/offre/search') {
                    return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchGouvernoratAction',  '_route' => 'offre_search',);
                }

                // offre_search_type
                if (preg_match('#^/offre/search/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_search_type')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchByTypeAction',));
                }

                // offre_search_prix
                if (preg_match('#^/offre/search/(?P<prix>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_search_prix')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchByPriceAction',));
                }

                // offre_search_gerant
                if (preg_match('#^/offre/search/(?P<id_gerant>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_search_gerant')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchByGerantAction',));
                }

                // offre_search_gouvern
                if (rtrim($pathinfo, '/') === '/offre/search/gouvernorat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'offre_search_gouvern');
                    }

                    return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchGouvernoratAction',  '_route' => 'offre_search_gouvern',);
                }

            }

            // offre_search_ville
            if ($pathinfo === '/offre/ville/gouvernorat') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchVilleAction',  '_route' => 'offre_search_ville',);
            }

            // offre_search_code
            if ($pathinfo === '/offre/code/ville') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchCodeAction',  '_route' => 'offre_search_code',);
            }

            // vote_add
            if (preg_match('#^/offre/(?P<id>[^/]++)/show/note$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vote_add')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\VoteController::createAction',));
            }

        }

        // real_estate_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'real_estate_homepage');
            }

            return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\DefaultController::indexAction',  '_route' => 'real_estate_homepage',);
        }

        if (0 === strpos($pathinfo, '/ad')) {
            // real_estate_admins
            if ($pathinfo === '/admins') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::afficherAdminsAction',  '_route' => 'real_estate_admins',);
            }

            // real_estate_ajoutAdmin
            if ($pathinfo === '/addAdmin') {
                return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::ajouterAdminAction',  '_route' => 'real_estate_ajoutAdmin',);
            }

        }

        // real_estate_dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\AdministrateurController::afficherAdminsAction',  '_route' => 'real_estate_dashboard',);
        }

        // offre_search_ajax
        if ($pathinfo === '/search/search_results') {
            return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchAjaxAction',  '_route' => 'offre_search_ajax',);
        }

        if (0 === strpos($pathinfo, '/Admin')) {
            // sprint2_real_estate_admin_homepage
            if (rtrim($pathinfo, '/') === '/Admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sprint2_real_estate_admin_homepage');
                }

                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'sprint2_real_estate_admin_homepage',);
            }

            // sprint2_real_estate_admin_mailbox
            if ($pathinfo === '/Admin/MailBox') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::mailAction',  '_route' => 'sprint2_real_estate_admin_mailbox',);
            }

            if (0 === strpos($pathinfo, '/Admin/C')) {
                // sprint2_real_estate_admin_sentmail
                if ($pathinfo === '/Admin/ComposeMail') {
                    return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::sentAction',  '_route' => 'sprint2_real_estate_admin_sentmail',);
                }

                if (0 === strpos($pathinfo, '/Admin/Clients')) {
                    // sprint2_real_estate_admin_clients
                    if ($pathinfo === '/Admin/Clients') {
                        return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::clientsAction',  '_route' => 'sprint2_real_estate_admin_clients',);
                    }

                    // sprint2_real_estate_admin_clients_supp
                    if (preg_match('#^/Admin/Clients/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint2_real_estate_admin_clients_supp')), array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::supprimerUCAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Admin/Gerants')) {
                // sprint2_real_estate_admin_gerants
                if ($pathinfo === '/Admin/Gerants') {
                    return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::gerantsAction',  '_route' => 'sprint2_real_estate_admin_gerants',);
                }

                // sprint2_real_estate_admin_gerants_supp
                if (preg_match('#^/Admin/Gerants/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint2_real_estate_admin_gerants_supp')), array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::supprimerUGAction',));
                }

            }

            // sprint2_real_estate_admin_offres
            if ($pathinfo === '/Admin/Offres') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::offresAction',  '_route' => 'sprint2_real_estate_admin_offres',);
            }

            if (0 === strpos($pathinfo, '/Admin/Agences')) {
                // sprint2_real_estate_admin_agence
                if ($pathinfo === '/Admin/Agences') {
                    return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::agenceAction',  '_route' => 'sprint2_real_estate_admin_agence',);
                }

                // sprint2_real_estate_admin_agence_supp
                if (preg_match('#^/Admin/Agences/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint2_real_estate_admin_agence_supp')), array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::supprimerAAction',));
                }

            }

            // sprint2_real_estate_admin_ajax_get_mail_list_ofclient
            if (0 === strpos($pathinfo, '/Admin/ajax') && preg_match('#^/Admin/ajax/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sprint2_real_estate_admin_ajax_get_mail_list_ofclient')), array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\AjaxController::getListOfMailAction',));
            }

            // file_file_homepage
            if ($pathinfo === '/Admin/upload') {
                return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'file_file_homepage',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // dcs_rating_add_vote
        if (0 === strpos($pathinfo, '/dcs/vote/add') && preg_match('#^/dcs/vote/add/(?P<id>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dcs_rating_add_vote')), array (  '_controller' => 'DCS\\RatingBundle\\Controller\\RatingController::addVoteAction',));
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
