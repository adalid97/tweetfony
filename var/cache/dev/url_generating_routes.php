<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'demo_index' => [[], ['_controller' => 'App\\Controller\\TweetController::demo'], [], [['text', '/demo']], [], []],
    'demo_tweet' => [[], ['_controller' => 'App\\Controller\\TweetController::demoTweet'], [], [['text', '/demoTweet']], [], []],
    'tweets' => [[], ['_controller' => 'App\\Controller\\TweetController::tweets'], [], [['text', '/']], [], []],
    'verTweet' => [['id'], ['_controller' => 'App\\Controller\\TweetController::verTweet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/tweet']], [], []],
    'api_get_tweet' => [['id'], ['_controller' => 'App\\Controller\\ApiController::getTweet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/tweets']], [], []],
    'api_get_user' => [['id'], ['_controller' => 'App\\Controller\\ApiController::getTweetfonyUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], []],
    'api_index' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api']], [], []],
    'api_post_user' => [[], ['_controller' => 'App\\Controller\\ApiController::postTweetfonyUser'], [], [['text', '/api/nuevoUsers']], [], []],
    'api_post_tweet' => [[], ['_controller' => 'App\\Controller\\ApiController::postTweet'], [], [['text', '/api/nuevoTweets']], [], []],
    'api_put_user' => [['id'], ['_controller' => 'App\\Controller\\ApiController::putUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/users']], [], []],
    'api_put_tweet' => [['id'], ['_controller' => 'App\\Controller\\ApiController::putTweet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/tweet']], [], []],
    'api_delete_user' => [['id'], ['_controller' => 'App\\Controller\\ApiController::deteleUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], []],
    'api_delete_tweet' => [['id'], ['_controller' => 'App\\Controller\\ApiController::deleteTweet'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/tweet']], [], []],
    'api_get_users' => [[], ['_controller' => 'App\\Controller\\ApiController::getUsers'], [], [['text', '/api/users']], [], []],
    'api_get_tweets' => [[], ['_controller' => 'App\\Controller\\ApiController::getTweets'], [], [['text', '/api/tweets']], [], []],
];
