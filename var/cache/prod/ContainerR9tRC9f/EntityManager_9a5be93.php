<?php

namespace ContainerR9tRC9f;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderb2129 = null;
    private $initializerb2342 = null;
    private static $publicProperties9ee30 = [
        
    ];
    public function getConnection()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getConnection', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getMetadataFactory', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getExpressionBuilder', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'beginTransaction', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getCache', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getCache();
    }
    public function transactional($func)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'transactional', array('func' => $func), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'commit', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->commit();
    }
    public function rollback()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'rollback', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getClassMetadata', array('className' => $className), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'createQuery', array('dql' => $dql), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'createNamedQuery', array('name' => $name), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'createQueryBuilder', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'flush', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'clear', array('entityName' => $entityName), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->clear($entityName);
    }
    public function close()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'close', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->close();
    }
    public function persist($entity)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'persist', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'remove', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'refresh', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'detach', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'merge', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'contains', array('entity' => $entity), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getEventManager', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getConfiguration', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'isOpen', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getUnitOfWork', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getProxyFactory', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'initializeObject', array('obj' => $obj), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'getFilters', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'isFiltersStateClean', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'hasFilters', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return $this->valueHolderb2129->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerb2342 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderb2129) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb2129 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderb2129->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, '__get', ['name' => $name], $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        if (isset(self::$publicProperties9ee30[$name])) {
            return $this->valueHolderb2129->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2129;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb2129;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2129;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderb2129;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, '__isset', array('name' => $name), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2129;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderb2129;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, '__unset', array('name' => $name), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb2129;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderb2129;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, '__clone', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        $this->valueHolderb2129 = clone $this->valueHolderb2129;
    }
    public function __sleep()
    {
        $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, '__sleep', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
        return array('valueHolderb2129');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb2342 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb2342;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerb2342 && ($this->initializerb2342->__invoke($valueHolderb2129, $this, 'initializeProxy', array(), $this->initializerb2342) || 1) && $this->valueHolderb2129 = $valueHolderb2129;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb2129;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb2129;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
