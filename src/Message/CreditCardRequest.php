<?php
namespace Omnipay\Satispay\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Satispay Authorize/Purchase Request
 *
 * This is the request that will be called for any transaction which submits a credit card,
 * including `authorize` and `purchase`
 */
class CreditCardRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate('amount', 'card');

        $this->getCard()->validate();

        return ['amount' => $this->getAmount()];
    }

    public function sendData($data)
    {
        $data['reference'] = uniqid();
        $data['success'] = 0 === substr($this->getCard()->getNumber(), -1, 1) % 2;
        $data['message'] = $data['success'] ? 'Success' : 'Failure';

        return $this->response = new Response($this, $data);
    }
}
