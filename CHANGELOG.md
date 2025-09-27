# Changelog

All notable changes to this project will be documented in this file.

## [1.0.0] - 2025-09-27

### Added

-   First release of the PHP template engine: `Codemonster\View\Engines\PhpEngine`, implements `EngineInterface`.
-   Integration with the core locator (`codemonster-ru/view` ^1.1): unified path resolution, **dot notation** (`emails.welcome`), **namespace prefixes** (`blog::post.show`), **multiple base paths** with priority, **search by multiple extensions** (`['phtml','php']`).
-   Protection against directory traversal — at the core locator level.
-   README with a usage example and notes on escaping.
-   Tests (`PhpEngineTest`) and fixtures (home, emails/welcome, custom.{php,phtml}, blog/post/show).
-   Composer configuration: PHP >=8.2, dependency on `codemonster-ru/view` `^1.1`, autoloader optimization, package sorting, archive exclusions.
-   `phpunit.xml.dist` and `composer test` script.
