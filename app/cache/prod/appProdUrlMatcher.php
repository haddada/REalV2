<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
                    return array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchAction',  '_route' => 'offre_search',);
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
                if (preg_match('#^/offre/search/(?P<gouvernorat>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'offre_search_gouvern')), array (  '_controller' => 'sprint2\\realEstateBundle\\Controller\\OffreController::searchGouvernoratAction',));
                }

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

            if (0 === strpos($pathinfo, '/Admin/ajax')) {
                // AcmeHomeBundle_ajax_update_mydata
                if ($pathinfo === '/Admin/ajax') {
                    return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\AjaxController::updateDataAction',  '_route' => 'AcmeHomeBundle_ajax_update_mydata',);
                }

                // AcmeHomeBundle_ajax_update_mydatab
                if ($pathinfo === '/Admin/ajaxx') {
                    return array (  '_controller' => 'sprint2\\RealEstate\\AdminBundle\\Controller\\AjaxController::indexAction',  '_route' => 'AcmeHomeBundle_ajax_update_mydatab',);
                }

            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
