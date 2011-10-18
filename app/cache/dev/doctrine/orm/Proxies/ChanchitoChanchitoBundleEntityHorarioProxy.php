<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ChanchitoChanchitoBundleEntityHorarioProxy extends \Chanchito\ChanchitoBundle\Entity\Horario implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setNombre($nombre)
    {
        $this->__load();
        return parent::setNombre($nombre);
    }

    public function getNombre()
    {
        $this->__load();
        return parent::getNombre();
    }

    public function addParametroTardanza(\Chanchito\ChanchitoBundle\Entity\ParametroTardanza $parametrosTardanza)
    {
        $this->__load();
        return parent::addParametroTardanza($parametrosTardanza);
    }

    public function getParametrosTardanza()
    {
        $this->__load();
        return parent::getParametrosTardanza();
    }

    public function addUsuario(\Chanchito\ChanchitoBundle\Entity\Usuario $usuario)
    {
        $this->__load();
        return parent::addUsuario($usuario);
    }

    public function getUsuario()
    {
        $this->__load();
        return parent::getUsuario();
    }

    public function getUsuarios()
    {
        $this->__load();
        return parent::getUsuarios();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nombre', 'parametrosTardanza', 'usuarios');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}