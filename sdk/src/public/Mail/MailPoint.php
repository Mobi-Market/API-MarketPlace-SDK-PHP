<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 09/11/2016
 * Time: 15:05
 */

namespace Sdk\Mail;

use Sdk\AbstractPoint;
use Sdk\Soap\Common\Body;
use Sdk\Soap\Common\Envelope;
use Sdk\Soap\HeaderMessage\HeaderMessage;
use Sdk\Soap\Mail\GenerateDiscussionMailGuid;
use Sdk\Soap\Mail\GetDiscussionMailList;
use Sdk\Soap\Mail\Request;
use Sdk\Soap\Mail\Response\GenerateDiscussionMailGuidResponse;
use Sdk\Soap\Mail\Response\GetDiscussionMailListResponse;

class MailPoint extends AbstractPoint
{
    /**
     * @param $discussionIDS
     * @return GetDiscussionMailListResponse
     */
    public function getDiscussionMailList($discussionIDS)
    {
        $envelope = new Envelope();
        $body = new Body();
        $getDiscussionMailList = new GetDiscussionMailList();
        $header = new HeaderMessage();

        $request = new Request();
        $requestXML = $request->generateDiscussionIds($discussionIDS);

        $headerXML = $header->generateHeader();
        $getDiscussionMailListXML = $getDiscussionMailList->generateEnclosingBalise($headerXML . $requestXML);
        $bodyXML = $body->generateXML($getDiscussionMailListXML);
        $envelopeXML = $envelope->generateXML($bodyXML);

        $response = $this->_sendRequest('GetDiscussionMailList', $envelopeXML);

        $getDiscussionMailListResponse = new GetDiscussionMailListResponse($response);
        return $getDiscussionMailListResponse;
    }

    /**
     * @param $orderIds
     * @return GenerateDiscussionMailGuidResponse
     */
    public function generateDiscussionMailGuid($orderIds)
    {
        $envelope = new Envelope();
        $body = new Body();
        $generateDiscussionMailGuid = new GenerateDiscussionMailGuid();
        $header = new HeaderMessage();

        $request = new Request();
        $requestXML = $request->generateScopusIds($orderIds);

        $headerXML = $header->generateHeader();
        $generateDiscussionMailGuidXML = $generateDiscussionMailGuid->generateEnclosingBalise($headerXML . $requestXML);
        $bodyXML = $body->generateXML($generateDiscussionMailGuidXML);
        $envelopeXML = $envelope->generateXML($bodyXML);

        $response = $this->_sendRequest('GenerateDiscussionMailGuid', $envelopeXML);

        $generateDiscussionMailGuidResponse = new GenerateDiscussionMailGuidResponse($response);
        return $generateDiscussionMailGuidResponse;
    }
}
