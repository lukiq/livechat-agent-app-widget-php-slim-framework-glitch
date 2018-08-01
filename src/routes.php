<?php
// Routes

$app->post('/authorize/', function ($request, $response, $args) {
  // Sample log message
  $this->logger->info("Slim-Skeleton '/' route");

  // Render rand session number
  $responseData = array(
      'session_id' => rand()
    );

  return $response->withJson($responseData);
});

$app->get('/[{name}]', function ($request, $response, $args) {
  // Sample log message
  $this->logger->info("Slim-Skeleton '/' route");

  // Render index view
  return $this->renderer->render($response, 'index.phtml', $args);
});
