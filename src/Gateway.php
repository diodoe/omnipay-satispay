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
        return [];
    }

    public function authorize(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CreditCardRequest', $parameters);
    }

    public function purchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CreditCardRequest', $parameters);
    }

    public function completeAuthorize(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function capture(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function completePurchase(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function refund(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function void(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\TransactionReferenceRequest', $parameters);
    }

    public function createCard(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CreditCardRequest', $parameters);
    }

    public function updateCard(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CardReferenceRequest', $parameters);
    }

    public function deleteCard(array $parameters = [])
    {
        return $this->createRequest('\Omnipay\Satispay\Message\CardReferenceRequest', $parameters);
    }
}
