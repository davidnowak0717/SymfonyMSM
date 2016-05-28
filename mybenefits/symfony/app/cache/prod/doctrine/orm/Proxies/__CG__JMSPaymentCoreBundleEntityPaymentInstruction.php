<?php

namespace Proxies\__CG__\JMS\Payment\CoreBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PaymentInstruction extends \JMS\Payment\CoreBundle\Entity\PaymentInstruction implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'account', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'amount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'approvedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'approvingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'createdAt', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'creditedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'creditingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'credits', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'currency', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'depositedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'depositingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'extendedData', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'extendedDataOriginal', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'id', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'payments', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'paymentSystemName', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'reversingApprovedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'reversingCreditedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'reversingDepositedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'state', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'updatedAt');
        }

        return array('__isInitialized__', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'account', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'amount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'approvedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'approvingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'createdAt', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'creditedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'creditingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'credits', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'currency', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'depositedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'depositingAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'extendedData', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'extendedDataOriginal', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'id', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'payments', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'paymentSystemName', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'reversingApprovedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'reversingCreditedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'reversingDepositedAmount', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'state', '' . "\0" . 'JMS\\Payment\\CoreBundle\\Entity\\PaymentInstruction' . "\0" . 'updatedAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PaymentInstruction $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function addCredit(\JMS\Payment\CoreBundle\Entity\Credit $credit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCredit', array($credit));

        return parent::addCredit($credit);
    }

    /**
     * {@inheritDoc}
     */
    public function addPayment(\JMS\Payment\CoreBundle\Entity\Payment $payment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPayment', array($payment));

        return parent::addPayment($payment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmount', array());

        return parent::getAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrency()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrency', array());

        return parent::getCurrency();
    }

    /**
     * {@inheritDoc}
     */
    public function getPaymentSystemName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaymentSystemName', array());

        return parent::getPaymentSystemName();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtendedData()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtendedData', array());

        return parent::getExtendedData();
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', array());

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getApprovingAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprovingAmount', array());

        return parent::getApprovingAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getApprovedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApprovedAmount', array());

        return parent::getApprovedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditedAmount', array());

        return parent::getCreditedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditingAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditingAmount', array());

        return parent::getCreditingAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getDepositedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepositedAmount', array());

        return parent::getDepositedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getDepositingAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepositingAmount', array());

        return parent::getDepositingAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getCredits()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredits', array());

        return parent::getCredits();
    }

    /**
     * {@inheritDoc}
     */
    public function getPayments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayments', array());

        return parent::getPayments();
    }

    /**
     * {@inheritDoc}
     */
    public function getPendingTransaction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPendingTransaction', array());

        return parent::getPendingTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getReversingApprovedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReversingApprovedAmount', array());

        return parent::getReversingApprovedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getReversingCreditedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReversingCreditedAmount', array());

        return parent::getReversingCreditedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getReversingDepositedAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReversingDepositedAmount', array());

        return parent::getReversingDepositedAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function hasPendingTransaction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPendingTransaction', array());

        return parent::hasPendingTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function onPostLoad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPostLoad', array());

        return parent::onPostLoad();
    }

    /**
     * {@inheritDoc}
     */
    public function onPreSave()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onPreSave', array());

        return parent::onPreSave();
    }

    /**
     * {@inheritDoc}
     */
    public function setApprovingAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApprovingAmount', array($amount));

        return parent::setApprovingAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setApprovedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApprovedAmount', array($amount));

        return parent::setApprovedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditedAmount', array($amount));

        return parent::setCreditedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditingAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditingAmount', array($amount));

        return parent::setCreditingAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setDepositedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepositedAmount', array($amount));

        return parent::setDepositedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setDepositingAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepositingAmount', array($amount));

        return parent::setDepositingAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setReversingApprovedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReversingApprovedAmount', array($amount));

        return parent::setReversingApprovedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setReversingCreditedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReversingCreditedAmount', array($amount));

        return parent::setReversingCreditedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setReversingDepositedAmount($amount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReversingDepositedAmount', array($amount));

        return parent::setReversingDepositedAmount($amount);
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', array($state));

        return parent::setState($state);
    }

}
