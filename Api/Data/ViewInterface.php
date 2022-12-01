<?php
namespace Vendername\Salesman\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const SALESMAN_ID = 'id';
    const SALESMAN_NAME = 'name';
    const sALESMAN_PHONE = 'phone';
    const EMAIL = 'email';
    const CREATED_AT = 'created_at';
    const UPDATE_AT = 'update_at';
    /**#@-*/


    /**
     * Get SalesmanId
     *
     * @return string|null
     */
    public function getSalesmanId();

    /**
     * Set SalesmanId
     *
     * @param string $SalesmanId
     * @return $this
     */
    public function setSalesmanId($salesmanId);

    /**
     * Get SalesmanName
     *
     * @return string|null
     */
    public function getSalesmanName();

    /**
     * Set SalesmanName
     *
     * @param string $SalesmanName
     * @return $this
     */
    public function setSalesmanName($salesmanName);

    /**
     * Get Created At
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Get SalesmanPhone
     *
     * @return int|null
     */
    public function getSalesmanPhone();

    /**
     * Set SalesmanPhone
     *
     * @param int $SalesmanPhone
     * @return $this
     */
    public function setSalesmanPhone($salesmanPhone);

    /**
     * Get SalesmanEmail
     *
     * @return string|null
     */
    public function getSalesmanEmail();

    /**
     * Set SalesmanEmail
     *
     * @param string $SalesmanEmail
     * @return $this
     */
    public function setSalesmanEmail($salesmanEmail);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Set Updated At
     *
     * @param int $UpdatedAt
     * @return $this
     */
    public function setUpdatedAt($UpdatedAt);
}