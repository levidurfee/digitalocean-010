<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\ImageActions\ConvertToSnapshotImageActionsRequest;
use wappr\digitalocean\Requests\ImageActions\RetrieveImageActionsRequest;
use wappr\digitalocean\Requests\ImageActions\TransferImageActionsRequest;

class ImageActions extends Resources
{
    /**
     * @var Sender
     */
    protected $sender;

    private $endpoint = 'images';

    public function transfer(TransferImageActionsRequest $transferImageActionsRequest)
    {

    }

    public function convertToSnapshot(ConvertToSnapshotImageActionsRequest $convertToSnapshotImageActionsRequest)
    {

    }

    public function retrieve(RetrieveImageActionsRequest $retrieveImageActionsRequest)
    {

    }
}