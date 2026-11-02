<?php
namespace Blesta\PterodactylSDK\Requestors;

class Eggs extends \Blesta\PterodactylSDK\Requestor
{
    /**
     * Initializes the requestor with connection parameters
     *
     * @param string $apiKey The API key
     * @param string $apiUrl The API URL
     * @param bool $useSsl Whether to connect using ssl (optional)
     */
    public function __construct($apiKey, $apiUrl, $useSsl = true)
    {
        $this->setQueryParameters(['include' => 'variables']);
        parent::__construct($apiKey, $apiUrl, $useSsl);
    }

    /**
     * Fetches a page of eggs from Pterodactyl
     *
     * @param array $params A list of query parameters (optional) including:
     *
     *  - filter An array of filters, e.g. ['tag' => 'minecraft'] for eggs with that tag slug
     *  - per_page The number of eggs per page, up to 100
     *  - page The page to fetch
     * @return PterodactylResponse
     */
    public function getAll(array $params = [])
    {
        return $this->apiRequest('application/eggs', $params);
    }

    /**
     * Fetches an egg from Pterodactyl
     *
     * @param int $eggId The ID of the egg to fetch
     * @return PterodactylResponse
     */
    public function get($eggId)
    {
        return $this->apiRequest('application/eggs/' . $eggId);
    }
}
