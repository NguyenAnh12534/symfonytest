<?php

namespace ContainerNo54cxi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder49370 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd95d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties671a8 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getConnection', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getMetadataFactory', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getExpressionBuilder', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'beginTransaction', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getCache', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'transactional', array('func' => $func), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'commit', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->commit();
    }

    public function rollback()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'rollback', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getClassMetadata', array('className' => $className), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'createQuery', array('dql' => $dql), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'createNamedQuery', array('name' => $name), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'createQueryBuilder', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'flush', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'clear', array('entityName' => $entityName), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->clear($entityName);
    }

    public function close()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'close', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->close();
    }

    public function persist($entity)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'persist', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'remove', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'refresh', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'detach', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'merge', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'contains', array('entity' => $entity), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getEventManager', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getConfiguration', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'isOpen', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getUnitOfWork', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getProxyFactory', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'initializeObject', array('obj' => $obj), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'getFilters', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'isFiltersStateClean', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'hasFilters', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return $this->valueHolder49370->hasFilters();
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

        $instance->initializerd95d6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder49370) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder49370 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder49370->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, '__get', ['name' => $name], $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        if (isset(self::$publicProperties671a8[$name])) {
            return $this->valueHolder49370->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49370;

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

        $targetObject = $this->valueHolder49370;
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
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49370;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder49370;
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
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, '__isset', array('name' => $name), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49370;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder49370;
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
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, '__unset', array('name' => $name), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder49370;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder49370;
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
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, '__clone', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        $this->valueHolder49370 = clone $this->valueHolder49370;
    }

    public function __sleep()
    {
        $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, '__sleep', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;

        return array('valueHolder49370');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd95d6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd95d6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd95d6 && ($this->initializerd95d6->__invoke($valueHolder49370, $this, 'initializeProxy', array(), $this->initializerd95d6) || 1) && $this->valueHolder49370 = $valueHolder49370;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder49370;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder49370;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
