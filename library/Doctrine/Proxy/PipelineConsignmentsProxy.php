<?php

namespace Doctrine\Proxy;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class PipelineConsignmentsProxy extends \PipelineConsignments implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getPkId()
    {
        $this->__load();
        return parent::getPkId();
    }

    public function setVoucherNumber($voucherNumber)
    {
        $this->__load();
        return parent::setVoucherNumber($voucherNumber);
    }

    public function getVoucherNumber()
    {
        $this->__load();
        return parent::getVoucherNumber();
    }

    public function setTransactionCounter($transactionCounter)
    {
        $this->__load();
        return parent::setTransactionCounter($transactionCounter);
    }

    public function getTransactionCounter()
    {
        $this->__load();
        return parent::getTransactionCounter();
    }

    public function setExpectedArrivalDate($expectedArrivalDate)
    {
        $this->__load();
        return parent::setExpectedArrivalDate($expectedArrivalDate);
    }

    public function getExpectedArrivalDate()
    {
        $this->__load();
        return parent::getExpectedArrivalDate();
    }

    public function setReferenceNumber($referenceNumber)
    {
        $this->__load();
        return parent::setReferenceNumber($referenceNumber);
    }

    public function getReferenceNumber()
    {
        $this->__load();
        return parent::getReferenceNumber();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setBatchNumber($batchNumber)
    {
        $this->__load();
        return parent::setBatchNumber($batchNumber);
    }

    public function getBatchNumber()
    {
        $this->__load();
        return parent::getBatchNumber();
    }

    public function setProductionDate($productionDate)
    {
        $this->__load();
        return parent::setProductionDate($productionDate);
    }

    public function getProductionDate()
    {
        $this->__load();
        return parent::getProductionDate();
    }

    public function setExpiryDate($expiryDate)
    {
        $this->__load();
        return parent::setExpiryDate($expiryDate);
    }

    public function getExpiryDate()
    {
        $this->__load();
        return parent::getExpiryDate();
    }

    public function setUnitPrice($unitPrice)
    {
        $this->__load();
        return parent::setUnitPrice($unitPrice);
    }

    public function getUnitPrice()
    {
        $this->__load();
        return parent::getUnitPrice();
    }

    public function setQuantity($quantity)
    {
        $this->__load();
        return parent::setQuantity($quantity);
    }

    public function getQuantity()
    {
        $this->__load();
        return parent::getQuantity();
    }

    public function setReceivedQuantity($receivedQuantity)
    {
        $this->__load();
        return parent::setReceivedQuantity($receivedQuantity);
    }

    public function getReceivedQuantity()
    {
        $this->__load();
        return parent::getReceivedQuantity();
    }

    public function setMasterId($masterId)
    {
        $this->__load();
        return parent::setMasterId($masterId);
    }

    public function getMasterId()
    {
        $this->__load();
        return parent::getMasterId();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }

    public function setCreatedDate($createdDate)
    {
        $this->__load();
        return parent::setCreatedDate($createdDate);
    }

    public function getCreatedDate()
    {
        $this->__load();
        return parent::getCreatedDate();
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->__load();
        return parent::setModifiedDate($modifiedDate);
    }

    public function getModifiedDate()
    {
        $this->__load();
        return parent::getModifiedDate();
    }

    public function setStakeholderActivity(\StakeholderActivities $stakeholderActivity)
    {
        $this->__load();
        return parent::setStakeholderActivity($stakeholderActivity);
    }

    public function getStakeholderActivity()
    {
        $this->__load();
        return parent::getStakeholderActivity();
    }

    public function setModifiedBy(\Users $modifiedBy)
    {
        $this->__load();
        return parent::setModifiedBy($modifiedBy);
    }

    public function getModifiedBy()
    {
        $this->__load();
        return parent::getModifiedBy();
    }

    public function setItemPackSize(\ItemPackSizes $itemPackSize)
    {
        $this->__load();
        return parent::setItemPackSize($itemPackSize);
    }

    public function getItemPackSize()
    {
        $this->__load();
        return parent::getItemPackSize();
    }

    public function setManufacturer(\PackInfo $manufacturer)
    {
        $this->__load();
        return parent::setManufacturer($manufacturer);
    }

    public function getManufacturer()
    {
        $this->__load();
        return parent::getManufacturer();
    }

    public function setVvmType(\VvmTypes $vvmType)
    {
        $this->__load();
        return parent::setVvmType($vvmType);
    }

    public function getVvmType()
    {
        $this->__load();
        return parent::getVvmType();
    }

    public function setFromWarehouse(\Warehouses $fromWarehouse)
    {
        $this->__load();
        return parent::setFromWarehouse($fromWarehouse);
    }

    public function getFromWarehouse()
    {
        $this->__load();
        return parent::getFromWarehouse();
    }

    public function setToWarehouse(\Warehouses $toWarehouse)
    {
        $this->__load();
        return parent::setToWarehouse($toWarehouse);
    }

    public function getToWarehouse()
    {
        $this->__load();
        return parent::getToWarehouse();
    }

    public function setCreatedBy(\Users $createdBy)
    {
        $this->__load();
        return parent::setCreatedBy($createdBy);
    }

    public function getCreatedBy()
    {
        $this->__load();
        return parent::getCreatedBy();
    }

    public function setStockBatchWarehouse(\StockBatchWarehouses $stockBatchWarehouse)
    {
        $this->__load();
        return parent::setStockBatchWarehouse($stockBatchWarehouse);
    }

    public function getStockBatchWarehouse()
    {
        $this->__load();
        return parent::getStockBatchWarehouse();
    }

    public function setTransactionType(\TransactionTypes $transactionType)
    {
        $this->__load();
        return parent::setTransactionType($transactionType);
    }

    public function getTransactionType()
    {
        $this->__load();
        return parent::getTransactionType();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'pkId', 'voucherNumber', 'transactionCounter', 'expectedArrivalDate', 'referenceNumber', 'description', 'batchNumber', 'productionDate', 'expiryDate', 'unitPrice', 'quantity', 'receivedQuantity', 'masterId', 'status', 'createdDate', 'modifiedDate', 'stakeholderActivity', 'modifiedBy', 'itemPackSize', 'manufacturer', 'vvmType', 'fromWarehouse', 'toWarehouse', 'createdBy', 'stockBatchWarehouse', 'transactionType');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}