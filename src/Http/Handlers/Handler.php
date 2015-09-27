<?php

namespace PHPRest\Http;

use PHPRest\Http\Response;
use PHPRest\Http\Request;

/**
 * Base HTTP handler
 */
abstract class BaseHandler
{
    /**
     * @var Response HTTP response
     */
    protected $response;

    /**
     * @var Response HTTP request
     */
    protected $request;

    /**
     * Constructor of the HTTP handler
     *
     * @param Response $response HTTP-ответ
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
        $this->request = null; // TODO
    }

    /**
     * Handle GET request
     *
     * @return Response
     */
    public function get()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle POST request
     *
     * @return Response
     */
    public function post()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle PUT request
     *
     * @return Response
     */
    public function put()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle DELETE request
     *
     * @return Response
     */
    public function delete()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle HEAD request
     *
     * @return Response
     */
    public function head()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle PATCH request
     *
     * @return Response
     */
    public function patch()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle TRACE request
     *
     * @return Response
     */
    public function trace()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle TRACE request
     *
     * @return Response
     */
    public function connect()
    {
        $this->response->throwError(405);
    }

    /**
     * Handle OPTIONS request
     *
     * @return Response
     */
    public function options()
    {
        $this->response->throwError(405);
    }
}