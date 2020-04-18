<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // _assetic_b9d69e8
        if ('/js/fp_js_formvalidator.js' === $pathinfo) {
            return array (  '_controller' => 'assetic.controller:render',  'name' => 'b9d69e8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b9d69e8',);
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/formation')) {
            // formation_homepage
            if ('/formation' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'FormationBundle\\Controller\\DefaultController::indexAction',  '_route' => 'formation_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_formation_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'formation_homepage'));
                }

                return $ret;
            }
            not_formation_homepage:

            if (0 === strpos($pathinfo, '/formation/list')) {
                // formation_list
                if ('/formation/list' === $pathinfo) {
                    return array (  '_controller' => 'FormationBundle\\Controller\\FormationController::listFormationAction',  '_route' => 'formation_list',);
                }

                // theemes_list
                if ('/formation/listtheemes' === $pathinfo) {
                    return array (  '_controller' => 'FormationBundle\\Controller\\TheemesController::listFormationAction',  '_route' => 'theemes_list',);
                }

                // formation_listFront
                if (0 === strpos($pathinfo, '/formation/list1') && preg_match('#^/formation/list1/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'formation_listFront']), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::listFormation1Action',));
                }

                // Postulation_list
                if ('/formation/listpostulation' === $pathinfo) {
                    return array (  '_controller' => 'FormationBundle\\Controller\\PostulationController::listPostulationAction',  '_route' => 'Postulation_list',);
                }

            }

            elseif (0 === strpos($pathinfo, '/formation/add')) {
                // formation_add
                if ('/formation/add' === $pathinfo) {
                    return array (  '_controller' => 'FormationBundle\\Controller\\FormationController::addAction',  '_route' => 'formation_add',);
                }

                // theemes_add
                if ('/formation/addtheemes' === $pathinfo) {
                    return array (  '_controller' => 'FormationBundle\\Controller\\TheemesController::addAction',  '_route' => 'theemes_add',);
                }

            }

            elseif (0 === strpos($pathinfo, '/formation/delete')) {
                // formation_delete
                if (preg_match('#^/formation/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'formation_delete']), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::deleteAction',));
                }

                // theemes_delete
                if (0 === strpos($pathinfo, '/formation/deletetheemes') && preg_match('#^/formation/deletetheemes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'theemes_delete']), array (  '_controller' => 'FormationBundle\\Controller\\TheemesController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/formation/update')) {
                // formation_update
                if (preg_match('#^/formation/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'formation_update']), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::updateAction',));
                }

                // theemes_update
                if (0 === strpos($pathinfo, '/formation/updatetheemes') && preg_match('#^/formation/updatetheemes/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'theemes_update']), array (  '_controller' => 'FormationBundle\\Controller\\TheemesController::updateAction',));
                }

            }

            // pdf
            if (0 === strpos($pathinfo, '/formation/pdf') && preg_match('#^/formation/pdf/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'pdf']), array (  '_controller' => 'FormationBundle\\Controller\\FormationController::pdfAction',));
            }

        }

        // fp_js_form_validator.check_unique_entity
        if ('/fp_js_form_validator/check_unique_entity' === $pathinfo) {
            return array (  '_controller' => 'Fp\\JsFormValidatorBundle\\Controller\\AjaxController::checkUniqueEntityAction',  '_route' => 'fp_js_form_validator.check_unique_entity',);
        }

        if (0 === strpos($pathinfo, '/Back')) {
            // back_homepage
            if ('/Back' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'BackBundle\\Controller\\DefaultController::reservations_allAction',  '_route' => 'back_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_back_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'back_homepage'));
                }

                return $ret;
            }
            not_back_homepage:

            // taxis_back
            if ('/Back/taxi' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::taxisAction',  '_route' => 'taxis_back',);
            }

            // taxibackshow
            if (preg_match('#^/Back/(?P<id>[^/]++)/showT$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxibackshow']), array (  '_controller' => 'BackBundle\\Controller\\DefaultController::taxiAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_taxibackshow;
                }

                return $ret;
            }
            not_taxibackshow:

            // transports_back
            if ('/Back/transport' === $pathinfo) {
                return array (  '_controller' => 'BackBundle\\Controller\\DefaultController::transportsAction',  '_route' => 'transports_back',);
            }

            // transportbackshow
            if (preg_match('#^/Back/(?P<id>[^/]++)/showTr$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'transportbackshow']), array (  '_controller' => 'BackBundle\\Controller\\DefaultController::transportAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_transportbackshow;
                }

                return $ret;
            }
            not_transportbackshow:

        }

        // type_homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'TypeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'type_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_type_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'type_homepage'));
            }

            return $ret;
        }
        not_type_homepage:

        // type_ajout
        if (0 === strpos($pathinfo, '/ajout') && preg_match('#^/ajout/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'type_ajout']), array (  '_controller' => 'TypeBundle\\Controller\\TypeController::AjoutAction',));
        }

        if (0 === strpos($pathinfo, '/api/threads')) {
            // fos_comment_new_threads
            if (0 === strpos($pathinfo, '/api/threads/new') && preg_match('#^/api/threads/new(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_new_threads']), array (  '_controller' => 'fos_comment.controller.thread:newThreadsAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_new_threads;
                }

                return $ret;
            }
            not_fos_comment_new_threads:

            // fos_comment_edit_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable/edit(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_edit_thread_commentable']), array (  '_controller' => 'fos_comment.controller.thread:editThreadCommentableAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_edit_thread_commentable;
                }

                return $ret;
            }
            not_fos_comment_edit_thread_commentable:

            // fos_comment_new_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/new(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_new_thread_comments']), array (  '_controller' => 'fos_comment.controller.thread:newThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_new_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_new_thread_comments:

            // fos_comment_remove_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/remove(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_remove_thread_comment']), array (  '_controller' => 'fos_comment.controller.thread:removeThreadCommentAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_remove_thread_comment;
                }

                return $ret;
            }
            not_fos_comment_remove_thread_comment:

            // fos_comment_edit_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/edit(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_edit_thread_comment']), array (  '_controller' => 'fos_comment.controller.thread:editThreadCommentAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_edit_thread_comment;
                }

                return $ret;
            }
            not_fos_comment_edit_thread_comment:

            // fos_comment_new_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes/new(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_new_thread_comment_votes']), array (  '_controller' => 'fos_comment.controller.thread:newThreadCommentVotesAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_new_thread_comment_votes;
                }

                return $ret;
            }
            not_fos_comment_new_thread_comment_votes:

            // fos_comment_get_thread
            if (preg_match('#^/api/threads/(?P<id>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_get_thread']), array (  '_controller' => 'fos_comment.controller.thread:getThreadAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_get_thread;
                }

                return $ret;
            }
            not_fos_comment_get_thread:

            // fos_comment_get_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_get_threads']), array (  '_controller' => 'fos_comment.controller.thread:getThreadsActions',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_get_threads;
                }

                return $ret;
            }
            not_fos_comment_get_threads:

            // fos_comment_post_threads
            if (preg_match('#^/api/threads(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_post_threads']), array (  '_controller' => 'fos_comment.controller.thread:postThreadsAction',  '_format' => 'html',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_comment_post_threads;
                }

                return $ret;
            }
            not_fos_comment_post_threads:

            // fos_comment_patch_thread_commentable
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/commentable(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_patch_thread_commentable']), array (  '_controller' => 'fos_comment.controller.thread:patchThreadCommentableAction',  '_format' => 'html',));
                if (!in_array($requestMethod, ['PATCH'])) {
                    $allow = array_merge($allow, ['PATCH']);
                    goto not_fos_comment_patch_thread_commentable;
                }

                return $ret;
            }
            not_fos_comment_patch_thread_commentable:

            // fos_comment_get_thread_comment
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_get_thread_comment']), array (  '_controller' => 'fos_comment.controller.thread:getThreadCommentAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_get_thread_comment;
                }

                return $ret;
            }
            not_fos_comment_get_thread_comment:

            // fos_comment_patch_thread_comment_state
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/state(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_patch_thread_comment_state']), array (  '_controller' => 'fos_comment.controller.thread:patchThreadCommentStateAction',  '_format' => 'html',));
                if (!in_array($requestMethod, ['PATCH'])) {
                    $allow = array_merge($allow, ['PATCH']);
                    goto not_fos_comment_patch_thread_comment_state;
                }

                return $ret;
            }
            not_fos_comment_patch_thread_comment_state:

            // fos_comment_put_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/\\.]++)(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_put_thread_comments']), array (  '_controller' => 'fos_comment.controller.thread:putThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($requestMethod, ['PUT'])) {
                    $allow = array_merge($allow, ['PUT']);
                    goto not_fos_comment_put_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_put_thread_comments:

            // fos_comment_get_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_get_thread_comments']), array (  '_controller' => 'fos_comment.controller.thread:getThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_get_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_get_thread_comments:

            // fos_comment_post_thread_comments
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_post_thread_comments']), array (  '_controller' => 'fos_comment.controller.thread:postThreadCommentsAction',  '_format' => 'html',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_comment_post_thread_comments;
                }

                return $ret;
            }
            not_fos_comment_post_thread_comments:

            // fos_comment_get_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_get_thread_comment_votes']), array (  '_controller' => 'fos_comment.controller.thread:getThreadCommentVotesAction',  '_format' => 'html',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_comment_get_thread_comment_votes;
                }

                return $ret;
            }
            not_fos_comment_get_thread_comment_votes:

            // fos_comment_post_thread_comment_votes
            if (preg_match('#^/api/threads/(?P<id>[^/]++)/comments/(?P<commentId>[^/]++)/votes(?:\\.(?P<_format>json|xml|html))?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_comment_post_thread_comment_votes']), array (  '_controller' => 'fos_comment.controller.thread:postThreadCommentVotesAction',  '_format' => 'html',));
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_comment_post_thread_comment_votes;
                }

                return $ret;
            }
            not_fos_comment_post_thread_comment_votes:

        }

        // type_modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, ['_route' => 'type_modifier']), array (  '_controller' => 'TypeBundle\\Controller\\TypeController::ModifierAction',));
        }

        if (0 === strpos($pathinfo, '/InscriptionsCovoiturage')) {
            // inscriptions_covoiturage_homepage
            if ('/InscriptionsCovoiturage/rechercher' === $pathinfo) {
                return array (  '_controller' => 'InscriptionsCovoiturageBundle\\Controller\\InscriptionsCovoiturageController::RechercherAction',  '_route' => 'inscriptions_covoiturage_homepage',);
            }

            // inscriptions_covoiturage_resultat
            if (0 === strpos($pathinfo, '/InscriptionsCovoiturage/resultat') && preg_match('#^/InscriptionsCovoiturage/resultat/(?P<departLower>[^/]++)/(?P<arriveLower>[^/]++)/(?P<newDate>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'inscriptions_covoiturage_resultat']), array (  '_controller' => 'InscriptionsCovoiturageBundle\\Controller\\InscriptionsCovoiturageController::ResultatAction',));
            }

            // ajouter_inscription
            if (0 === strpos($pathinfo, '/InscriptionsCovoiturage/ajouter') && preg_match('#^/InscriptionsCovoiturage/ajouter/(?P<id_offre>[^/]++)/(?P<id_conducteur>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'ajouter_inscription']), array (  '_controller' => 'InscriptionsCovoiturageBundle\\Controller\\InscriptionsCovoiturageController::AjoutAction',));
            }

            // inscriptions_covoiturage_supprimer
            if (0 === strpos($pathinfo, '/InscriptionsCovoiturage/annuler') && preg_match('#^/InscriptionsCovoiturage/annuler/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'inscriptions_covoiturage_supprimer']), array (  '_controller' => 'InscriptionsCovoiturageBundle\\Controller\\InscriptionsCovoiturageController::SupprimerAction',));
            }

            // inscriptions_covoiturage_mesinscriptions
            if ('/InscriptionsCovoiturage/mesInscriptions' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'InscriptionsCovoiturageBundle\\Controller\\InscriptionsCovoiturageController::ListInscriptionsAction',  '_route' => 'inscriptions_covoiturage_mesinscriptions',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_inscriptions_covoiturage_mesinscriptions;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'inscriptions_covoiturage_mesinscriptions'));
                }

                return $ret;
            }
            not_inscriptions_covoiturage_mesinscriptions:

            // inscriptions_covoiturage_details
            if (0 === strpos($pathinfo, '/InscriptionsCovoiturage/details') && preg_match('#^/InscriptionsCovoiturage/details/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'inscriptions_covoiturage_details']), array (  '_controller' => 'InscriptionsCovoiturageBundle\\Controller\\InscriptionsCovoiturageController::DetailsAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/garage')) {
            // garage_homepage
            if ('/garage' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'GarageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'garage_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_garage_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'garage_homepage'));
                }

                return $ret;
            }
            not_garage_homepage:

            // garage_add
            if ('/garage/addVtoG' === $pathinfo) {
                return array (  '_controller' => 'GarageBundle\\Controller\\GarageController::addAction',  '_route' => 'garage_add',);
            }

        }

        elseif (0 === strpos($pathinfo, '/taxi')) {
            // taxi_homepage
            if ('/taxi' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'TaxiBundle\\Controller\\DefaultController::indexAction',  '_route' => 'taxi_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_taxi_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'taxi_homepage'));
                }

                return $ret;
            }
            not_taxi_homepage:

            // ajout_reservation_taxi
            if ('/taxi/ajout' === $pathinfo) {
                return array (  '_controller' => 'TaxiBundle\\Controller\\DefaultController::ajoutAction',  '_route' => 'ajout_reservation_taxi',);
            }

            // taxi_modifier
            if (0 === strpos($pathinfo, '/taxi/modifier') && preg_match('#^/taxi/modifier/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_modifier']), array (  '_controller' => 'TaxiBundle\\Controller\\DefaultController::modifierAction',));
            }

            // taxi_show
            if (preg_match('#^/taxi/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_show']), array (  '_controller' => 'TaxiBundle\\Controller\\DefaultController::showAction',));
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_taxi_show;
                }

                return $ret;
            }
            not_taxi_show:

            // taxi_delete
            if (preg_match('#^/taxi/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'taxi_delete']), array (  '_controller' => 'TaxiBundle\\Controller\\DefaultController::deleteAction',));
                if (!in_array($requestMethod, ['DELETE'])) {
                    $allow = array_merge($allow, ['DELETE']);
                    goto not_taxi_delete;
                }

                return $ret;
            }
            not_taxi_delete:

        }

        elseif (0 === strpos($pathinfo, '/transport')) {
            // transport_homepage
            if ('/transport' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'TransportBundle\\Controller\\ReservationController::indexAction',  '_route' => 'transport_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_transport_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'transport_homepage'));
                }

                return $ret;
            }
            not_transport_homepage:

            if (0 === strpos($pathinfo, '/transport/reservation')) {
                // reservation_index
                if ('/transport/reservation' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'TransportBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_reservation_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reservation_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_index;
                    }

                    return $ret;
                }
                not_reservation_index:

                // reservation_show
                if (preg_match('#^/transport/reservation/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_show']), array (  '_controller' => 'TransportBundle\\Controller\\ReservationController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_reservation_show;
                    }

                    return $ret;
                }
                not_reservation_show:

                // reservation_new
                if ('/transport/reservation/new' === $pathinfo) {
                    $ret = array (  '_controller' => 'TransportBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_reservation_new;
                    }

                    return $ret;
                }
                not_reservation_new:

                // reservation_edit
                if (preg_match('#^/transport/reservation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_edit']), array (  '_controller' => 'TransportBundle\\Controller\\ReservationController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_reservation_edit;
                    }

                    return $ret;
                }
                not_reservation_edit:

                // reservation_delete
                if (preg_match('#^/transport/reservation/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'reservation_delete']), array (  '_controller' => 'TransportBundle\\Controller\\ReservationController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_reservation_delete;
                    }

                    return $ret;
                }
                not_reservation_delete:

            }

            elseif (0 === strpos($pathinfo, '/transport/meuble')) {
                // meuble_index
                if ('/transport/meuble' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'EntitiesBundle:Meuble:index',  '_route' => 'meuble_index',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_meuble_index;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'meuble_index'));
                    }

                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_meuble_index;
                    }

                    return $ret;
                }
                not_meuble_index:

                // meuble_show
                if (preg_match('#^/transport/meuble/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'meuble_show']), array (  '_controller' => 'TransportBundle\\Controller\\MeubleController::showAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_meuble_show;
                    }

                    return $ret;
                }
                not_meuble_show:

                if (0 === strpos($pathinfo, '/transport/meuble/new')) {
                    // meuble_new
                    if ('/transport/meuble/new' === $pathinfo) {
                        $ret = array (  '_controller' => 'TransportBundle\\Controller\\MeubleController::newAction',  '_route' => 'meuble_new',);
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_meuble_new;
                        }

                        return $ret;
                    }
                    not_meuble_new:

                    // meuble_newRes
                    if (preg_match('#^/transport/meuble/new/(?P<res>[^/]++)$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'meuble_newRes']), array (  '_controller' => 'TransportBundle\\Controller\\MeubleController::newResAction',));
                        if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                            $allow = array_merge($allow, ['GET', 'POST']);
                            goto not_meuble_newRes;
                        }

                        return $ret;
                    }
                    not_meuble_newRes:

                }

                // meuble_edit
                if (preg_match('#^/transport/meuble/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'meuble_edit']), array (  '_controller' => 'TransportBundle\\Controller\\MeubleController::editAction',));
                    if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                        $allow = array_merge($allow, ['GET', 'POST']);
                        goto not_meuble_edit;
                    }

                    return $ret;
                }
                not_meuble_edit:

                // meuble_delete
                if (preg_match('#^/transport/meuble/(?P<id>[^/]++)/delete$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'meuble_delete']), array (  '_controller' => 'TransportBundle\\Controller\\MeubleController::deleteAction',));
                    if (!in_array($requestMethod, ['DELETE'])) {
                        $allow = array_merge($allow, ['DELETE']);
                        goto not_meuble_delete;
                    }

                    return $ret;
                }
                not_meuble_delete:

            }

        }

        elseif (0 === strpos($pathinfo, '/vehicule')) {
            // vehicule_homepage
            if ('/vehicule' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'VehiculeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'vehicule_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_vehicule_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'vehicule_homepage'));
                }

                return $ret;
            }
            not_vehicule_homepage:

            // vehicule_add
            if ('/vehicule/add' === $pathinfo) {
                return array (  '_controller' => 'VehiculeBundle\\Controller\\VehiculeController::addAction',  '_route' => 'vehicule_add',);
            }

            // vehicule_list
            if ('/vehicule/list' === $pathinfo) {
                return array (  '_controller' => 'VehiculeBundle\\Controller\\VehiculeController::listVehiculeAction',  '_route' => 'vehicule_list',);
            }

            // vehicule_delete
            if (0 === strpos($pathinfo, '/vehicule/delete') && preg_match('#^/vehicule/delete/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vehicule_delete']), array (  '_controller' => 'VehiculeBundle\\Controller\\VehiculeController::deleteAction',));
            }

            // vehicule_update
            if (0 === strpos($pathinfo, '/vehicule/update') && preg_match('#^/vehicule/update/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'vehicule_update']), array (  '_controller' => 'VehiculeBundle\\Controller\\VehiculeController::updateAction',));
            }

        }

        // entities_homepage
        if ('/entities' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'EntitiesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'entities_homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_entities_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'entities_homepage'));
            }

            return $ret;
        }
        not_entities_homepage:

        if (0 === strpos($pathinfo, '/covoiturage')) {
            // covoiturage_homepage
            if ('/covoiturage' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'CovoiturageBundle\\Controller\\DefaultController::indexAction',  '_route' => 'covoiturage_homepage',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_covoiturage_homepage;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'covoiturage_homepage'));
                }

                return $ret;
            }
            not_covoiturage_homepage:

            // covoiturage_ajout
            if ('/covoiturage/ajout' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::AjoutAction',  '_route' => 'covoiturage_ajout',);
            }

            // covoiturage_modifier
            if (0 === strpos($pathinfo, '/covoiturage/modifier') && preg_match('#^/covoiturage/modifier/(?P<offree>[^/]++)/(?P<i>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_modifier']), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::ModifierAction',));
            }

            // covoiturage_liste
            if ('/covoiturage/liste' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::ReadAction',  '_route' => 'covoiturage_liste',);
            }

            // covoiturage_supprimer
            if (0 === strpos($pathinfo, '/covoiturage/supprimer') && preg_match('#^/covoiturage/supprimer/(?P<id>[^/]++)/(?P<i>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_supprimer']), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::SupprimerAction',));
            }

            // covoiturage_statistiques
            if ('/covoiturage/statistiques' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::StatistiquesAction',  '_route' => 'covoiturage_statistiques',);
            }

            // covoiturage_erreur
            if ('/covoiturage/erreur' === $pathinfo) {
                return array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::ErreurAction',  '_route' => 'covoiturage_erreur',);
            }

            if (0 === strpos($pathinfo, '/covoiturage/bloquer')) {
                // covoiturage_bloquer
                if (preg_match('#^/covoiturage/bloquer/(?P<offree>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_bloquer']), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::setAvertissementAction',));
                }

                // covoiturage_bloquer_delete
                if (0 === strpos($pathinfo, '/covoiturage/bloquerE') && preg_match('#^/covoiturage/bloquerE/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => 'covoiturage_bloquer_delete']), array (  '_controller' => 'CovoiturageBundle\\Controller\\CovoiturageController::setAvertissementDeleteAction',));
                }

            }

        }

        // user_default_index
        if ('/user' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_user_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'user_default_index'));
            }

            return $ret;
        }
        not_user_default_index:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_security_login;
                }

                return $ret;
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_security_check;
                }

                return $ret;
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            $ret = array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                $allow = array_merge($allow, ['GET', 'POST']);
                goto not_fos_user_security_logout;
            }

            return $ret;
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_profile_show;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_profile_show'));
                }

                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_profile_show;
                }

                return $ret;
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_profile_edit;
                }

                return $ret;
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_change_password;
                }

                return $ret;
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_fos_user_registration_register;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'fos_user_registration_register'));
                }

                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_registration_register;
                }

                return $ret;
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_registration_check_email;
                }

                return $ret;
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_registration_confirm']), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirm;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    $ret = array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    if (!in_array($canonicalMethod, ['GET'])) {
                        $allow = array_merge($allow, ['GET']);
                        goto not_fos_user_registration_confirmed;
                    }

                    return $ret;
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_request;
                }

                return $ret;
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'fos_user_resetting_reset']), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                if (!in_array($canonicalMethod, ['GET', 'POST'])) {
                    $allow = array_merge($allow, ['GET', 'POST']);
                    goto not_fos_user_resetting_reset;
                }

                return $ret;
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                if (!in_array($requestMethod, ['POST'])) {
                    $allow = array_merge($allow, ['POST']);
                    goto not_fos_user_resetting_send_email;
                }

                return $ret;
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                $ret = array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                if (!in_array($canonicalMethod, ['GET'])) {
                    $allow = array_merge($allow, ['GET']);
                    goto not_fos_user_resetting_check_email;
                }

                return $ret;
            }
            not_fos_user_resetting_check_email:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
