<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.metadata_driver' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\DriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Metadata\\Driver\\AbstractDoctrineTypeDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Metadata\\Driver\\DoctrineTypeDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\AdvancedDriverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\DriverChain.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\AbstractFileDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Metadata\\Driver\\YamlDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\AdvancedFileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\metadata\\src\\Metadata\\Driver\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Metadata\\Driver\\XmlDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Metadata\\Driver\\PhpDriver.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\Metadata\\Driver\\AnnotationDriver.php';

$a = new \Metadata\Driver\FileLocator(array());

return $this->services['jms_serializer.metadata_driver'] = new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain(array(0 => new \JMS\Serializer\Metadata\Driver\YamlDriver($a), 1 => new \JMS\Serializer\Metadata\Driver\XmlDriver($a), 2 => new \JMS\Serializer\Metadata\Driver\PhpDriver($a), 3 => new \JMS\Serializer\Metadata\Driver\AnnotationDriver(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}))), ${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
