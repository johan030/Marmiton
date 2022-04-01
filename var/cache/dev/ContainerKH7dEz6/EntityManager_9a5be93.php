<?php

namespace ContainerKH7dEz6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereb98c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2772c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9afdd = [
        
    ];

    public function getConnection()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getConnection', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getMetadataFactory', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getExpressionBuilder', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'beginTransaction', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getCache', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'transactional', array('func' => $func), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'commit', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->commit();
    }

    public function rollback()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'rollback', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getClassMetadata', array('className' => $className), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'createQuery', array('dql' => $dql), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'createNamedQuery', array('name' => $name), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'createQueryBuilder', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'flush', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'clear', array('entityName' => $entityName), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->clear($entityName);
    }

    public function close()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'close', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->close();
    }

    public function persist($entity)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'persist', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'remove', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'refresh', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'detach', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'merge', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'contains', array('entity' => $entity), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getEventManager', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getConfiguration', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'isOpen', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getUnitOfWork', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getProxyFactory', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'initializeObject', array('obj' => $obj), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'getFilters', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'isFiltersStateClean', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'hasFilters', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return $this->valueHoldereb98c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer2772c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereb98c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereb98c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereb98c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, '__get', ['name' => $name], $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        if (isset(self::$publicProperties9afdd[$name])) {
            return $this->valueHoldereb98c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb98c;

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

        $targetObject = $this->valueHoldereb98c;
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
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb98c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldereb98c;
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
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, '__isset', array('name' => $name), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb98c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldereb98c;
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
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, '__unset', array('name' => $name), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereb98c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldereb98c;
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
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, '__clone', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        $this->valueHoldereb98c = clone $this->valueHoldereb98c;
    }

    public function __sleep()
    {
        $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, '__sleep', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;

        return array('valueHoldereb98c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2772c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2772c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2772c && ($this->initializer2772c->__invoke($valueHoldereb98c, $this, 'initializeProxy', array(), $this->initializer2772c) || 1) && $this->valueHoldereb98c = $valueHoldereb98c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereb98c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereb98c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
