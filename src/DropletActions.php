<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\DropletActions\ChangeKernelDropletActionsRequest;
use wappr\digitalocean\Requests\DropletActions\DropletActionsRequest;
use wappr\digitalocean\Requests\DropletActions\RebuildDropletActionsRequest;
use wappr\digitalocean\Requests\DropletActions\ResizeDropletActionsRequest;
use wappr\digitalocean\Requests\DropletActions\RetrieveDropletActionsRequest;
use wappr\digitalocean\Requests\DropletActions\SnapshotDropletActionsRequest;

class DropletActions extends Resources
{
    /**
     * @var Sender
     */
    protected $sender;

    private $endpoint = 'droplets';
    private $type;

    public function enableBackups()
    {
        $this->type[] = DropletActionsRequest::ENABLE_BACKUPS;

        return $this;
    }

    public function disableBackups()
    {
        $this->type[] = DropletActionsRequest::DISABLE_BACKUPS;

        return $this;
    }

    public function reboot()
    {
        $this->type[] = DropletActionsRequest::REBOOT;

        return $this;
    }

    public function powerCycle()
    {

    }

    public function shutdown()
    {

    }

    public function powerOff()
    {

    }

    public function powerOn()
    {

    }

    public function restore()
    {

    }

    public function passwordReset()
    {

    }

    public function resize(ResizeDropletActionsRequest $resizeDropletActionsRequest)
    {

    }

    public function rebuild(RebuildDropletActionsRequest $rebuildDropletActionsRequest)
    {

    }

    public function changeKernel(ChangeKernelDropletActionsRequest $changeKernelDropletActionsRequest)
    {

    }

    public function enableIpv6()
    {

    }

    public function enablePrivateNetworking()
    {

    }

    public function snapshot(SnapshotDropletActionsRequest $snapshotDropletActionsRequest)
    {

    }

    public function retrieve(RetrieveDropletActionsRequest $retrieveDropletActionsRequest)
    {

    }

    public function run()
    {
        // post code
    }
}