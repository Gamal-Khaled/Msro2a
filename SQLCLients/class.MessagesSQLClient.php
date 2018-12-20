<?php

error_reporting(E_ALL);

/**
 * Project Use Case Diargam - class.MessagesSQLClient.php
 *
 * $Id$
 *
 * This file is part of Project Use Case Diargam.
 *
 * Automatically generated on 19.12.2018, 21:15:09 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC7-includes begin
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC7-includes end

/* user defined constants */
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC7-constants begin
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC7-constants end

/**
 * Short description of class MessagesSQLClient
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class MessagesSQLClient
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Short description of method saveNewMessage
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Message msg
     * @param  integer userId
     * @return integer
     */
    public function saveNewMessage( Message $msg,  integer $userId)
    {
        $returnValue = null;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC8 begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC8 end

        return $returnValue;
    }

    /**
     * Short description of method deleteMessage
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer msgId
     * @return boolean
     */
    public function deleteMessage( integer $msgId)
    {
        $returnValue = (bool) false;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CCC begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CCC end

        return (bool) $returnValue;
    }

    /**
     * Short description of method getUserMsgs
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  User user
     * @return Message[]
     */
    public function getUserMsgs( User $user)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C01 begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C01 end

        return $returnValue;
    }

    /**
     * Short description of method getMessageById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer msgId
     * @return Message
     */
    public function getMessageById( integer $msgId)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C25 begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C25 end

        return $returnValue;
    }

} /* end of class MessagesSQLClient */

?>