<?php

namespace ContainerXPErx9m;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7ab75 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb07bb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc964b = [
        
    ];

    public function getConnection()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getConnection', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getMetadataFactory', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getExpressionBuilder', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'beginTransaction', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getCache', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'transactional', array('func' => $func), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'commit', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->commit();
    }

    public function rollback()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'rollback', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getClassMetadata', array('className' => $className), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'createQuery', array('dql' => $dql), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'createNamedQuery', array('name' => $name), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'createQueryBuilder', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'flush', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'clear', array('entityName' => $entityName), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->clear($entityName);
    }

    public function close()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'close', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->close();
    }

    public function persist($entity)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'persist', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'remove', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'refresh', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'detach', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'merge', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'contains', array('entity' => $entity), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getEventManager', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getConfiguration', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'isOpen', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getUnitOfWork', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getProxyFactory', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'initializeObject', array('obj' => $obj), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'getFilters', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'isFiltersStateClean', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'hasFilters', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return $this->valueHolder7ab75->hasFilters();
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

        $instance->initializerb07bb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7ab75) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7ab75 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7ab75->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, '__get', ['name' => $name], $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        if (isset(self::$publicPropertiesc964b[$name])) {
            return $this->valueHolder7ab75->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ab75;

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

        $targetObject = $this->valueHolder7ab75;
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
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ab75;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7ab75;
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
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, '__isset', array('name' => $name), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ab75;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7ab75;
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
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, '__unset', array('name' => $name), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7ab75;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7ab75;
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
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, '__clone', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        $this->valueHolder7ab75 = clone $this->valueHolder7ab75;
    }

    public function __sleep()
    {
        $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, '__sleep', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;

        return array('valueHolder7ab75');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb07bb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb07bb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb07bb && ($this->initializerb07bb->__invoke($valueHolder7ab75, $this, 'initializeProxy', array(), $this->initializerb07bb) || 1) && $this->valueHolder7ab75 = $valueHolder7ab75;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7ab75;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7ab75;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
