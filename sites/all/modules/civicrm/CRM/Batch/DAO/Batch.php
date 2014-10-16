<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.5                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2014                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2014
 *
 * Generated from xml/schema/CRM/Batch/Batch.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
class CRM_Batch_DAO_Batch extends CRM_Core_DAO
{
  /**
   * static instance to hold the table name
   *
   * @var string
   * @static
   */
  static $_tableName = 'civicrm_batch';
  /**
   * static instance to hold the field values
   *
   * @var array
   * @static
   */
  static $_fields = null;
  /**
   * static instance to hold the keys used in $_fields for each field.
   *
   * @var array
   * @static
   */
  static $_fieldKeys = null;
  /**
   * static instance to hold the FK relationships
   *
   * @var string
   * @static
   */
  static $_links = null;
  /**
   * static instance to hold the values that can
   * be imported
   *
   * @var array
   * @static
   */
  static $_import = null;
  /**
   * static instance to hold the values that can
   * be exported
   *
   * @var array
   * @static
   */
  static $_export = null;
  /**
   * static value to see if we should log any modifications to
   * this table in the civicrm_log table
   *
   * @var boolean
   * @static
   */
  static $_log = false;
  /**
   * Unique Address ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Variable name/programmatic handle for this batch.
   *
   * @var string
   */
  public $name;
  /**
   * Friendly Name.
   *
   * @var string
   */
  public $title;
  /**
   * Description of this batch set.
   *
   * @var text
   */
  public $description;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * When was this item created
   *
   * @var datetime
   */
  public $created_date;
  /**
   * FK to Contact ID
   *
   * @var int unsigned
   */
  public $modified_id;
  /**
   * When was this item created
   *
   * @var datetime
   */
  public $modified_date;
  /**
   * FK to Saved Search ID
   *
   * @var int unsigned
   */
  public $saved_search_id;
  /**
   * fk to Batch Status options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $status_id;
  /**
   * fk to Batch Type options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $type_id;
  /**
   * fk to Batch mode options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $mode_id;
  /**
   * Total amount for this batch.
   *
   * @var float
   */
  public $total;
  /**
   * Number of items in a batch.
   *
   * @var int unsigned
   */
  public $item_count;
  /**
   * fk to Payment Instrument options in civicrm_option_values
   *
   * @var int unsigned
   */
  public $payment_instrument_id;
  /**
   *
   * @var datetime
   */
  public $exported_date;
  /**
   * cache entered data
   *
   * @var longtext
   */
  public $data;
  /**
   * class constructor
   *
   * @access public
   * @return civicrm_batch
   */
  function __construct()
  {
    $this->__table = 'civicrm_batch';
    parent::__construct();
  }
  /**
   * return foreign keys and entity references
   *
   * @static
   * @access public
   * @return array of CRM_Core_Reference_Interface
   */
  static function getReferenceColumns()
  {
    if (!self::$_links) {
      self::$_links = static ::createReferenceColumns(__CLASS__);
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'modified_id', 'civicrm_contact', 'id');
      self::$_links[] = new CRM_Core_Reference_Basic(self::getTableName() , 'saved_search_id', 'civicrm_saved_search', 'id');
    }
    return self::$_links;
  }
  /**
   * returns all the column names of this table
   *
   * @access public
   * @return array
   */
  static function &fields()
  {
    if (!(self::$_fields)) {
      self::$_fields = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch ID') ,
          'required' => true,
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Batch Name') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'title' => array(
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Batch Title') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => ts('Batch Description') ,
          'rows' => 4,
          'cols' => 80,
          'html' => array(
            'type' => 'TextArea',
          ) ,
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Created By') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Batch Created Date') ,
          'html' => array(
            'type' => 'Select Date',
          ) ,
        ) ,
        'modified_id' => array(
          'name' => 'modified_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Modified By') ,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'modified_date' => array(
          'name' => 'modified_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Batch Modified Date') ,
        ) ,
        'saved_search_id' => array(
          'name' => 'saved_search_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Smart Group') ,
          'FKClassName' => 'CRM_Contact_DAO_SavedSearch',
          'html' => array(
            'type' => 'Autocomplete-Select',
          ) ,
        ) ,
        'status_id' => array(
          'name' => 'status_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Status') ,
          'required' => true,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'batch_status',
          )
        ) ,
        'type_id' => array(
          'name' => 'type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Type') ,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'batch_type',
          )
        ) ,
        'mode_id' => array(
          'name' => 'mode_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Mode') ,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'batch_mode',
          )
        ) ,
        'total' => array(
          'name' => 'total',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => ts('Batch Total') ,
          'precision' => array(
            20,
            2
          ) ,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'item_count' => array(
          'name' => 'item_count',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Number of Items') ,
          'html' => array(
            'type' => 'Text',
          ) ,
        ) ,
        'payment_instrument_id' => array(
          'name' => 'payment_instrument_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Batch Payment Instrument') ,
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'payment_instrument',
          )
        ) ,
        'exported_date' => array(
          'name' => 'exported_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Batch Exported Date') ,
        ) ,
        'data' => array(
          'name' => 'data',
          'type' => CRM_Utils_Type::T_LONGTEXT,
          'title' => ts('Batch Data') ,
        ) ,
      );
    }
    return self::$_fields;
  }
  /**
   * Returns an array containing, for each field, the arary key used for that
   * field in self::$_fields.
   *
   * @access public
   * @return array
   */
  static function &fieldKeys()
  {
    if (!(self::$_fieldKeys)) {
      self::$_fieldKeys = array(
        'id' => 'id',
        'name' => 'name',
        'title' => 'title',
        'description' => 'description',
        'created_id' => 'created_id',
        'created_date' => 'created_date',
        'modified_id' => 'modified_id',
        'modified_date' => 'modified_date',
        'saved_search_id' => 'saved_search_id',
        'status_id' => 'status_id',
        'type_id' => 'type_id',
        'mode_id' => 'mode_id',
        'total' => 'total',
        'item_count' => 'item_count',
        'payment_instrument_id' => 'payment_instrument_id',
        'exported_date' => 'exported_date',
        'data' => 'data',
      );
    }
    return self::$_fieldKeys;
  }
  /**
   * returns the names of this table
   *
   * @access public
   * @static
   * @return string
   */
  static function getTableName()
  {
    return CRM_Core_DAO::getLocaleTableName(self::$_tableName);
  }
  /**
   * returns if this table needs to be logged
   *
   * @access public
   * @return boolean
   */
  function getLog()
  {
    return self::$_log;
  }
  /**
   * returns the list of fields that can be imported
   *
   * @access public
   * return array
   * @static
   */
  static function &import($prefix = false)
  {
    if (!(self::$_import)) {
      self::$_import = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('import', $field)) {
          if ($prefix) {
            self::$_import['batch'] = & $fields[$name];
          } else {
            self::$_import[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_import;
  }
  /**
   * returns the list of fields that can be exported
   *
   * @access public
   * return array
   * @static
   */
  static function &export($prefix = false)
  {
    if (!(self::$_export)) {
      self::$_export = array();
      $fields = self::fields();
      foreach($fields as $name => $field) {
        if (CRM_Utils_Array::value('export', $field)) {
          if ($prefix) {
            self::$_export['batch'] = & $fields[$name];
          } else {
            self::$_export[$name] = & $fields[$name];
          }
        }
      }
    }
    return self::$_export;
  }
}
