<?php

error_reporting(E_ALL);

/**
 * Project Use Case Diargam - class.RequestsSQLClient.php
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
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CBF-includes begin
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CBF-includes end

/* user defined constants */
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CBF-constants begin
// section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CBF-constants end

/**
 * Short description of class RequestsSQLClient
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class RequestsSQLClient
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    // --- OPERATIONS ---

    /**
     * Short description of method saveNewRequest
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  Request rqst
     * @param  integer userId
     * @return integer
     */
    public function saveNewRequest( Request $rqst,  integer $userId)
    {
        $returnValue = null;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC0 begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC0 end

        return $returnValue;
    }

    /**
     * Short description of method deleteRequest
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer rqstId
     * @return boolean
     */
    public function deleteRequest( integer $rqstId)
    {
        $returnValue = (bool) false;

        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC4 begin
        // section -64--88-1-4--4b774351:167a7e08059:-8000:0000000000000CC4 end

        return (bool) $returnValue;
    }

    /**
     * Short description of method getUserRequests
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  user User
     * @return Request[]
     */
    public function getUserRequests( user $User)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BFC begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BFC end

        return $returnValue;
    }

    /**
     * Short description of method getRequestById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer rqstId
     * @return Request
     */
    public function getRequestById( integer $rqstId)
    {
        $returnValue = null;

        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C22 begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000C22 end

        return $returnValue;
    }

} /* end of class RequestsSQLClient */

?>