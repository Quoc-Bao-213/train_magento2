<?php
namespace Magento\Catalog\Model\ResourceModel\Url;

/**
 * Proxy class for @see \Magento\Catalog\Model\ResourceModel\Url
 */
class Proxy extends \Magento\Catalog\Model\ResourceModel\Url implements \Magento\Framework\ObjectManager\NoninterceptableInterface
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Proxied instance name
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Proxied instance
     *
     * @var \Magento\Catalog\Model\ResourceModel\Url
     */
    protected $_subject = null;

    /**
     * Instance shareability flag
     *
     * @var bool
     */
    protected $_isShared = null;

    /**
     * Proxy constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     * @param bool $shared
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\Catalog\\Model\\ResourceModel\\Url', $shared = true)
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
        $this->_isShared = $shared;
    }

    /**
     * @return array
     */
    public function __sleep()
    {
        return ['_subject', '_isShared', '_instanceName'];
    }

    /**
     * Retrieve ObjectManager from global scope
     */
    public function __wakeup()
    {
        $this->_objectManager = \Magento\Framework\App\ObjectManager::getInstance();
    }

    /**
     * Clone proxied instance
     */
    public function __clone()
    {
        if ($this->_subject) {
            $this->_subject = clone $this->_getSubject();
        }
    }

    /**
     * Debug proxied instance
     */
    public function __debugInfo()
    {
        return ['i' => $this->_subject];
    }

    /**
     * Get proxied instance
     *
     * @return \Magento\Catalog\Model\ResourceModel\Url
     */
    protected function _getSubject()
    {
        if (!$this->_subject) {
            $this->_subject = true === $this->_isShared
                ? $this->_objectManager->get($this->_instanceName)
                : $this->_objectManager->create($this->_instanceName);
        }
        return $this->_subject;
    }

    /**
     * {@inheritdoc}
     */
    public function getStores($storeId = null)
    {
        return $this->_getSubject()->getStores($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function _getProductAttribute($attributeCode, $productIds, $storeId)
    {
        return $this->_getSubject()->_getProductAttribute($attributeCode, $productIds, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory($categoryId, $storeId)
    {
        return $this->_getSubject()->getCategory($categoryId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories($categoryIds, $storeId)
    {
        return $this->_getSubject()->getCategories($categoryIds, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct($productId, $storeId)
    {
        return $this->_getSubject()->getProduct($productId, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductsByStore($storeId, &$lastEntityId)
    {
        return $this->_getSubject()->getProductsByStore($storeId, $lastEntityId);
    }

    /**
     * {@inheritdoc}
     */
    public function getRewriteByProductStore(array $products)
    {
        return $this->_getSubject()->getRewriteByProductStore($products);
    }

    /**
     * Reset state of proxied instance
     */
    public function _resetState() : void
    {
        if ($this->_subject) {
            $this->_subject->_resetState(); 
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        return $this->_getSubject()->getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getMainTable()
    {
        return $this->_getSubject()->getMainTable();
    }

    /**
     * {@inheritdoc}
     */
    public function getTable($tableName)
    {
        return $this->_getSubject()->getTable($tableName);
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        return $this->_getSubject()->getConnection();
    }

    /**
     * {@inheritdoc}
     */
    public function load(\Magento\Framework\Model\AbstractModel $object, $value, $field = null)
    {
        return $this->_getSubject()->load($object, $value, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this->_getSubject()->save($object);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this->_getSubject()->delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function addUniqueField($field)
    {
        return $this->_getSubject()->addUniqueField($field);
    }

    /**
     * {@inheritdoc}
     */
    public function resetUniqueField()
    {
        return $this->_getSubject()->resetUniqueField();
    }

    /**
     * {@inheritdoc}
     */
    public function unserializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this->_getSubject()->unserializeFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueFields()
    {
        return $this->_getSubject()->getUniqueFields();
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanged($object)
    {
        return $this->_getSubject()->hasDataChanged($object);
    }

    /**
     * {@inheritdoc}
     */
    public function getChecksum($table)
    {
        return $this->_getSubject()->getChecksum($table);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->afterLoad($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->beforeSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->afterSave($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->beforeDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete(\Magento\Framework\DataObject $object)
    {
        return $this->_getSubject()->afterDelete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function serializeFields(\Magento\Framework\Model\AbstractModel $object)
    {
        return $this->_getSubject()->serializeFields($object);
    }

    /**
     * {@inheritdoc}
     */
    public function beginTransaction()
    {
        return $this->_getSubject()->beginTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function addCommitCallback($callback)
    {
        return $this->_getSubject()->addCommitCallback($callback);
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return $this->_getSubject()->commit();
    }

    /**
     * {@inheritdoc}
     */
    public function rollBack()
    {
        return $this->_getSubject()->rollBack();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidationRulesBeforeSave()
    {
        return $this->_getSubject()->getValidationRulesBeforeSave();
    }
}
