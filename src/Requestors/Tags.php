<?php
namespace Blesta\PterodactylSDK\Requestors;

class Tags extends \Blesta\PterodactylSDK\Requestor
{
    /**
     * Fetches a page of tags from Pterodactyl
     *
     * @param array $params A list of query parameters (optional) including:
     *
     *  - filter An array of filters, e.g. ['slug' => 'minecraft']
     *  - per_page The number of tags per page, up to 100
     *  - page The page to fetch
     * @return PterodactylResponse
     */
    public function getAll(array $params = [])
    {
        return $this->apiRequest('application/tags', $params);
    }

    /**
     * Fetches a tag from Pterodactyl
     *
     * @param int $tagId The ID of the tag to fetch
     * @return PterodactylResponse
     */
    public function get($tagId)
    {
        return $this->apiRequest('application/tags/' . $tagId);
    }
}
