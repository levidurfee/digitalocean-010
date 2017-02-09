<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\Actions\ListAllActionsRequest;
use wappr\digitalocean\Requests\Actions\RetrieveExistingActionsRequest;

class Actions extends Resources
{
    /**
     * @var Sender
     */
    protected $sender;

    private $endpoint = 'actions';

    public function listAll(ListAllActionsRequest $listAllActionsRequest)
    {

    }

    public function retrieve(RetrieveExistingActionsRequest $retrieveExistingActionsRequest)
    {

    }
}
