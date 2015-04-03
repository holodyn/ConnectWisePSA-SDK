<?php namespace LabtechSoftware\ConnectwisePsaSdk;

/**
 * ConnectWise Product API
 *
 * @package ConnectwisePsaSdk
 */
class Product
{

    private $client;

    public function __construct(ConnectWiseApi $client)
    {
        $this->client = $client;
    }


    /**
     * Add product to/in CW
     *
     * @throws ApiException
     * @param array $product
     * @return array
     */
    public function addOrUpdateProduct(array $product)
    {
        // Check for empty data array
        if (count($product) <= 0) {
            throw new ApiException('No data found in product array.');
        }

        $params = array(
            'product' => $product
        );

        return $this->client->makeRequest('AddOrUpdateProduct', $params);
    }


    /**
     * Get a product by ID from CW
     *
     * @throws ApiException
     * @param int $productId
     * @return array
     */
    public function getProduct($productId)
    {
        // Make sure product ID is numeric and not zero
        if (is_numeric($productId) === false || $productId <= 0) {
            throw new ApiException('Invalid product ID value.');
        }

        $params = array(
            'id' => $productId
        );

        return $this->client->makeRequest('GetProduct', $params);
    }

    /**
     * Delete a product by ID fom CW
     *
     * @param int $productId
     * @return array
     * @throws ApiException
     */
    public function deleteProduct($productId)
    {
        if (is_numeric($productId) === false) {
            throw new ApiException('Invalid product ID value.');
        }

        $params = array(
            'id' => $productId
        );

        return $this->client->makeRequest('DeleteProduct', $params);
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
    public function findProducts($limit = 0, $skip = 0, $orderBy = '', $conditions = '')
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

        return $this->client->makeRequest('FindProducts', $params);
    }


}
