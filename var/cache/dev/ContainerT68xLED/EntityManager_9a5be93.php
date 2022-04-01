<?php

namespace ContainerT68xLED;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder42a6f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42b2c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82fe1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getConnection', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getMetadataFactory', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getExpressionBuilder', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'beginTransaction', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getCache', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getCache();
    }

    public function transactional($func)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'transactional', array('func' => $func), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'wrapInTransaction', array('func' => $func), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'commit', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->commit();
    }

    public function rollback()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'rollback', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getClassMetadata', array('className' => $className), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'createQuery', array('dql' => $dql), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'createNamedQuery', array('name' => $name), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'createQueryBuilder', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'flush', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'clear', array('entityName' => $entityName), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->clear($entityName);
    }

    public function close()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'close', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->close();
    }

    public function persist($entity)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'persist', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'remove', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'refresh', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'detach', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'merge', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'contains', array('entity' => $entity), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getEventManager', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getConfiguration', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'isOpen', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getUnitOfWork', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getProxyFactory', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'initializeObject', array('obj' => $obj), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'getFilters', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'isFiltersStateClean', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'hasFilters', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return $this->valueHolder42a6f->hasFilters();
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

        $instance->initializer42b2c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder42a6f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder42a6f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder42a6f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, '__get', ['name' => $name], $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        if (isset(self::$publicProperties82fe1[$name])) {
            return $this->valueHolder42a6f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder42a6f;

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

        $targetObject = $this->valueHolder42a6f;
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
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder42a6f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder42a6f;
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
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, '__isset', array('name' => $name), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder42a6f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder42a6f;
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
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, '__unset', array('name' => $name), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder42a6f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder42a6f;
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
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, '__clone', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        $this->valueHolder42a6f = clone $this->valueHolder42a6f;
    }

    public function __sleep()
    {
        $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, '__sleep', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;

        return array('valueHolder42a6f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42b2c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42b2c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42b2c && ($this->initializer42b2c->__invoke($valueHolder42a6f, $this, 'initializeProxy', array(), $this->initializer42b2c) || 1) && $this->valueHolder42a6f = $valueHolder42a6f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder42a6f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder42a6f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
