<?php

namespace Container3rMGDLv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder75557 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9b1fc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesdb8bf = [
        
    ];

    public function getConnection()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getConnection', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getMetadataFactory', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getExpressionBuilder', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'beginTransaction', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getCache', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'transactional', array('func' => $func), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'commit', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->commit();
    }

    public function rollback()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'rollback', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getClassMetadata', array('className' => $className), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'createQuery', array('dql' => $dql), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'createNamedQuery', array('name' => $name), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'createQueryBuilder', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'flush', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'clear', array('entityName' => $entityName), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->clear($entityName);
    }

    public function close()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'close', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->close();
    }

    public function persist($entity)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'persist', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'remove', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'refresh', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'detach', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'merge', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'contains', array('entity' => $entity), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getEventManager', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getConfiguration', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'isOpen', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getUnitOfWork', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getProxyFactory', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'initializeObject', array('obj' => $obj), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'getFilters', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'isFiltersStateClean', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'hasFilters', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return $this->valueHolder75557->hasFilters();
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

        $instance->initializer9b1fc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder75557) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder75557 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder75557->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, '__get', ['name' => $name], $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        if (isset(self::$publicPropertiesdb8bf[$name])) {
            return $this->valueHolder75557->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75557;

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

        $targetObject = $this->valueHolder75557;
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
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75557;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder75557;
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
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, '__isset', array('name' => $name), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75557;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder75557;
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
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, '__unset', array('name' => $name), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder75557;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder75557;
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
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, '__clone', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        $this->valueHolder75557 = clone $this->valueHolder75557;
    }

    public function __sleep()
    {
        $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, '__sleep', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;

        return array('valueHolder75557');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9b1fc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9b1fc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9b1fc && ($this->initializer9b1fc->__invoke($valueHolder75557, $this, 'initializeProxy', array(), $this->initializer9b1fc) || 1) && $this->valueHolder75557 = $valueHolder75557;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder75557;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder75557;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
