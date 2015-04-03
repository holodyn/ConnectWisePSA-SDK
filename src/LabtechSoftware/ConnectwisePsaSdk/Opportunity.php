<?php namespace LabtechSoftware\ConnectwisePsaSdk;

/**
 * ConnectWise Opportunity API
 *
 * @package ConnectwisePsaSdk
 */
class Opportunity
{
    private $client;

    public function __construct(ConnectWiseApi $client)
    {
        $this->client = $client;
    }


    /**
     * Add opportunity to/in CW
     *
     * @throws ApiException
     * @param array $opportunity
     * @return array
     */
    public function addOrUpdateOpportunity(array $opportunity)
    {
        // Check for empty data array
        if (count($opportunity) <= 0) {
            throw new ApiException('No data found in opportunity array.');
        }

        $params = array(
            'opportunity' => $opportunity
        );

        return $this->client->makeRequest('AddOrUpdateOpportunity', $params);
    }


    /**
     * Get a opportunity by ID from CW
     *
     * @throws ApiException
     * @param int $opportunityId
     * @return array
     */
    public function getOpportunity($opportunityId)
    {
        // Make sure opportunity ID is numeric and not zero
        if (is_numeric($opportunityId) === false || $opportunityId <= 0) {
            throw new ApiException('Invalid opportunity ID value.');
        }

        $params = array(
            'id' => $opportunityId
        );

        return $this->client->makeRequest('GetOpportunity', $params);
    }

    /**
     * Delete a opportunity by ID fom CW
     *
     * @param int $opportunityId
     * @return array
     * @throws ApiException
     */
    public function deleteOpportunity($opportunityId)
    {
        if (is_numeric($opportunityId) === false) {
            throw new ApiException('Invalid opportunity ID value.');
        }

        $params = array(
            'id' => $opportunityId
        );

        return $this->client->makeRequest('DeleteOpportunity', $params);
    }


    /**
     * Finds contact information by a set of conditions
     *
     * @throws ApiException
     * @param int $limit
     * @param int $skip
     * @param string $orderBy
     * @param string $conditions
     * @return array
     */
    public function findOpportunities($limit = 0, $skip = 0, $orderBy = '', $conditions = '')
    {
        if (is_numeric($limit) === false) {
            throw new ApiException('Limit value must be numeric.');
        }

        if (is_numeric($skip) === false) {
            throw new ApiException('Skip value must be numeric.');
        }

        if (is_string($orderBy) === false) {
            throw new ApiException('Order by must be a string.');
        }

        if (is_string($conditions) === false) {
            throw new ApiException('Conditions must be a string.');
        }

        $params = array(
            'skip' => $skip,
            'conditions' => $conditions,
            'orderBy' => $orderBy
        );

        // only set limit if there is a limit, limit 0 will return no results
        if ($limit > 0) {
            $params['limit'] = $limit;
        }

        return $this->client->makeRequest('FindOpportunities', $params);
    }


    /**
     * Add or update a opportunity item to/in CW
     *
     * @throws ApiException
     * @param array $opportunity
     * @return array
     */
    public function addOrUpdateOpportunityItem(array $opportunityItem, $bypassForecastUpdate = true)
    {
        // Check for empty data array
        if (count($opportunityItem) <= 0) {
            throw new ApiException('No data found in opportunityItem array.');
        }

        $params = array(
            'item' => $opportunityItem,
            'bypassForecastUpdate' => $bypassForecastUpdate
        );

        return $this->client->makeRequest('addOrUpdateOpportunityItem', $params);
    }


    /**
     * Delete a opportunity item by ID fom CW
     *
     * @param int $opportunityId
     * @return array
     * @throws ApiException
     */
    public function deleteOpportunityItem($opportunityItemId)
    {
        if (is_numeric($opportunityItemId) === false) {
            throw new ApiException('Invalid opportunity item ID value.');
        }

        $params = array(
            'id' => $opportunityItemId
        );

        return $this->client->makeRequest('DeleteOpportunityItem', $params);
    }


}
