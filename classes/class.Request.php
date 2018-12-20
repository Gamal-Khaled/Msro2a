<?php

error_reporting(E_ALL);

/**
 * Project Use Case Diargam - class.Request.php
 *
 * $Id$
 *
 * This file is part of Project Use Case Diargam.
 *
 * Automatically generated on 19.12.2018, 21:15:08 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Post
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.Post.php');

/**
 * include User
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once('class.User.php');

/* user defined includes */
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000AFA-includes begin
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000AFA-includes end

/* user defined constants */
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000AFA-constants begin
// section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000AFA-constants end

/**
 * Short description of class Request
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Request
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 1    // generateAssociationEnd :     // generateAssociationEnd : 1    // generateAssociationEnd : 1

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var Integer
     */
    public $id = null;

    /**
     * Short description of attribute answers
     *
     * @access public
     * @var ArrayList<String>
     */
    public $answers = null;

    /**
     * Short description of attribute postId
     *
     * @access public
     * @var integer
     */
    public $postId = null;

    // --- OPERATIONS ---

    /**
     * Short description of method Request
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer id
     * @param  ArrayList<String> ansrs
     * @return Request
     */
    public function __construct( integer $id,  String $ansrs)
    {
        $returnValue = null;

        // section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000B54 begin
        // section -64--88-1-3--3bca501b:1678de6ddda:-8000:0000000000000B54 end

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

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C67 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C67 end

        return $returnValue;
    }

    /**
     * Short description of method getAnswers
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return ArrayList<String>
     */
    public function getAnswers()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C69 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C69 end

        return $returnValue;
    }

    /**
     * Short description of method getAnswerByIndex
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer ind
     * @return String
     */
    public function getAnswerByIndex( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C6B begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C6B end

        return $returnValue;
    }

    /**
     * Short description of method getPostId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return integer
     */
    public function getPostId()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C6E begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C6E end

        return $returnValue;
    }

    /**
     * Short description of method setAnswerById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer ind
     * @param  String answer
     * @return integer
     */
    public function setAnswerById( integer $ind,  String $answer)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C70 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C70 end

        return $returnValue;
    }

    /**
     * Short description of method addAnswer
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  String answer
     * @return integer
     */
    public function addAnswer( String $answer)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C74 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C74 end

        return $returnValue;
    }

    /**
     * Short description of method removeAnswer
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer ind
     * @return String
     */
    public function removeAnswer( integer $ind)
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C77 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C77 end

        return $returnValue;
    }

    /**
     * Short description of method setPostId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer id
     * @return void
     */
    public function setPostId( integer $id)
    {
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C7A begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C7A end
    }

} /* end of class Request */

?>