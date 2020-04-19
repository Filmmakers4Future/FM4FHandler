<?php

  /**
    This is the Filmmakers for Future handler.

    This file contains the Filmmakers for Future handler. The handler is providing the
    static legacy content until it is migrated to Urlaube.

    @package filmmakers4future\fm4fhandler
    @version 0.1a0
    @author  Yahe <hello@yahe.sh>
    @since   0.1a0
  */

  // ===== DO NOT EDIT HERE =====

  // prevent script from getting called directly
  if (!defined("URLAUBE")) { die(""); }

    class FM4FHandler {

      // HANDLER FUNCTIONS

      public static function contact() {
        // generate the static page
        require_once(__DIR__."/pages/contact.php");

        // we handled this call
        return true;
      }

      public static function demands() {
        // generate the static page
        require_once(__DIR__."/pages/demands.php");

        // we handled this call
        return true;
      }

      public static function greenfilmmaking() {
        // generate the static page
        require_once(__DIR__."/pages/greenfilmmaking.php");

        // we handled this call
        return true;
      }

      public static function index() {
        // generate the static page
        require_once(__DIR__."/pages/index.php");

        // we handled this call
        return true;
      }

      public static function legal() {
        // generate the static page
        require_once(__DIR__."/pages/legal.php");

        // we handled this call
        return true;
      }

      public static function newsletter() {
        // generate the static page
        require_once(__DIR__."/pages/newsletter.php");

        // we handled this call
        return true;
      }

      public static function participate() {
        // generate the static page
        require_once(__DIR__."/pages/participate.php");

        // we handled this call
        return true;
      }

      public static function privacy() {
        // generate the static page
        require_once(__DIR__."/pages/privacy.php");

        // we handled this call
        return true;
      }

      public static function robots() {
        // generate the static page
        require_once(__DIR__."/pages/robots.php");

        // we handled this call
        return true;
      }

      public static function send() {
        // generate the static page
        require_once(__DIR__."/pages/send.php");

        // we handled this call
        return true;
      }

      public static function signatures() {
        // generate the static page
        require_once(__DIR__."/pages/signatures.php");

        // we handled this call
        return true;
      }

      public static function sitemap() {
        // generate the static page
        require_once(__DIR__."/pages/sitemap.php");

        // we handled this call
        return true;
      }

      public static function verify() {
        // generate the static page
        require_once(__DIR__."/pages/verify.php");

        // we handled this call
        return true;
      }

      public static function videos() {
        // generate the static page
        require_once(__DIR__."/pages/videos.php");

        // we handled this call
        return true;
      }

      // PLUGIN FUNCTIONS

      public static function disable_system_handlers($argument) {
        $result = preparecontent($argument, null, [Plugins::ENTITY]);

        if (null !== $result) {
          // make sure that we only handle arrays
          if ($result instanceof Content) {
            $result = [$result];
          }

          $disabled_handlers = [FeedHandler::class,
                                RobotsTxtHandler::class,
                                SearchHandler::class,
                                SitemapXmlHandler::class];

          // iterate through the handlers and unset unsupported ones
          foreach ($result as $key => $value) {
            if (in_array(value($value, Plugins::ENTITY), $disabled_handlers)) {
              unset($result[$key]);
            }
          }
        }

        return $result;
      }

    }

  // register handlers for pages
  Handlers::register(FM4FHandler::class, "demands",         "@^\/demands$@",         [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "greenfilmmaking", "@^\/greenfilmmaking$@", [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "legal",           "@^\/legal$@",           [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "participate",     "@^\/participate$@",     [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "privacy",         "@^\/privacy$@",         [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "robots",          "@^\/robots.txt$@",      [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "signatures",      "@^\/signatures$@",      [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "sitemap",         "@^\/sitemap.xml$@",     [GET], ADDSLASH);
  Handlers::register(FM4FHandler::class, "videos",          "@^\/videos$@",          [GET], ADDSLASH);

  // register handlers for form pages
  Handlers::register(FM4FHandler::class, "contact",    "@^\/contact$@",    [GET, POST], ADDSLASH);
  Handlers::register(FM4FHandler::class, "index",      "@^\/$@",           [GET, POST], ADDSLASH);
  Handlers::register(FM4FHandler::class, "newsletter", "@^\/newsletter$@", [GET, POST], ADDSLASH);
  Handlers::register(FM4FHandler::class, "send",       "@^\/send$@",       [GET, POST], ADDSLASH);
  Handlers::register(FM4FHandler::class, "verify",     "@^\/verify$@",     [GET, POST], ADDSLASH);

  // disable unused system handlers
  Plugins::register(FM4FHandler::class, "disable_system_handlers", FILTER_HANDLERS);
