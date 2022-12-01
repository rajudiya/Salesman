<?php

namespace Vendername\Salesman\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Vendername\Salesman\Api\Data\ViewInterface;

/**
 * Class File
 * @package Vendername\Salesman\Model
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class View extends AbstractModel
{
    /**
     * Cache tag
     */
    const CACHE_TAG = 'Vendername_salesman';

    /**
     * Post Initialization
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Vendername\Salesman\Model\ResourceModel\View');
    }


    /**
     * Get salesman Id.
     *
     * @return int
     */
    public function getSalesmanId()
    {
        return $this->getData(self::SALESMAN_ID);
    }

    /**
     * Set salesman Id.
     *
     * @param int $salesman Id
     * @return void
     */
    public function setSalesmanId($salesmanId)
    {
        return $this->setData(self::SALESMAN_ID, $salesmanId);
    }

    /**
     * Get salesman Name.
     *
     * @return varchar
     */
    public function getSalesmanName()
    {
        return $this->getData(self::SALESMAN_NAME);
    }

    /**
     * Set salesman Name.
     *
     * @param int $salesman Name
     * @return void
     */
    public function setSalesmanName($salesmanName)
    {
        return $this->setData(self::SALESMAN_NAME, $salesmanName);
    }

    /**
     * Get Salesman Phone.
     *
     * @return bool
     */
    public function getSalesmanPhone()
    {
        return $this->getData(self::SALESMAN_PHONE);
    }

    /**
     * Set Salesman Phone.
     *
     * @param int $salesmanPhone
     * @return void
     */
    public function setSalesmanPhone($salesmanPhone)
    {
        return $this->setData(self::SALESMAN_PHONE, $salesmanPhone);
    }

    /**
     * Get Salesman Email.
     *
     * @return bool
     */
    public function getSalesmanEmail()
    {
        return $this->getData(self::SALESMAN_EMAIL);
    }

    /**
     * Set Salesman Email.
     *
     * @param int $salesmanEmail
     * @return void
     */
    public function setSalesmanEmail($salesmanEmail)
    {
        return $this->setData(self::SALESMAN_EMAIL, $salesmanEmail);
    }
    
    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     *
     * @param int $createdAt
     * @return void
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
     /**
     * Get UpdateAt.
     *
     * @return varchar
     */
    public function getUpdateAt()
    {
        return $this->getData(self::UPDATE_AT);
    }

    /**
     * Set UpdateAt.
     *
     * @param int $updateAt
     * @return void
     */
    public function setUpdateAt($updateAt)
    {
        return $this->setData(self::UPDATE_AT, $updateAt);
    }
}