<?php

error_reporting(E_ALL);

/**
 * Project Use Case Diargam - class.Message.php
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

/**
 * include User
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.User.php');

/* user defined includes */
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000ADD-includes begin
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000ADD-includes end

/* user defined constants */
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000ADD-constants begin
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000ADD-constants end

/**
 * Short description of class Message
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Message
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 1

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute msg
     *
     * @access public
     * @var String
     */
    public $msg = null;

    // --- OPERATIONS ---

    /**
     * Short description of method Message
     *
     * @access private
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer id
     * @param  String msg
     * @return Message
     */
    private function Message( integer $id,  String $msg)
    {
        $returnValue = null;

        // section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000AE9 begin
        // section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000AE9 end

        return $returnValue;
    }

    /**
     * Short description of method getId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return integer
     */
    public function getId()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C1F begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C1F end

        return $returnValue;
    }

    /**
     * Short description of method getMsg
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getMsg()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C21 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C21 end

        return $returnValue;
    }

} /* end of class Message */

?>