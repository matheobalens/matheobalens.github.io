<?php

namespace ContainerH3n4aK8;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera192e = null;
    private $initializer8f96c = null;
    private static $publicProperties85f3d = [
        
    ];
    public function getConnection()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getConnection', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getMetadataFactory', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getExpressionBuilder', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'beginTransaction', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getCache', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getCache();
    }
    public function transactional($func)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'transactional', array('func' => $func), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'commit', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->commit();
    }
    public function rollback()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'rollback', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getClassMetadata', array('className' => $className), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'createQuery', array('dql' => $dql), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'createNamedQuery', array('name' => $name), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'createQueryBuilder', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'flush', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'clear', array('entityName' => $entityName), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->clear($entityName);
    }
    public function close()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'close', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->close();
    }
    public function persist($entity)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'persist', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'remove', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'refresh', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'detach', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'merge', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'contains', array('entity' => $entity), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getEventManager', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getConfiguration', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'isOpen', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getUnitOfWork', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getProxyFactory', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'initializeObject', array('obj' => $obj), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'getFilters', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'isFiltersStateClean', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'hasFilters', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return $this->valueHoldera192e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer8f96c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera192e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera192e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera192e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, '__get', ['name' => $name], $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        if (isset(self::$publicProperties85f3d[$name])) {
            return $this->valueHoldera192e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera192e;
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
        $targetObject = $this->valueHoldera192e;
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
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera192e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera192e;
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
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, '__isset', array('name' => $name), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera192e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera192e;
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
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, '__unset', array('name' => $name), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera192e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera192e;
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
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, '__clone', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        $this->valueHoldera192e = clone $this->valueHoldera192e;
    }
    public function __sleep()
    {
        $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, '__sleep', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
        return array('valueHoldera192e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer8f96c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer8f96c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8f96c && ($this->initializer8f96c->__invoke($valueHoldera192e, $this, 'initializeProxy', array(), $this->initializer8f96c) || 1) && $this->valueHoldera192e = $valueHoldera192e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera192e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera192e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
