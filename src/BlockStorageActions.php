<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\BlockStorage\ListAllBlockStorageRequest;
use wappr\digitalocean\Requests\BlockStorageActions\AttachBlockStorageActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\AttachByNameBlockStorageActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\ListActionsBlockStorageActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveBlockStorageActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RemoveByNameBlockStorageActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\ResizeBlockStorageActionsRequest;
use wappr\digitalocean\Requests\BlockStorageActions\RetrieveBlockStorageActionsRequest;

class BlockStorageActions
{
    /**
     * @var Sender
     */
    protected $sender;

    private $endpoint = 'volumes';

    public function attach(AttachBlockStorageActionsRequest $attachBlockStorageActionsRequest)
    {

    }

    public function attachByName(AttachByNameBlockStorageActionsRequest $attachByNameBlockStorageActionsRequest)
    {

    }

    public function remove(RemoveBlockStorageActionsRequest $removeBlockStorageActionsRequest)
    {

    }

    public function removeByName(RemoveByNameBlockStorageActionsRequest $removeByNameBlockStorageActionsRequest)
    {

    }

    public function resize(ResizeBlockStorageActionsRequest $resizeBlockStorageActionsRequest)
    {

    }

    public function listAllActions(ListActionsBlockStorageActionsRequest $listActionsBlockStorageActionsRequest)
    {

    }

    public function retrieve(RetrieveBlockStorageActionsRequest $retrieveBlockStorageActionsRequest)
    {

    }
}