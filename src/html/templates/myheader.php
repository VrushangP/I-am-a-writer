<?php
function generateNav($pageType)
{
    if ($pageType === 'content') {
        $indexPrefix = '../../';
        $pagesPrefix = '';
        $imagePrefix = '../../img/';
        $stylePrefix = '../../';
        $projectPrefix = 'projects/';
    } else if ($pageType === 'index') {
        $indexPrefix = '';
        $pagesPrefix = 'src/html/';
        $imagePrefix = 'img/';
        $stylePrefix = '';
        $projectPrefix = 'src/html/projects/';
    } else if ($pageType === 'projects') {
      $indexPrefix = '../../../';
      $pagesPrefix = '../';
      $imagePrefix = '../../../img/';
      $stylePrefix = '../../../';
      $projectPrefix = '';
    } else {
      $indexPrefix = '../../../';
      $pagesPrefix = '../../';
      $imagePrefix = '';
      $stylePrefix = '';
      $projectPrefix = '';
    }
    $header = sprintf('<!DOCTYPE html>
    <html lang="en">
    <head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content=\'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\' name=\'viewport\' />
	<meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="%snode_modules/bulma/css/bulma.css">
    <link rel="stylesheet" href="%snode_modules/bulma/css/custom.css">
	<link rel="icon" type="image/x-icon" href="%sfavicon.png">

</head> 
<div class="has-background-white-ter">
  <nav class="navbar container is-spaced has-background-white-ter" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a href="%sindex" class="navbar-item"">
        <img src="%s/logo.png" width="55" height="55">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-end">
        <a href="%sblog" class="navbar-item is-hoverable has-text-primary has-text-weight-semibold is-size-4">
          Blog
        </a>

        <a href="%sexperience" class="navbar-item is-hoverable has-text-primary has-text-weight-semibold is-size-4">
          Co-op
        </a>
         
        <a href="%saboutme" class="navbar-item is-hoverable has-text-primary has-text-weight-semibold is-size-4">
          About Me
        </a>
         
        <div class="navbar-item has-dropdown is-hoverable has-text-primary has-text-weight-semibold is-size-4">
          <a class="navbar-link has-text-primary">
            Projects
          </a>

          <div class="navbar-dropdown">
            <a href="%ssnake" class="navbar-item">
              Snake
            </a>
            <a href="%svoltorbFlip" class="navbar-item">
              Voltorb Flip
            </a>
            <a href="%syomaSlayers" class="navbar-item">
              Yoma Slayer
            </a>
            <hr class="navbar-divider">
            <a href="%sgithub" class="navbar-item">
              Github
            </a>
          </div>
        </div>

        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>',$stylePrefix, $stylePrefix, $imagePrefix, $indexPrefix, $imagePrefix, $pagesPrefix, $pagesPrefix, $pagesPrefix, $projectPrefix, $projectPrefix, $projectPrefix, $projectPrefix);
return $header;
};
?>