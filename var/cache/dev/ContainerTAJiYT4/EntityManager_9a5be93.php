<?php

namespace ContainerTAJiYT4;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1406a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer47ede = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc0c32 = [
        
    ];

    public function getConnection()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getConnection', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getMetadataFactory', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getExpressionBuilder', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'beginTransaction', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getCache', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'transactional', array('func' => $func), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'commit', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->commit();
    }

    public function rollback()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'rollback', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getClassMetadata', array('className' => $className), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'createQuery', array('dql' => $dql), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'createNamedQuery', array('name' => $name), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'createQueryBuilder', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'flush', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'clear', array('entityName' => $entityName), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->clear($entityName);
    }

    public function close()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'close', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->close();
    }

    public function persist($entity)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'persist', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'remove', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'refresh', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'detach', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'merge', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'contains', array('entity' => $entity), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getEventManager', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getConfiguration', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'isOpen', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getUnitOfWork', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getProxyFactory', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'initializeObject', array('obj' => $obj), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'getFilters', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'isFiltersStateClean', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'hasFilters', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return $this->valueHolder1406a->hasFilters();
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

        $instance->initializer47ede = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1406a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1406a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1406a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, '__get', ['name' => $name], $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        if (isset(self::$publicPropertiesc0c32[$name])) {
            return $this->valueHolder1406a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1406a;

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

        $targetObject = $this->valueHolder1406a;
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
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1406a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1406a;
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
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, '__isset', array('name' => $name), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1406a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1406a;
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
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, '__unset', array('name' => $name), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1406a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1406a;
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
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, '__clone', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        $this->valueHolder1406a = clone $this->valueHolder1406a;
    }

    public function __sleep()
    {
        $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, '__sleep', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;

        return array('valueHolder1406a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer47ede = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer47ede;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer47ede && ($this->initializer47ede->__invoke($valueHolder1406a, $this, 'initializeProxy', array(), $this->initializer47ede) || 1) && $this->valueHolder1406a = $valueHolder1406a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1406a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1406a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
