<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // cat_index
        if (preg_match('#^/(?P<page>\\d+)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_index')), array (  'page' => 1,  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/detail')) {
            // cat_detail
            if (preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cat_detail;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_detail')), array (  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::detailAction',));
            }
            not_cat_detail:

            // cat_detail_post
            if (preg_match('#^/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cat_detail_post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_detail_post')), array (  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::detailPostAction',));
            }
            not_cat_detail_post:

        }

        if (0 === strpos($pathinfo, '/modify')) {
            // cat_modify
            if (preg_match('#^/modify(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cat_modify;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_modify')), array (  'id' => 1,  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::modifyAction',));
            }
            not_cat_modify:

            // cat_modify_Post
            if (preg_match('#^/modify(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cat_modify_Post;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_modify_Post')), array (  'id' => 1,  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::modifyPostAction',));
            }
            not_cat_modify_Post:

        }

        // cat_delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_delete')), array (  'id' => 1,  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::deleteAction',));
        }

        // cat_add
        if ($pathinfo === '/add') {
            return array (  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::addAction',  '_route' => 'cat_add',);
        }

        // cat_categorie
        if (0 === strpos($pathinfo, '/categorie') && preg_match('#^/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'cat_categorie')), array (  '_controller' => 'Thierry\\CatalogueBundle\\Controller\\CatalogueController::categorieAction',));
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_index
            if (0 === strpos($pathinfo, '/blog/index') && preg_match('#^/blog/index(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_index')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',));
            }

            if (0 === strpos($pathinfo, '/blog/detail')) {
                // blog_detail
                if (preg_match('#^/blog/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_detail')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::detailAction',));
                }
                not_blog_detail:

                // blog_detail_post
                if (preg_match('#^/blog/detail/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_blog_detail_post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_detail_post')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::detailPostAction',));
                }
                not_blog_detail_post:

            }

            if (0 === strpos($pathinfo, '/blog/modify')) {
                // blog_modify
                if (preg_match('#^/blog/modify(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_blog_modify;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_modify')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::modifyAction',));
                }
                not_blog_modify:

                // blog_modify_Post
                if (preg_match('#^/blog/modify(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_blog_modify_Post;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_modify_Post')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::modifyPostAction',));
                }
                not_blog_modify_Post:

            }

            // blog_delete
            if (0 === strpos($pathinfo, '/blog/delete') && preg_match('#^/blog/delete(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_delete')), array (  'id' => 1,  '_controller' => 'AppBundle\\Controller\\BlogController::deleteAction',));
            }

            // blog_add
            if ($pathinfo === '/blog/add') {
                return array (  '_controller' => 'AppBundle\\Controller\\BlogController::addAction',  '_route' => 'blog_add',);
            }

            // blog_categorie
            if (0 === strpos($pathinfo, '/blog/categorie') && preg_match('#^/blog/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_categorie')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::categorieAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/categorie')) {
            // Admin_Categorie_index
            if (rtrim($pathinfo, '/') === '/admin/categorie') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_Admin_Categorie_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Admin_Categorie_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::indexAction',  '_route' => 'Admin_Categorie_index',);
            }
            not_Admin_Categorie_index:

            // Admin_Categorie_new
            if ($pathinfo === '/admin/categorie/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_Admin_Categorie_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\CategorieController::newAction',  '_route' => 'Admin_Categorie_new',);
            }
            not_Admin_Categorie_new:

            // Admin_Categorie_show
            if (preg_match('#^/admin/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_Admin_Categorie_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_Categorie_show')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::showAction',));
            }
            not_Admin_Categorie_show:

            // Admin_Categorie_edit
            if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_Admin_Categorie_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_Categorie_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::editAction',));
            }
            not_Admin_Categorie_edit:

            // Admin_Categorie_delete
            if (preg_match('#^/admin/categorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_Admin_Categorie_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Admin_Categorie_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategorieController::deleteAction',));
            }
            not_Admin_Categorie_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
