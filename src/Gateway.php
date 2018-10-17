<?php
namespace Omnipay\Satispay;

use Omnipay\Common\AbstractGateway;


class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Satispay';
    }

    public function getDefaultParameters()
    {
        return array();
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CreditCardRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CreditCardRequest', $parameters);
    }

    public function completeAuthorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function createCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CreditCardRequest', $parameters);
    }

    public function updateCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CardReferenceRequest', $parameters);
    }

    public function deleteCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CardReferenceRequest', $parameters);
    }
}
