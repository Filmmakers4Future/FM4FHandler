<?php

  /**
    This is the Filmmakers for Future handler.

    This file contains the Filmmakers for Future handler.

    @package filmmakers4future\fm4fhandler
    @version 0.1a2
    @author  Yahe <hello@yahe.sh>
    @since   0.1a0
  */

  // ===== DO NOT EDIT HERE =====

  // prevent script from getting called directly
  if (!defined("URLAUBE")) { die(""); }

  class FM4FHandler {

    // HANDLER FUNCTIONS

    public static function index() {
      $result = false;

      // retrieve the index page content
      $content = callcontent("index", false, false, null);
      if (null !== $content) {
        // set the content to be processed by plugins and the theme
        Main::set(CONTENT,  $content);
        Main::set(METADATA, new Content());

        // handle pagination if the PAGE metadate is supported
        Main::set(PAGE,      1);
        Main::set(PAGECOUNT, 1);

        // transfer the handling to the Themes class
        Themes::run();

        // we handled this page
        $result = true;
      }

      return $result;
    }

  }

  // register handler
  Handlers::register(FM4FHandler::class, "index", "~^\/$~", [GET, POST], ADDSLASH);
