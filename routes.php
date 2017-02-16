<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        require_once 'models/post.php';
        require_once 'models/user.php';
        require_once 'models/topic.php';
        $controller = new PagesController();
      break;
      case 'posts':
        // we need the model to query the database later in the controller
        require_once('models/post.php');
        require_once 'models/user.php';
        $controller = new PostsController();
      break;
      case 'users':
        require_once 'models/user.php';
        $controller = new UsersController();
      break;
      case 'topics':
        require_once 'models/topic.php';
        $controller = new TopicController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error', 'login', 'register', 'notifications', 'newpost'],
                       'posts' => ['show'],
                       'users' => ['login', 'register', 'logout'],
                       'topics' => ['show']);

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>