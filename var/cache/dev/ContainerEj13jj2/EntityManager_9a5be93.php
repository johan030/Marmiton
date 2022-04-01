<?php

namespace ContainerEj13jj2;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder98773 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere254b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesecd41 = [
        
    ];

    public function getConnection()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getConnection', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getMetadataFactory', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getExpressionBuilder', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'beginTransaction', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getCache', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getCache();
    }

    public function transactional($func)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'transactional', array('func' => $func), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'wrapInTransaction', array('func' => $func), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'commit', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->commit();
    }

    public function rollback()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'rollback', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getClassMetadata', array('className' => $className), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'createQuery', array('dql' => $dql), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'createNamedQuery', array('name' => $name), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'createQueryBuilder', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'flush', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'clear', array('entityName' => $entityName), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->clear($entityName);
    }

    public function close()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'close', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->close();
    }

    public function persist($entity)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'persist', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'remove', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'refresh', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'detach', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'merge', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getRepository', array('entityName' => $entityName), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'contains', array('entity' => $entity), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getEventManager', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getConfiguration', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'isOpen', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getUnitOfWork', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getProxyFactory', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'initializeObject', array('obj' => $obj), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'getFilters', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'isFiltersStateClean', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'hasFilters', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return $this->valueHolder98773->hasFilters();
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

        $instance->initializere254b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder98773) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder98773 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder98773->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, '__get', ['name' => $name], $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        if (isset(self::$publicPropertiesecd41[$name])) {
            return $this->valueHolder98773->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98773;

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

        $targetObject = $this->valueHolder98773;
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
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98773;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder98773;
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
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, '__isset', array('name' => $name), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98773;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder98773;
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
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, '__unset', array('name' => $name), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder98773;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder98773;
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
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, '__clone', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        $this->valueHolder98773 = clone $this->valueHolder98773;
    }

    public function __sleep()
    {
        $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, '__sleep', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;

        return array('valueHolder98773');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere254b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere254b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere254b && ($this->initializere254b->__invoke($valueHolder98773, $this, 'initializeProxy', array(), $this->initializere254b) || 1) && $this->valueHolder98773 = $valueHolder98773;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder98773;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder98773;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
