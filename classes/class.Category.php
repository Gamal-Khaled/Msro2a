<?php

error_reporting(E_ALL);

/**
 * Project Use Case Diargam - class.Category.php
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

/* user defined includes */
// section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BCD-includes begin
// section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BCD-includes end

/* user defined constants */
// section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BCD-constants begin
// section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BCD-constants end

/**
 * Short description of class Category
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Category
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 1..*

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access public
     * @var integer
     */
    public $id = null;

    /**
     * Short description of attribute categoryName
     *
     * @access public
     * @var String
     */
    public $categoryName = null;

    // --- OPERATIONS ---

    /**
     * Short description of method Category
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  integer id
     * @param  String categoryName
     * @return mixed
     */
    public function __construct( integer $id,  String $categoryName)
    {
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BD7 begin
        // section -64--88-1-2--4a09f99e:167a9b5ed28:-8000:0000000000000BD7 end
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

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C29 begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C29 end

        return $returnValue;
    }

    /**
     * Short description of method getName
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return String
     */
    public function getName()
    {
        $returnValue = null;

        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C2B begin
        // section 127-0-0-1--f3d0e8e:167bbcb7875:-8000:0000000000000C2B end

        return $returnValue;
    }

} /* end of class Category */

?>