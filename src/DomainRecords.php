<?php

namespace wappr\digitalocean;

use wappr\digitalocean\Requests\DomainRecords\UpdateDomainRecordsRequest;
use wappr\digitalocean\Requests\Domains\CreateDomainsRequest;
use wappr\digitalocean\Requests\Domains\DeleteDomainsRequest;
use wappr\digitalocean\Requests\Domains\ListDomainsRequest;
use wappr\digitalocean\Requests\Domains\RetrieveDomainsRequest;

class DomainRecords extends Resources
{
    /**
     * @var Sender
     */
    protected $sender;

    private $endpoint = 'domains';

    public function listAll(ListDomainsRequest $listDomainsRequest)
    {
        
    }

    public function create(CreateDomainsRequest $createDomainsRequest)
    {

    }

    public function retrieve(RetrieveDomainsRequest $retrieveDomainsRequest)
    {

    }

    public function update(UpdateDomainRecordsRequest $updateDomainRecordsRequest)
    {

    }

    public function delete(DeleteDomainsRequest $deleteDomainsRequest)
    {

    }
}