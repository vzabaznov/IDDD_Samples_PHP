<?php

namespace SaasOvation\Collaboration\Application\Calendar\Data;

class CalendarEntryInviteeData
{
    /**
     * @var string
     */
    private $calendarEntryId;

    /**
     * @var string
     */
    private $participantEmailAddress;

    /**
     * @var string
     */
    private $participantIdentity;

    /**
     * @var string
     */
    private $participantName;

    /**
     * @var string
     */
    private $tenantId;

    /**
     * @return string
     */
    public function getCalendarEntryId()
    {
        return $this->calendarEntryId;
    }

    /**
     * @param string $calendarEntryId
     */
    public function setCalendarEntryId($calendarEntryId)
    {
        $this->calendarEntryId = $calendarEntryId;
    }

    /**
     * @return string
     */
    public function getParticipantEmailAddress()
    {
        return $this->participantEmailAddress;
    }

    /**
     * @param string $participantEmailAddress
     */
    public function setParticipantEmailAddress($participantEmailAddress)
    {
        $this->participantEmailAddress = $participantEmailAddress;
    }

    /**
     * @return string
     */
    public function getParticipantIdentity()
    {
        return $this->participantIdentity;
    }

    /**
     * @param string $participantIdentity
     */
    public function setParticipantIdentity($participantIdentity)
    {
        $this->participantIdentity = $participantIdentity;
    }

    /**
     * @return string
     */
    public function getParticipantName()
    {
        return $this->participantName;
    }

    /**
     * @param string $participantName
     */
    public function setParticipantName($participantName)
    {
        $this->participantName = $participantName;
    }

    /**
     * @return string
     */
    public function getTenantId()
    {
        return $this->tenantId;
    }

    /**
     * @param string $tenantId
     */
    public function setTenantId($tenantId)
    {
        $this->tenantId = $tenantId;
    }
}