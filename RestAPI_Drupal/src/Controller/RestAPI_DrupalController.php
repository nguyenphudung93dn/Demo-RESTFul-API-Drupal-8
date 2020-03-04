<?php

/**
 * @file
 * Contains \Drupal\RestAPI_Drupal\Controller\RestAPI_DrupalController.
 */

namespace Drupal\RestAPI_Drupal\Controller;

use Drupal\Core\Controller\ControllerBase;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class RestAPI_Drupal extends ControllerBase {


  public function get_example( Request $request ) {

    $response['data'] = 'Data return for method GET';
    $response['method'] = 'GET';

    return new JsonResponse( $response );
  }


  public function put_example( Request $request ) {

    $response['data'] = 'Data return for method PUT';
    $response['method'] = 'PUT';

    return new JsonResponse( $response );
  }

  public function post_example( Request $request ) {

    $response['data'] = 'Data return for method POST';
    $response['method'] = 'POST';

    return new JsonResponse( $response );
  }

  public function delete_example( Request $request ) {

    $response['data'] = 'Data return for method Delete';
    $response['method'] = 'DELETE';

    return new JsonResponse( $response );
  }

}
